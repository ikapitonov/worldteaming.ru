<?php include "header.php"; ?> 
<?php 

if ($_SESSION['auth'] || $_SESSION['auth'] == true) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {
	if (count($_GET) != 2) {
		echo '<script type="text/javascript">location="index.php"</script>';
	} else {
        if ( empty($_GET['id']) || empty($_GET['string']) ) {
        	echo '<script type="text/javascript">location="index.php"</script>';
        } else {
        	$userId = $_GET['id'];
        	$userStr = $_GET['string'];

        	  $sqlIdUser = "SELECT id,email,formStart,passStr FROM users WHERE id=:id";
            $stmtIdUser = $pdo->prepare($sqlIdUser);
            $stmtIdUser->execute([':id' => $userId]); 
            $itemIdUser = $stmtIdUser->fetchAll(PDO::FETCH_ASSOC);
            if (!$itemIdUser) {
                echo '<script type="text/javascript">location="index.php"</script>';
            } else {
            	$itemsIdUser = $itemIdUser[0];
              
              if ($itemsIdUser['passStr'] != $userStr) {
              	echo '<script type="text/javascript">location="index.php"</script>';
              } else {

$passwordEr = ""; $passwordTwoEr = "";

if (count($_POST) > 0 && isset($_POST['changePass'])) {
	$password = $_POST['password'];
	$passwordTwo = $_POST['passwordTwo'];

    if ( iconv_strlen($password) < 6 ) {
       $passwordEr = "Пароль должен содержать не менее 6 символов";
    }
    if ( iconv_strlen($password) > 255 ) {
       $passwordEr = "Пароль должен содержать не более 255";
    }
    if (empty($password)) {
       $passwordEr = "Придумайте пароль";
    }
    if ( $password != $passwordTwo ) {
       $passwordTwoEr  = "Пароли не совпадают";
    }

    if ($passwordEr == "" && $passwordTwoEr == "") {

    	$_SESSION['passChange'] = false;

      require_once 'phpScripts/salt.php';

      $salt = generateSalt();
      $saltedPassword = md5($password.$salt);                
      $key = generateSalt();

    	$sqlUpdEmail = "UPDATE users SET  password=:password,salt=:salt,cookie=:cookie,passStr=:passStr WHERE id=:id";
      $stmtUpdEmail = $pdo->prepare($sqlUpdEmail);
      $stmtUpdEmail->execute([ ':password' => $saltedPassword,
                                ':salt' =>  $salt,
                                ':cookie' => $key,
                                ':passStr' => null,
                                ':id' => $itemsIdUser['id'] ]);
 

      $email = $itemsIdUser['email'];

      $_SESSION['auth'] = true;
      $_SESSION['id'] = $itemsIdUser['id']; 
      $_SESSION['email'] = $email;
      setcookie('email', $email, time()+60*60*24*30,"/");
      setcookie('key', $key, time()+60*60*24*30,"/"); 

      if ($itemsIdUser['formStart'] != 1) { ?>
        <script type="text/javascript">location="formStart-<?php echo $userId; ?>"</script>
    <?php  } else { ?>
          <script type="text/javascript">location="user-<?php echo $userId; ?>"</script> 
     <?php }
    }

}




?>
<title>Смена пароля</title>
<link rel="stylesheet" type="text/css" href="static/sign/sign.css">
<div class="wrap_with_Fo">
<div class='wrapperOUT_signForms' id="Form_signup">
    <form  method="POST">
        <div class="signForms_txt">
            <h1>Новый пароль</h1>
        </div>
        <div class="titleUser2">Придумайте новый пароль для вашего аккаунта</div>
        <div class='signForms_inputs'>
            <input type="password" name="password" placeholder="Пароль">
            <?php if (!empty($passwordEr)) { ?><div id="errorSign"><?php echo $passwordEr; ?></div><?php } else {} ?>
            <input type="password" name="passwordTwo" placeholder="Повторите пароль">
            <?php if (!empty($passwordTwoEr)) { ?><div id="errorSign2"><?php echo $passwordTwoEr; ?></div><?php } else {} ?>
        </div>
        <div class="signForms_submit">
            <input type="submit" value="Изменить!" name="changePass">
        </div>
    </form>
</div>
</div>
</body>
</html>
<?php } } } } } ?>






