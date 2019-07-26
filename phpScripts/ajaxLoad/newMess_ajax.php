<?php

require_once '../../configBD.php'; 

if ($_POST['word'] == "проверь" && !empty($_SESSION['id'])) {

	$sqlDialog = "SELECT id,`date`,last_message,from_who,how_many_reed FROM userDialogs 
					WHERE to_who=:to_who AND reed=:reed AND `Date` >= NOW() - 6 ORDER BY `date`";
	$stmtDialog = $pdo->prepare($sqlDialog);
	$stmtDialog->execute([':to_who' => $_SESSION['id'], ':reed' => 0]); 
	$itemDialog = $stmtDialog->fetchAll(PDO::FETCH_ASSOC);

	$now_date = date("Y-m-d H:i:s");
	$now_date = strtotime($now_date) + (60 * 60 * 3);

	if (empty($_SESSION['online']) || (abs($now_date - $_SESSION['online']) >= 293)) {
		$sqlUpdate = "UPDATE users SET online=NOW() WHERE id=:id";
		$stmtUpdate = $pdo->prepare($sqlUpdate);
		$stmtUpdate->execute([':id' => $_SESSION['id'] ]);
		$_SESSION['online'] = $now_date;
	}

	if ($itemDialog) {
		
		$counter_dia = count($itemDialog) - 1;
		$itemsDialog = $itemDialog[$counter_dia];
			
		echo json_encode($itemsDialog);

	} else {
		echo 0;
	}

} else {
	exit();
}

?>