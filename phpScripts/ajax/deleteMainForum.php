<?php 


require_once '../../configBD.php';

if ($_POST['delPost'] == "Удалить пост раздела") {

	if ($_POST['its'] == 1) {
    	$sqlMain = "startup_forums_idea";
    	$commentD = "forumComIdea";
  } elseif ($_POST['its'] == 2) {
    	  $sqlMain = "startup_forums_docs";
    	   $commentD = "forumComments";
  }
     
     $sqlForum1 = "SELECT parent_id,user_id FROM $sqlMain WHERE id=:id"; 
     $stmtForum1 = $pdo->prepare($sqlForum1);
     $stmtForum1->execute([':id' => $_POST['numPost']]);
     $itemForum1 = $stmtForum1->fetchAll(PDO::FETCH_ASSOC); 
     if ($itemForum1) {
     	 $itemsForum1 = $itemForum1[0];
     	 if ($itemsForum1['user_id'] == $_SESSION['id']) {

            $sqlDeleteForum = "DELETE  FROM $sqlMain WHERE id=:id";
            $stmtDeleteForum = $pdo->prepare($sqlDeleteForum);
            $stmtDeleteForum->execute([':id' => $_POST['numPost']]);

              $sqlDeleteForumLikes = "DELETE  FROM forumMainLikes WHERE post_id=:post_id AND its=:its";
              $stmtDeleteForumLikes = $pdo->prepare($sqlDeleteForumLikes);
              $stmtDeleteForumLikes->execute([':post_id' => $_POST['numPost'], ':its' => $_POST['its'] ]);

               $sqlDeleteComment1 = "DELETE FROM $commentD WHERE parent_id=:parent_id";
               $stmtDeleteComment1 = $pdo->prepare($sqlDeleteComment1);
               $stmtDeleteComment1->execute([':parent_id' => $_POST['numPost'] ]);

                $sqlDeleteli = "DELETE  FROM forumComLikes WHERE parent_id=:parent_id";
                $stmtDeleteli = $pdo->prepare($sqlDeleteli);
                $stmtDeleteli->execute([':parent_id' => $_POST['numPost'] ]);

     	 	echo 1;
     	 } else {
     	 	  $sqlverify = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id AND verify=:verify";
          $stmtverify = $pdo->prepare($sqlverify);
          $stmtverify->execute([':parent_id' => $itemsForum1['parent_id'] , ':user_id' => $_SESSION['id'], ':verify' => 3]);
          $itemverify = $stmtverify->fetchAll(PDO::FETCH_ASSOC);
          if ($itemverify) {

            $sqlDeleteForum = "DELETE  FROM $sqlMain WHERE id=:id";
            $stmtDeleteForum = $pdo->prepare($sqlDeleteForum);
            $stmtDeleteForum->execute([':id' => $_POST['numPost']]);

              $sqlDeleteForumLikes = "DELETE  FROM forumMainLikes WHERE post_id=:post_id AND its=:its";
              $stmtDeleteForumLikes = $pdo->prepare($sqlDeleteForumLikes);
              $stmtDeleteForumLikes->execute([':post_id' => $_POST['numPost'], ':its' => $_POST['its'] ]);

               $sqlDeleteComment1 = "DELETE FROM $commentD WHERE parent_id=:parent_id";
               $stmtDeleteComment1 = $pdo->prepare($sqlDeleteComment1);
               $stmtDeleteComment1->execute([':parent_id' => $_POST['numPost'] ]);

                $sqlDeleteli = "DELETE  FROM forumComLikes WHERE parent_id=:parent_id";
                $stmtDeleteli = $pdo->prepare($sqlDeleteli);
                $stmtDeleteli->execute([':parent_id' => $_POST['numPost'] ]);

          	echo 1;
          } else { exit; }
     	 }



     } else { exit; }


} else { exit; }

?>