<?php  #error_reporting(0); ?>
<?php
require_once 'configBD.php';
	if ($_SESSION == false) {
		if ($_COOKIE['email'] && $_COOKIE['key']) { 
			$email_COOKIE = $_COOKIE['email']; 
			$key_COOKIE = $_COOKIE['key'];

			$sqlGet_COOKIE = "SELECT id ,email, salt,cookie FROM users WHERE email=:email AND cookie=:cookie";
            $stmt_COOKIE = $pdo->prepare($sqlGet_COOKIE);
            $stmt_COOKIE->execute([':email' => $email_COOKIE, ':cookie' => $key_COOKIE ]);
            $item_COOKIE = $stmt_COOKIE->fetchAll(PDO::FETCH_ASSOC);
            if ($item_COOKIE) {
            	$get_item_COOKIE = $item_COOKIE[0]; 
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $get_item_COOKIE['id']; 
			    $_SESSION['email'] = $get_item_COOKIE['email'];
			} else {
				echo '<script type="text/javascript">location="phpScripts/logout.php"</script>';
			}
		} 
	} 
?>