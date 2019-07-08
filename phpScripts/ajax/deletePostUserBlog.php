<?php 

require_once '../../configBD.php';

if ($_POST['DelPostUser'] == "Удалить пост блога") {

    $sqlSelect = "SELECT id FROM userBlog WHERE id=:id AND parent_id=:parent_id"; 
    $stmtSelect = $pdo->prepare($sqlSelect);
    $stmtSelect->execute([':id' => $_POST['nubmerPost'], ':parent_id' => $_SESSION['id'] ]);
    $itemSelect = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    if ($itemSelect) {

    	$sqlPost = "DELETE FROM userBlog WHERE id=:id AND parent_id=:parent_id";
      $stmtPost = $pdo->prepare($sqlPost);
      $stmtPost->execute([':id' => $_POST['nubmerPost'], ':parent_id' => $_SESSION['id'] ]);

      $sqlLike = "DELETE FROM userLikesAnother WHERE numBlog=:numBlog";
      $stmtLike = $pdo->prepare($sqlLike);
      $stmtLike->execute([':numBlog' => $_POST['nubmerPost'] ]);

      echo 1;
    }


} else { exit; }

?>