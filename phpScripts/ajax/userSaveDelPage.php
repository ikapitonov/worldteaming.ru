<?php 

require_once '../../configBD.php';

if ($_POST['doing'] == "Сохранить юзера") {
  $sqlTrueUser = "SELECT id FROM users_save WHERE this_user=:this_user AND saving_user=:saving_user";
	$stmtTrueUser = $pdo->prepare($sqlTrueUser);
	$stmtTrueUser->execute([':this_user' => $_SESSION['id'], ':saving_user' => $_POST['idStartup'] ]);
	$itemTrueUser = $stmtTrueUser->fetchAll(PDO::FETCH_ASSOC); 
	if (!$itemTrueUser) {
    $sqlInSave = "INSERT INTO users_save( this_user,saving_user) VALUES ( ?,? )";
	  $stmtInSave  = $pdo->prepare($sqlInSave);
	  $stmtInSave ->execute([ $_SESSION['id'],$_POST['idStartup'] ]);
	  echo 1;

	} else { exit; }

} elseif ($_POST['doing'] == "Удалить юзера") {
    $sqlCheck = "SELECT id FROM users_save WHERE this_user=:this_user AND saving_user=:saving_user";
	  $stmtCheck = $pdo->prepare($sqlCheck);
	  $stmtCheck->execute([':this_user' => $_SESSION['id'], ':saving_user' => $_POST['idStartup'] ]);
	  $itemCheck = $stmtCheck->fetchAll(PDO::FETCH_ASSOC); 
	  if ($itemCheck) {
	  	$itemsCheck = $itemCheck[0]; 
	  	if ($itemsCheck['id'] > 0) {
        $sqlDelete = "DELETE FROM users_save WHERE this_user=:this_user AND saving_user=:saving_user";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->execute([':this_user' => $_SESSION['id'], ':saving_user' => $_POST['idStartup'] ]);
        echo 1;

	  	} else { exit; }
	  } else { exit; }

} else {
	  exit;
}


 ?>