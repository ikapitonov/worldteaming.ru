<?php


if ($_POST['word'] == 'дай сообщения') {
	require_once '../../configBD.php';
	$startFrom = $_POST['startFrom'];

	$sqlMessages = "SELECT id_mes, `date`,`text`, to_who_mes, reed_mes
                            FROM userMessages 
                            WHERE parent_id=:parent_id
                            ORDER BY id_mes DESC LIMIT $startFrom,50";
    $stmtMessages = $pdo->prepare($sqlMessages);
    $stmtMessages->execute([':parent_id' => $_POST['url_get']]); 
    $itemMessages = $stmtMessages->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($itemMessages);

} else { exit(); }

?>