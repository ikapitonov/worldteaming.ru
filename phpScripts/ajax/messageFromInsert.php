<?php 

if ($_POST['messageWord'] == 'отправить сообщение') {

  require_once '../../configBD.php';

      $dialogNumber = 0;

      $sqlDialog = "SELECT `id` FROM userDialogs WHERE one_user=:one_user AND second_user=:second_user";
      $stmtDialog = $pdo->prepare($sqlDialog);
      $stmtDialog->execute([':one_user' => $_POST['userAn'] , ':second_user' => $_SESSION['id'] ]); 
      $itemDialog = $stmtDialog->fetchAll(PDO::FETCH_ASSOC);
      if ($itemDialog) {
        $takeContent = $itemDialog[0];
        $dialogNumber = $takeContent['id'];
      } else {}
      $sqlDialog2 = "SELECT `id` FROM userDialogs WHERE one_user=:one_user AND second_user=:second_user";
      $stmtDialog2 = $pdo->prepare($sqlDialog2);
      $stmtDialog2->execute([':one_user' => $_SESSION['id'], ':second_user' => $_POST['userAn']  ]); 
      $itemDialog2 = $stmtDialog2->fetchAll(PDO::FETCH_ASSOC);
      if ($itemDialog2) {
        $takeContent2 = $itemDialog2[0];
        $dialogNumber = $takeContent2['id'];
      } else {}

  
        $message  = $_POST['message']; 
        $userFrom = $_SESSION['id'];
        $userTo   = $_POST['userAn'];
        $messageTxt = $_POST['messageTxt'];


  $sqlMessage = "INSERT INTO userMessages(parent_id,`text`,to_who_mes,from_who_mes,reed_mes) VALUES ( ?,?,?,?,? )";
  $stmtMessage = $pdo->prepare($sqlMessage);
  if ($dialogNumber == 0) {
  	// создается диалог
  	$sqlInsert = "INSERT INTO userDialogs(one_user,second_user,
  	                                      last_message,from_who, to_who,
  	                                      reed,how_many_reed) 
  	                                      VALUES ( ?,?,?,?,?,?,? )";
    $stmtInsert = $pdo->prepare($sqlInsert);
    $resultInsert = $stmtInsert->execute([ $userFrom, $userTo, mb_substr(htmlspecialchars($messageTxt),0,49), $userFrom, $userTo, 0, 1]);
    $idLastUpdate = $pdo->lastInsertId();
    $resMessage = $stmtMessage->execute([ $idLastUpdate, mb_substr($message,0,4000), $userTo, $userFrom, 0 ]);

    $idOfTask = $pdo->lastInsertId();
    if ( $resMessage ) {
      echo $idLastUpdate;
    }
  } else {
  	// обновляется диалог
    $sqlSelect = "SELECT from_who,how_many_reed FROM userDialogs WHERE id = :id";
    $stmtSelect = $pdo->prepare($sqlSelect);
    $stmtSelect->execute([':id' => $dialogNumber]);
    $itemSelect = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    $itemsSelect = $itemSelect[0];
    if ($itemSelect) {
    	$sqlUpdate = "UPDATE userDialogs SET last_message=:last_message, from_who =:from_who, `date`=NOW(),
                                           to_who=:to_who,
  	                                       reed=:reed, how_many_reed=:how_many_reed 
  	                                       WHERE id=:id";
      $stmtUpdate = $pdo->prepare($sqlUpdate);
      if ( $itemsSelect['from_who'] == $userFrom ) {
      	$notReedMes = $itemsSelect['how_many_reed'] + 1;
      } else {
        $notReedMes = 1;
      }
        $resultUpdate = $stmtUpdate->execute([
                    ':last_message' => mb_substr(htmlspecialchars($messageTxt),0,49),
                    ':from_who' => $userFrom,
                    ':to_who' => $userTo,
                    ':reed' => 0,
                    ':how_many_reed' => $notReedMes,
                    ':id' => $dialogNumber
                    ]); 
        $resMessage = $stmtMessage->execute([ $dialogNumber, mb_substr($message,0,4000), $userTo, $userFrom, 0 ]);
        if ( $resMessage ) {
          echo $dialogNumber;
        }
    }
  }
} else {
	exit;
}
?>