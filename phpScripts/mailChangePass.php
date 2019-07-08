<?php 

function mailChangePass($toEmail, $userId, $string) {
  	$to = $toEmail;
		$subject = "This is subject";

		$message = "<b>This is HTML message.</b>";
		$message .= "<h1>Смена пароля.</h1>";
		$message .= "<a href=". "http://localhost:8888/project/password.php?id=$userId&string=$string" .">Нажмите здесь, чтобы изменить пароль.</a>";

		$header = "From:spad20@yandex.ru \r\n";
		$header .= "Cc:spad20@br.ru \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";

		$retval = mail($to,$subject,$message,$header);
}


?>