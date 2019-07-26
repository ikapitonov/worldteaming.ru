<?php 
require_once '../configBD.php';
		$_SESSION = [];  

		setcookie('email', '', time() - 3600, '/');
		setcookie('key', '', time() - 3600, '/');
		session_destroy();	
		echo '<script type="text/javascript">location="../signin"</script>';
?> 