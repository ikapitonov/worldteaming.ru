<?php include "header.php";
require_once 'phpScripts/randomStr.php'; $getURLid = $_GET['id']; ?>
 
<?php 
if (empty($getURLid)) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {

    $sqlIdUser = "SELECT id,name,lastname,email,mailStr,mailVerify FROM users WHERE id=:id";
    $stmtIdUser = $pdo->prepare($sqlIdUser);
    $stmtIdUser->execute([':id' => $getURLid]); 
    $itemIdUser = $stmtIdUser->fetchAll(PDO::FETCH_ASSOC);
    if (!$itemIdUser) {
    	echo '<script type="text/javascript">location="index.php"</script>';
    } else {
    	$itemsIdUser = $itemIdUser[0];
    	if ($itemsIdUser['id'] != $getURLid){
    		echo '<script type="text/javascript">location="index.php"</script>';
    	} else {
    		if ($itemsIdUser['mailVerify'] == 1) {
    			echo '<script type="text/javascript">location="index.php"</script>';
    		} else {



if (!empty($_GET['string'])) {
	if ($itemsIdUser['mailStr'] == $_GET['string']) {

		$sqlUpdVer = "UPDATE users SET mailStr=:mailStr,mailVerify=:mailVerify WHERE id=:id";
    $stmtUpdVer = $pdo->prepare($sqlUpdVer);
    $stmtUpdVer->execute([ ':mailStr' => null, ':mailVerify' => 1 ,':id' => $itemsIdUser['id']]);

        if ($stmtUpdVer) {
        	$yourIdTrue = $getURLid;
          $youEmaill = $itemsIdUser['email'];
          if (!$_COOKIE['email'] && !$_COOKIE['key']) {
              $_SESSION['auth'] = true;
              $_SESSION['id'] = $getURLid; 
              $_SESSION['email'] = $youEmaill; 
              require_once 'phpScripts/salt.php';
              $key = generateSalt();

              setcookie('email', $youEmaill, time()+60*60*24*30,"/");
              setcookie('key', $key, time()+60*60*24*30,"/"); 
              $sqlUpdateCook = "UPDATE users SET cookie=:cookie WHERE id=:id";
              $stmtUpdateCook = $pdo->prepare($sqlUpdateCook);
              $stmtUpdateCook->execute([ ':cookie' => $key, ':id' => $getURLid ]); ?>

              <script type="text/javascript">location="formStart-<?php echo $yourIdTrue; ?>"</script>
      <?php  } else { ?>
                  <script type="text/javascript">location="formStart-<?php echo $yourIdTrue; ?>"</script>
        <?php } }

	} else {
		  echo '<script type="text/javascript">location="index.php"</script>'; 
	}
} else {}


require_once 'phpScripts/emailReg.php';



if (count($_POST) > 0 && isset($_POST['change'])) {
  $email = $_POST['email'];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$sqlCheckEmail = "SELECT email FROM users WHERE email=:email";
    $stmtCheckEmail = $pdo->prepare($sqlCheckEmail);
    $stmtCheckEmail->execute([':email' => $email]); 
    $itemCheckEmail = $stmtCheckEmail->fetchAll(PDO::FETCH_ASSOC);
    if ($itemCheckEmail) {
    	$_SESSION['change'] = 1;
    } else {
        
		    $sqlUpdEmail = "UPDATE users SET email=:email WHERE id=:id";
		    $stmtUpdEmail = $pdo->prepare($sqlUpdEmail);
		    $stmtUpdEmail->execute([ ':email' => $email, ':id' => $itemsIdUser['id']]);

        sendMail($itemsIdUser['name'], $itemsIdUser['mailStr'], $itemsIdUser['id'], $_POST['email']);
		    $yourId = $itemsIdUser['id'];  ?>

        <script type="text/javascript">location="mail.php?id=<?php echo $yourId; ?>"</script>
   <?php   }
    } else {
        $_SESSION['change'] = 2;
    }
}

$returnTxt = ""; $returnTxtHow = ""; $classError = "";
if (count($_POST) > 0 && isset($_POST['returnMail'])) {
  $_SESSION['return'] = $_SESSION['return'] + 1;
  if ($_SESSION['return'] > 4) {
    $returnTxt = "Нельзя отправить более 5 раз";
    $classError = "errorChange";
  } else {
  	  $returnTxt = "Отправлено повторно!";
      sendMail($itemsIdUser['name'], $itemsIdUser['mailStr'], $itemsIdUser['id'], $itemsIdUser['email']);
  	  if ($_SESSION['return'] < 2) {
  	  	$returnTxtHow = "";
  	  } else {
  	  	  $returnTxtHow = $_SESSION['return'];
  	  }
  }
}
?>


<title>Подтверждение email</title>
<link rel="stylesheet" type="text/css" href="static/mail/mail.css">
<div class="wrap_with_Fo">

<div class="wrapper_mail">
	<div class="mail_img">
		<img src="static/img/mail.png">
	</div>
	<div class="mail_text">
		<span><h1>Привет, <?php echo " ". $itemsIdUser['name'] . " "  .$itemsIdUser['lastname'];?>!</h1>
			  Тебе было отправлено письмо для регистрации аккаунта
			  <br>Оно может быть в папке <b>Спам</b>
			  <br>Почта - <b><?php echo $itemsIdUser['email']; ?></b></span>
	</div>
	<div class="mail_wrap_func">
		<form method="POST">
			<input type="submit" name="returnMail" value="Мне не пришло письмо" id="returnMail">
			<div class="returnTrue <?php echo " ".$classError; ?>"><?php echo $returnTxt; ?><span><?php echo $returnTxtHow; ?></span></div>
		</form>
		<div class="mail_change_wrap">
			<div class="btn_change_click item_a_main"><b>Изменить адрес</b></div>
			<div class="changer_mail_wrap changer_mail_wrapNONE">
				<form method="POST">
					<input type="email" name="email" placeholder="Сменить почту" id="inputTextChange">
					<input type="submit" name="change" id="inputSubChange" value="Сменить">
				</form>
			</div>
			<div class="errorChange"><?php  if ($_SESSION['change'] == 1) { echo "Такой адрес уже существует"; } 
			                                elseif ($_SESSION['change'] == 2) { echo "Укажите нормальный адрес"; } 
			                                else {}?>
			             	
			</div>
		</div>
	</div>
</div>


<script src="static/mail/mail.js"></script>

<?php include "footer.php"; ?>
<?php $_SESSION['change'] = null; ?>
<?php } } } }  ?>