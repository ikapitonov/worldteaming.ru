<?php 

require_once '../../configBD.php';

if ($_POST['word'] == "Прочитано" && !empty($_SESSION['id'])) {
	$arr = json_decode($_POST['json']);

	for ($i = 0; $i < count($arr); $i++) {
		$sqlUpdate = "UPDATE userMessages SET reed_mes=:reed_mes WHERE id_mes=:id_mes";
		$stmtUpdate = $pdo->prepare($sqlUpdate);
		$stmtUpdate->execute([':reed_mes' => 1 ,':id_mes' => $arr[$i] ]);
	}

	$sqlDialogs = "UPDATE userDialogs SET reed=:reed, how_many_reed=:how_many_reed WHERE id=:id";
    $stmtDialogs = $pdo->prepare($sqlDialogs);
    $stmtDialogs->execute([':reed' => 1,':how_many_reed' => 0, ':id' => (int)$_POST['dialog'] ]);

	echo 1;

} else {
	exit();
}

?>