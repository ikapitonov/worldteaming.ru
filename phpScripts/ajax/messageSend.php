<?php   
require_once '../../configBD.php';
if ( $_POST['send_message'] == 'отправить сообщение с messages.php') {
  if ($_POST['itsT'] == 1) {
    $Text  = $_POST['mes_text'];
  } elseif ($_POST['itsT'] == 0) {
      $Text = htmlspecialchars($_POST['mes_text']);
  }
	$parent_id = $_POST['parent_id'];
	$to_who    = $_POST['to_who'];
  $from_who  = $_SESSION['id'];
  $TextSmall = htmlspecialchars($_POST['valueT']);

  $sqlUpdate = "UPDATE userDialogs SET last_message=:last_message, from_who =:from_who,
                       to_who=:to_who,
  	                   reed=:reed, how_many_reed=how_many_reed+1
  	                   WHERE id=:id";
  $stmtUpdate = $pdo->prepare($sqlUpdate);
  $resultUpdate = $stmtUpdate->execute([
                    ':last_message' => mb_substr($TextSmall,0,49),
                    ':from_who' => $from_who,
                    ':to_who' => $to_who,
                    ':reed' => 0,
                    ':id' => $parent_id ]); 

  $sqlMessage = "INSERT INTO userMessages(parent_id,`text`,to_who_mes,from_who_mes,reed_mes) VALUES ( ?,?,?,?,? )";
  $stmtMessage = $pdo->prepare($sqlMessage);
  $resMessage = $stmtMessage->execute([ $parent_id, mb_substr($Text,0,4000), $to_who, $from_who, 0 ]);

  if ($resultUpdate) {
    echo 'Отправлено!';
  } else {
  	exit;
  }

} else { exit; }

?>