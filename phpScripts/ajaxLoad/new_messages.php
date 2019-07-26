<?php

require_once '../../configBD.php'; 

if ($_POST['word'] == "новые" && !empty($_SESSION['id'])) {
	
	$sqlMessages = "SELECT id_mes,`date`,`text` FROM userMessages 
					WHERE parent_id=:parent_id AND to_who_mes=:to_who_mes AND reed_mes=:reed_mes";
	$stmtMessages = $pdo->prepare($sqlMessages);
	$stmtMessages->execute([':parent_id' => $_POST['url'], 'to_who_mes' => $_SESSION['id'], ':reed_mes' => 0]); 
	$itemMessages = $stmtMessages->fetchAll(PDO::FETCH_ASSOC);

	if ($itemMessages) {

		echo json_encode($itemMessages);

	} else {
		echo 0;
	}

} else {
	exit();
}

?>