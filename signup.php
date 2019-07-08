<?php if ( $_COOKIE['email'] && $_COOKIE['key'] ) { 
            echo '<script type="text/javascript">location="index.php"</script>';
        } else { ?>

<?php
require_once 'phpScripts/randomStr.php';
require_once 'phpScripts/emailReg.php';

$nameEr = "";  $lastnameEr = ""; $emailEr = ""; $passwordEr = ""; $passwordTwoEr = "";
$nameVal = "";  $lastnameVal = ""; $emailVal = "";
require_once 'configBD.php';
if (count($_POST) > 0) {
    $name = ucfirst(strtolower(preg_replace('/\s+/', '', strip_tags(trim($_POST['name'])))));
    $lastname = ucfirst(strtolower(preg_replace('/\s+/', '', strip_tags(trim($_POST['lastname'])))));
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordTwo = $_POST['passwordTwo'];
    if ( iconv_strlen($name) < 2 ) {
        $nameEr = "Имя должно содержать больше 2 символов";        
    } else {
        $nameVal = $name;
      }
    if ( iconv_strlen($name) > 25) {
        $nameEr = "Имя должно содержать меньше 25 символов";
    } else {
        $nameVal = $name;
      }
    if ( iconv_strlen($lastname) < 2 ) {
        $lastnameEr = "Фамилия должна содержать больше 2 символов";        
    } else {
        $lastnameVal = $lastname;
      }
    if ( iconv_strlen($lastname) > 25) {
        $lastnameEr = "Фамилия должна содержать меньше 25 символов";
    } else {
        $lastnameVal = $lastname;
      }
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
    if ( empty($password)) {
       $passwordEr = "Придумайте пароль";
    }
    if ( $password != $passwordTwo ) {
       $passwordTwoEr  = "Пароли не совпадают";
    }
    if ( $nameEr == "" &&  $lastnameEr == "" &&  $emailEr == "" &&  $passwordEr == "" &&  $passwordTwoEr == "" ) {
        // системный скрипт
        $sqlGet = "SELECT email FROM users WHERE email = :email";
        $stmtObj = $pdo->prepare($sqlGet);
        $result =  $stmtObj->execute([':email' => $email]);
        if ($result ) {
          $item = $stmtObj->fetchAll(PDO::FETCH_ASSOC);
          if ($item) {
            $emailEr = "такой пользователь уже есть";
            $emailVal = $email;
          } else {
                require_once 'phpScripts/salt.php';
                $salt = generateSalt();
                $saltedPassword = md5($password.$salt);
                
                $key = generateSalt();
                $randomStrAuth =  generateRandomString(80);

                $sqlINSERT = "INSERT INTO users(name,lastname,email,password, salt, cookie,formStart,mailStr,mailVerify)
                               VALUES ( ?,?,?,?,?,?,?,?,? )";
                $stmtINSERT = $pdo->prepare($sqlINSERT);
                $stmtINSERT->execute([ $name, $lastname, $email, $saltedPassword, $salt, $key,0,$randomStrAuth, 0 ]);
                
                $sqlGetid = "SELECT id FROM users WHERE email = :email";
                $stmtObj = $pdo->prepare($sqlGetid);
                $stmtObj->execute([':email' => $email]);
                $item2 = $stmtObj->fetchAll(PDO::FETCH_ASSOC);
                $getPasswordId = $item2[0];
                $yourId = $getPasswordId['id']; 

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $getPasswordId['id']; 
                $_SESSION['email'] = $email;
                setcookie('email', $email, time()+60*60*24*30,"/");
                setcookie('key', $key, time()+60*60*24*30,"/"); 

  
                sendMail($name, $randomStrAuth, $yourId, $email); ?>
                <script type="text/javascript">location="mail.php?id=<?php echo $yourId; ?>"</script>
       <?php  }
        }
    }
} else {}

?>
<?php include "header.php" ?>
<title>Регистрация</title>
<link rel="stylesheet" type="text/css" href="static/sign/sign.css">
<div class="wrap_with_Fo">
<div class='wrapperOUT_signForms' id="Form_signup">
    <form  method="POST">
        <div class="signForms_txt">
            <h1>Регистрация</h1>
        </div>
        <div class='signForms_inputs'>
            <input type="text" name="name" placeholder="Имя" maxlength="25" value="<?php echo $nameVal; ?>">
            <div><?php echo $nameEr;  ?></div>
            <input type="text" name="lastname" placeholder="Фамилия" maxlength="25" value="<?php echo $lastnameVal; ?>">
            <div> <?php echo $lastnameEr;  ?> </div>
            <input type="email" name="email" placeholder="Почта" value="<?php echo $emailVal; ?>">
            <div> <?php echo $emailEr;  ?> </div>
            <input type="password" name="password" placeholder="Пароль">
            <div> <?php echo $passwordEr;  ?> </div>
            <input type="password" name="passwordTwo" placeholder="Повторите пароль">
            <div> <?php echo $passwordTwoEr;  ?> </div>
        </div>
        <div class="signForms_submit">
            <input type="submit" value="Далее">
        </div>
    </form>
    <div class="signForms_clider">
        <div>Уже есть аккаунт?</div>
        <a href="signin">Вход</a>
    </div>
</div>
<script src="static/sign/sign.js"></script>

<?php include "footer.php"; ?>
<?php } ?>
