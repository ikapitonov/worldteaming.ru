<?php 


require_once '../../configBD.php';
 
if ( $_POST['likePost'] == 'Лайкнуть комментарий форума' ) {
  if ($_SESSION['id'] && $_SESSION['auth']) {
    $sqlForumMain = "SELECT user_id FROM forumComLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
    $stmtForumMain = $pdo->prepare($sqlForumMain);
    $stmtForumMain->execute([':user_id' => $_SESSION['id'], ':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);
    $itemForumMain = $stmtForumMain->fetchAll(PDO::FETCH_ASSOC); 

    if ($_POST['its'] == 1) {
    	$sqlMain = "forumComIdea";
    } elseif ($_POST['its'] == 2) {
    	  $sqlMain = "forumComments";
    } elseif ($_POST['its'] == 3) {
    	  $sqlMain = "forumComTask";
    }
    if ($itemForumMain) {
    	  $sqlDeleteForum = "DELETE  FROM forumComLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
        $stmtDeleteForum = $pdo->prepare($sqlDeleteForum);
        $stmtDeleteForum->execute([':user_id' => $_SESSION['id'], ':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);
        
          $sqlUpdate1 = "UPDATE $sqlMain SET  howLikes=howLikes-1 WHERE id=:id";
          $stmtUpdate1 = $pdo->prepare($sqlUpdate1);
          $stmtUpdate1->execute([':id' => $_POST['nubmerPost'] ]);

        echo 0;
    } else {
    	  $sqlInsertForum = "INSERT INTO forumComLikes(user_id,post_id,its,parent_id) VALUES ( ?,?,?,? )";
        $stmtInsertForum = $pdo->prepare($sqlInsertForum);
        $stmtInsertForum->execute([ $_SESSION['id'], $_POST['nubmerPost'], $_POST['its'], $_POST['parent_id'] ]);

          $sqlUpdate2 = "UPDATE $sqlMain SET  howLikes=howLikes+1 WHERE id=:id";
          $stmtUpdate2 = $pdo->prepare($sqlUpdate2);
          $stmtUpdate2->execute([':id' => $_POST['nubmerPost'] ]);

        echo 1;
    }

  } else { exit; }
} else { exit; } 

?>



