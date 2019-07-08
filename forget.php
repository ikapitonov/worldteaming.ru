<?php include "header.php"; ?>

<?php 

if ($_SESSION['auth'] || $_SESSION['auth'] == true) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {

$error = "";

if ($_SESSION['passChangeCount']){

} else {
    $_SESSION['passChangeCount'] = 0;
}



if (count($_POST) > 0 && isset($_POST['forgetUp'])) {
  $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sqlCheckEmail = "SELECT id,name,email,formStart,mailVerify FROM users WHERE email=:email";
        $stmtCheckEmail = $pdo->prepare($sqlCheckEmail);
        $stmtCheckEmail->execute([':email' => $email]); 
        $itemCheckEmail = $stmtCheckEmail->fetchAll(PDO::FETCH_ASSOC);
    if (!$itemCheckEmail) {
        $error = "Такой адрес не найден";
    } else { 
        $itemsCheckEmail = $itemCheckEmail[0];

        if ($itemsCheckEmail['mailVerify'] != 1) {
          $error = "На данном аккаунте не подтверждена почта";
        } else {
        require_once 'phpScripts/randomStr.php';
        require_once 'phpScripts/emailChange.php';

            $randomStrPass =  generateRandomString(80);
        
            $sqlUpdEmail = "UPDATE users SET passStr=:passStr WHERE id=:id";
            $stmtUpdEmail = $pdo->prepare($sqlUpdEmail);
            $stmtUpdEmail->execute([ ':passStr' => $randomStrPass, ':id' => $itemsCheckEmail['id'] ]);
            
            emailChangePass($itemsCheckEmail['name'],$randomStrPass,$itemsCheckEmail['id'], $email);

            $_SESSION['passChange'] = true;
            $_SESSION['emailFor'] = $itemsCheckEmail['email'];
            $_SESSION['passChangeCount'] = $_SESSION['passChangeCount'] + 1;
            $_SESSION['idID'] = $itemsCheckEmail['id'];
        }


      }
    } else {
        $error = "Укажите нормальный адрес";
    }
}

if (count($_POST) > 0 && isset($_POST['returnFalse'])) {

    if ($_SESSION['passChangeCount']) {
        if ($_SESSION['passChangeCount'] == 3) {} else {
            $_SESSION['passChange'] = false;
            $_SESSION['emailFor'] = null;

            $sqlUpdEma = "UPDATE users SET passStr=:passStr WHERE id=:id";
            $stmtUpdEma = $pdo->prepare($sqlUpdEma);
            $stmtUpdEma->execute([ ':passStr' => null, ':id' => $_SESSION['idID'] ]);
            echo '<script type="text/javascript">location="signin"</script>';
        }
    } 
}
?>


<title>Восстановление</title>
<link rel="stylesheet" type="text/css" href="static/sign/sign.css">
<div class="wrap_with_Fo">
<div class='wrapperOUT_signForms' id="Form_signin">
  <?php if (!$_SESSION['passChange'] || $_SESSION['passChange'] == false) { ?>
    <form method="POST">
        <div class="signForms_txt">
            <h1>Восстановление</h1>
        </div>
        <div class="titleUser">Укажите почту, на которую зарегистрирован аккаунт</div>
        <div class='signForms_inputs'>
            <input type="email" name="email" placeholder="Почта">
            <div id="errorSign"><?php echo $error; ?></div>
        </div>
        <div class="signForms_submit">
            <input type="submit" name="forgetUp" value="Далее">
        </div>

    </form>
    <div class="wrapper_forgot">
        <a href="signin" class="item_a_main">Вход</a>
    </div>
    <?php } else { ?>
    <div class="signForms_txt">
        <h1>Восстановление аккаунта</h1>
    </div>
    <div class="wrapper_img_mail">
    	<img src="static/img/mail.png">
    </div>
    <div class="titleUser">Письмо было оправлено на почту <b><?php echo $_SESSION['emailFor']; ?></b></div>
    <div class="clear"></div>
    <?php if ($_SESSION['passChangeCount'] == 3) {} else { ?>
    <form id="btn_deleteMail" method="POST">
        <input type="submit" name="returnFalse" value="Отменить">
    </form>
    <?php } } ?>
</div>


<?php include "footer.php"; ?>

<?php } ?>