<?php if ( $_COOKIE['email'] && $_COOKIE['key'] ) { 
            echo '<script type="text/javascript">location="index.php"</script>';
        } else { ?>
<?php
$emailEr = ""; $passwordEr = ""; $emailVal = "";

require_once 'configBD.php';
if (count($_POST) > 0) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailVal = $email;
    } else {
        $emailEr = "Укажите правильный email";
      }
    if ( iconv_strlen($password) < 6 ) {
       $passwordEr = "Пароль должен содержать не менее 6 символов";
    }
    if ( iconv_strlen($password) > 255 ) {
       $passwordEr = "Пароль должен содержать не более 255";
    }
    if ( $emailEr == "" &&  $passwordEr == "" ) {
        $sqlGet = "SELECT id , email, password, salt, formStart FROM users WHERE email = :email";
        $stmtObj = $pdo->prepare($sqlGet);
        $result =  $stmtObj->execute([':email' => $email]);
        if ($result ) {
            $item = $stmtObj->fetchAll(PDO::FETCH_ASSOC);
            if (!$item) {
               $emailEr = "Такого пользователя еще нет";
               $emailVal = $email;
            } else {
                $getPassword = $item['0'];
                if ( $getPassword['password'] == md5($password.$getPassword['salt'])) {
                     $_SESSION['auth'] = true;
                     $_SESSION['id'] = $getPassword['id']; 
                     $_SESSION['email'] = $getPassword['email']; 
                     $yourId = $getPassword['id'];
                     require_once 'phpScripts/salt.php';
                     $key = generateSalt();
                     setcookie('email', $getPassword['email'], time()+60*60*24*30,"/");
                     setcookie('key', $key, time()+60*60*24*30,"/"); 
                     
                     $sqlUpdate = "UPDATE users SET cookie=:cookie WHERE email=:email";
                     $stmtUpdate = $pdo->prepare($sqlUpdate);
                     $stmtUpdate->execute([ ':cookie' => $key, ':email' => $getPassword['email'] ]);
                     $yourId_GET = $getPassword['id'];  
                     if ( $getPassword['formStart'] == 0 ) { ?>
                        <script type="text/javascript">location="formStart-<?php echo $yourId_GET; ?>"</script>
                     <?php } else { ?>
                        <script type="text/javascript">location="user-<?php echo $yourId_GET; ?>"</script>
                    <?php }
                } else { $passwordEr = "Неверный пароль"; }
            }
        } 
    }
} else {}

?>

<?php include "header.php" ?>
<title>Вход</title>
<link rel="stylesheet" type="text/css" href="static/sign/sign.css">
<div class="wrap_with_Fo">
<div class='wrapperOUT_signForms' id="Form_signin">
    <form method="POST">
        <div class="signForms_txt">
            <h1>Вход</h1>
        </div>
        <div class='signForms_inputs'>
            <input type="email" name="email" placeholder="Почта" value="<?php echo $emailVal; ?>">
            <div> <?php echo $emailEr;  ?> </div>
            <input type="password" name="password" placeholder="Пароль">
            <div> <?php echo $passwordEr;  ?> </div>
        </div>
        <div class="signForms_submit">
            <input type="submit" value="Войти">
        </div>
    </form>
    <div class="signForms_clider">
        <div>Еще нет аккаунта?</div>
        <a href="signup" id="signForms_btn_register">Регистрация</a>
    </div>
    <div class="wrapper_forgot">
        <a href="forget" class="item_a_main">Забыли пароль?</a>
    </div>
</div>


<script src="static/sign/sign.js"></script>

<?php } ?>
<?php include "footer.php"; ?>

