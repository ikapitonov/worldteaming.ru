<?php 

require_once '../../configBD.php';

if ($_POST['doing'] == "Сохранить стартап") {
  $sqlTrueUser = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
	$stmtTrueUser = $pdo->prepare($sqlTrueUser);
	$stmtTrueUser->execute([':parent_id' => $_POST['idStartup'], ':user_id' => $_SESSION['id'] ]);
	$itemTrueUser = $stmtTrueUser->fetchAll(PDO::FETCH_ASSOC); 
	if (!$itemTrueUser) {
    $sqlInSave = "INSERT INTO startup_verify_users( parent_id,user_id,verify) VALUES ( ?,?,? )";
	  $stmtInSave  = $pdo->prepare($sqlInSave);
	  $stmtInSave ->execute([ $_POST['idStartup'], $_SESSION['id'], 0 ]);
	  echo "Сохранено!";

	} else { exit; }

} elseif ($_POST['doing'] == "Удалить сохраненный стартап") {
    $sqlCheck = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
	  $stmtCheck = $pdo->prepare($sqlCheck);
	  $stmtCheck->execute([':parent_id' => $_POST['idStartup'], ':user_id' => $_SESSION['id'] ]);
	  $itemCheck = $stmtCheck->fetchAll(PDO::FETCH_ASSOC); 
	  if ($itemCheck) {
	  	$itemsCheck = $itemCheck[0]; 
	  	if ($itemsCheck['verify'] === 0) {
        $sqlDelete = "DELETE FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->execute([':parent_id' => $_POST['idStartup'], ':user_id' => $_SESSION['id'] ]);
        echo "Удалено!";

	  	} else { exit; }
	  } else { exit; }

} else {
	  exit;
}


 ?>
