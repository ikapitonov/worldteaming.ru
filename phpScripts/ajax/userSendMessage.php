<?php 

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if ($_POST['messageWord'] == 'отправить сообщение user.php') {
	require_once '../../configBD.php';
  $message  = $_POST['message']; 
  $userFrom = $_SESSION['id'];
  $userTo   = $_POST['user_cookie'];
  $dialog   = $_POST['dualog'];
  $messageTxt = $_POST['messageTxt'];
  $sqlMessage = "INSERT INTO userMessages(parent_id,`text`,to_who_mes,from_who_mes,reed_mes) VALUES ( ?,?,?,?,? )";
  $stmtMessage = $pdo->prepare($sqlMessage);
  if ($dialog == 0) {
  	// создается диалог
  	$sqlInsert = "INSERT INTO userDialogs(one_user,second_user,
  	                                      last_message,from_who, to_who,
  	                                      reed,how_many_reed) 
  	                                      VALUES ( ?,?,?,?,?,?,? )";
    $stmtInsert = $pdo->prepare($sqlInsert);
    $resultInsert = $stmtInsert->execute([ $userFrom, $userTo, mb_substr(htmlspecialchars($messageTxt),0,49), $userFrom, $userTo, 0, 1]);
    $idLastUpdate = $pdo->lastInsertId();
    $resMessage = $stmtMessage->execute([ $idLastUpdate, mb_substr($message,0,4000), $userTo, $userFrom, 0 ]);
    if ( $resMessage ) {
      echo 'прошло';
    }
  } else {
  	// обновляется диалог
    $sqlSelect = "SELECT from_who,how_many_reed FROM userDialogs WHERE id = :id";
    $stmtSelect = $pdo->prepare($sqlSelect);
    $stmtSelect->execute([':id' => $dialog]);
    $itemSelect = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    $itemsSelect = $itemSelect[0];
    if ($itemSelect) {
    	$sqlUpdate = "UPDATE userDialogs SET last_message=:last_message, from_who =:from_who,
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
                    ':id' => $dialog
                    ]); 
        $resMessage = $stmtMessage->execute([ $dialog, mb_substr($message,0,4000), $userTo, $userFrom, 0 ]);
        if ( $resMessage ) {
          echo 'прошло';
        }
    }
  }
} else {
	exit;
}
?>