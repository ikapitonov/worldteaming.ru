<?php 



require_once '../../configBD.php';
 
  if ( $_POST['likePost'] == 'лайкнуть' && $_SESSION['auth']) {

    $sqlLikeCheck = "SELECT id FROM userLikesAnother WHERE id=:id AND numBlog=:numBlog";
    $stmtLikeCheck = $pdo->prepare($sqlLikeCheck);
    $stmtLikeCheck->execute([':id' => $_SESSION['id'], ':numBlog' => $_POST['intPost'] ]);
    $itemLikeCheck = $stmtLikeCheck->fetchAll(PDO::FETCH_ASSOC); 

    if ($itemLikeCheck) {

      $sqlDelete = "DELETE  FROM userLikesAnother WHERE id=:id AND numBlog=:numBlog";
      $stmtDelete = $pdo->prepare($sqlDelete);
      $stmtDelete->execute([':id' => $_SESSION['id'], ':numBlog' => $_POST['intPost'] ]);

      $sqlUpdate1 = "UPDATE userBlog SET  Howlikes=Howlikes-1 WHERE id=:id AND parent_id=:parent_id";
      $stmtUpdate1 = $pdo->prepare($sqlUpdate1);
      $stmtUpdate1->execute([':id' => $_POST['intPost'], ':parent_id' => $_POST['to_who'] ]);

      echo 0;
    } else {

        $sqlInsert = "INSERT INTO userLikesAnother(id,numBlog) VALUES ( ?,? )";
        $stmtInsert = $pdo->prepare($sqlInsert);
        $stmtInsert->execute([ $_SESSION['id'], $_POST['intPost'] ]);

        $sqlUpdate2 = "UPDATE userBlog SET  Howlikes=Howlikes+1 WHERE id=:id AND parent_id=:parent_id";
        $stmtUpdate2 = $pdo->prepare($sqlUpdate2);
        $stmtUpdate2->execute([':id' => $_POST['intPost'], ':parent_id' => $_POST['to_who'] ]);

        echo 1;
    }


  } else { exit; }
?>
