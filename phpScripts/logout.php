<?php 
require_once '../configBD.php';
  if (count($_POST) > 0 && isset($_POST['logout'])) {
	if (!empty($_SESSION['auth']) && $_SESSION['auth'] == true) {
		$_SESSION = [];  

		setcookie('email', '', time() - 3600, '/');
		setcookie('key', '', time() - 3600, '/');
		session_destroy();	
		echo '<script type="text/javascript">location="../signin"</script>';
	} else {
		exit;
	}
  } else {
  	echo '<script type="text/javascript">location="../index.php"</script>';
  }
?> 