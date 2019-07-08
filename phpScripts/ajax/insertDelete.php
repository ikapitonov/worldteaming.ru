<?php 

if ($_POST['delComment'] == "Удалить заявку") {
require_once '../../configBD.php';
  
  $sqlWantsSel = "SELECT id,user_id,from_task,comment_id FROM startup_want_do WHERE parent_id=:parent_id AND id=:id";
	$stmtWantsSel = $pdo->prepare($sqlWantsSel);
	$stmtWantsSel->execute([':parent_id' => $_POST['parent_ID'], ':id' => $_POST['numId'] ]);
	$itemWantsSel = $stmtWantsSel->fetchAll(PDO::FETCH_ASSOC); 
	if ($itemWantsSel) {
		$itemsWantsSel = $itemWantsSel[0];
		    $sqlWantsTwo = "SELECT id FROM startup_want_do WHERE user_id=:user_id";
				$stmtWantsTwo = $pdo->prepare($sqlWantsTwo);
				$stmtWantsTwo->execute([':user_id' => $itemsWantsSel['user_id'] ]);
				$itemWantsTwo = $stmtWantsTwo->fetchAll(PDO::FETCH_ASSOC);

				$sqlDeletewant1 = "DELETE FROM startup_want_do WHERE parent_id=:parent_id AND id=:id";
        $stmtDeletewant1 = $pdo->prepare($sqlDeletewant1);
        $stmtDeletewant1->execute([':parent_id' => $_POST['parent_ID'], ':id' => $itemsWantsSel['id'] ]);

				if (count($itemWantsTwo) == 1) {
						$sqlUpdateMe = "UPDATE startup_verify_users SET verify=0 WHERE parent_id=:parent_id AND user_id=:user_id";
	          $stmtUpdateMe = $pdo->prepare($sqlUpdateMe);
	          $stmtUpdateMe->execute([ $_POST['parent_ID'], $itemsWantsSel['user_id'] ]);
				}
				if (!empty($itemsWantsSel['from_task'])) {
					  $sqlUpdate2 = "UPDATE forumComTask SET statusCom=8 WHERE id=:id";
            $stmtUpdate2 = $pdo->prepare($sqlUpdate2);
            $stmtUpdate2->execute([':id' => $itemsWantsSel['comment_id'] ]);
				}
        echo 1;

	} else { exit; }


} else { exit; }

?>