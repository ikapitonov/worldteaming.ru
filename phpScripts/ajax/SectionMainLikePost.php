<?php 

require_once '../../configBD.php';
 
if ( $_POST['likePost'] == 'Лайкнуть с форума' ) {
  if ($_SESSION['id'] && $_SESSION['auth']) {
    $sqlForumMain = "SELECT user_id FROM forumMainLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
    $stmtForumMain = $pdo->prepare($sqlForumMain);
    $stmtForumMain->execute([':user_id' => $_SESSION['id'], ':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);
    $itemForumMain = $stmtForumMain->fetchAll(PDO::FETCH_ASSOC); 

    if ($_POST['its'] == 1) {
    	$sqlMain = "startup_forums_idea";
    } elseif ($_POST['its'] == 2) {
    	  $sqlMain = "startup_forums_docs";
    } elseif ($_POST['its'] == 3) {
    	  $sqlMain = "startup_forums_task";
    }
    if ($itemForumMain) {
    	  $sqlDeleteForum = "DELETE  FROM forumMainLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
        $stmtDeleteForum = $pdo->prepare($sqlDeleteForum);
        $stmtDeleteForum->execute([':user_id' => $_SESSION['id'], ':post_id' => $_POST['nubmerPost'], ':its' => $_POST['its'] ]);
        
          $sqlUpdate1 = "UPDATE $sqlMain SET  count_likes=count_likes-1 WHERE id=:id";
          $stmtUpdate1 = $pdo->prepare($sqlUpdate1);
          $stmtUpdate1->execute([':id' => $_POST['nubmerPost'] ]);

        echo "минус";
    } else {
    	  $sqlInsertForum = "INSERT INTO forumMainLikes(user_id,post_id,its) VALUES ( ?,?,? )";
        $stmtInsertForum = $pdo->prepare($sqlInsertForum);
        $stmtInsertForum->execute([ $_SESSION['id'], $_POST['nubmerPost'], $_POST['its'] ]);

          $sqlUpdate2 = "UPDATE $sqlMain SET  count_likes=count_likes+1 WHERE id=:id";
          $stmtUpdate2 = $pdo->prepare($sqlUpdate2);
          $stmtUpdate2->execute([':id' => $_POST['nubmerPost'] ]);

        echo "плюс";
    }

  } else { exit; }
} else { exit; } 

?>