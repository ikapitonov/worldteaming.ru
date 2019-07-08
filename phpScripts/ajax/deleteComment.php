<?php 



require_once '../../configBD.php';

if ($_POST['delComment'] == "Удалить комментарий") {
	  if ($_POST['its'] == 1) {
    	$sqlItsCom = "forumComIdea";
    } elseif ($_POST['its'] == 2) {
    	  $sqlItsCom = "forumComments";
    } elseif ($_POST['its'] == 3) {
    	  $sqlItsCom = "forumComTask";
    }

    $sqlComTrue = "SELECT id,howLikes FROM $sqlItsCom WHERE parent_id=:parent_id AND id=:id AND user_id=:user_id";
    $stmtComTrue = $pdo->prepare($sqlComTrue);
    $stmtComTrue->execute([':parent_id' => $_POST['parent_id'], ':id' => $_POST['nubmerPost'], ':user_id' => $_SESSION['id'] ]);
    $itemComTrue = $stmtComTrue->fetchAll(PDO::FETCH_ASSOC); 
    if ($itemComTrue) {
    	$sqlDeleteComment = "DELETE FROM $sqlItsCom WHERE parent_id=:parent_id AND id=:id AND user_id=:user_id";
      $stmtDeleteComment = $pdo->prepare($sqlDeleteComment);
      $stmtDeleteComment->execute([':parent_id' => $_POST['parent_id'], ':id' => $_POST['nubmerPost'], ':user_id' => $_SESSION['id'] ]);

          $sqlDeleteForum = "DELETE  FROM forumComLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
          $stmtDeleteForum = $pdo->prepare($sqlDeleteForum);
          $stmtDeleteForum->execute([':user_id' => $_SESSION['id'], ':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);


      $sqlDeletewant = "DELETE  FROM startup_want_do WHERE  parent_id=:parent_id 
                                                              AND user_id=:user_id
                                                              AND from_task=:from_task 
                                                              AND comment_id=:comment_id";
      $stmtDeletewant = $pdo->prepare($sqlDeletewant);
      $stmtDeletewant->execute([':parent_id' => $_POST['nubmerS'],
                                  ':user_id' => $_SESSION['id'],
                                  ':from_task' => $_POST['parent_id'], 
                                  ':comment_id' => $_POST['nubmerPost'] ]);

          echo 1;

    } else {
    	  $sqlComTrue1 = "SELECT id FROM $sqlItsCom WHERE parent_id=:parent_id AND id=:id";
				$stmtComTrue1 = $pdo->prepare($sqlComTrue1);
				$stmtComTrue1->execute([':parent_id' => $_POST['parent_id'], ':id' => $_POST['nubmerPost'] ]);
				$itemComTrue1 = $stmtComTrue1->fetchAll(PDO::FETCH_ASSOC); 
				if ($itemComTrue1) {
					    $sqlverify = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
              $stmtverify = $pdo->prepare($sqlverify);
              $stmtverify->execute([':parent_id' => $_POST['nubmerS'] , ':user_id' => $_SESSION['id']]);
              $itemverify = $stmtverify->fetchAll(PDO::FETCH_ASSOC);
              if ($itemverify) {
                 $itemsverify = $itemverify[0];
                 if ($itemsverify['verify'] == 3) {
                      $sqlDeleteComment1 = "DELETE FROM $sqlItsCom WHERE parent_id=:parent_id AND id=:id";
                      $stmtDeleteComment1 = $pdo->prepare($sqlDeleteComment1);
                      $stmtDeleteComment1->execute([':parent_id' => $_POST['parent_id'], ':id' => $_POST['nubmerPost'] ]);

                            $sqlDeleteForum1 = "DELETE  FROM forumComLikes WHERE post_id=:post_id AND its=:its";
                            $stmtDeleteForum1 = $pdo->prepare($sqlDeleteForum1);
                            $stmtDeleteForum1->execute([':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);

              $sqlDeletewant1 = "DELETE  FROM startup_want_do WHERE parent_id=:parent_id AND from_task=:from_task AND comment_id=:comment_id";
              $stmtDeletewant1 = $pdo->prepare($sqlDeletewant1);
              $stmtDeletewant1->execute([':parent_id' => $_POST['nubmerS'], ':from_task' => $_POST['parent_id'], ':comment_id' => $_POST['nubmerPost'] ]);
 

                 	echo 1;
                 } else { exit; }
              } 
				}
    }

}  else {
	exit;
}


?>