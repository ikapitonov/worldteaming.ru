<?php


if ($_POST['word'] == 'дай юзера') {
	require_once '../../configBD.php';
	
	$sqlGet = "SELECT id, name, lastname, url_avatar FROM users WHERE id = :id";
	$stmtObj = $pdo->prepare($sqlGet);
	$stmtObj->execute([':id' => $_POST['id']]);
	$item = $stmtObj->fetchAll(PDO::FETCH_ASSOC); 

    echo json_encode($item);

} else { exit(); }

?>