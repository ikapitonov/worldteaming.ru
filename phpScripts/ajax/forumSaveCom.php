<?php 
require_once '../../configBD.php';

if ($_POST['namePost'] == "Передать комментарий для форума") {
  if ($_SESSION['id'] && $_SESSION['auth']) {
   
   if ($_POST['its'] == 1) {

   	  $sqlInsIdea = "INSERT INTO forumComIdea( parent_id,user_id,`text`, iThink,yourLike,howLikes ) VALUES ( ?,?,?,?,?,? )";
	    $stmtInsIdea = $pdo->prepare($sqlInsIdea);
	    $stmtInsIdea->execute([ $_POST['idPost'], $_SESSION['id'],mb_substr($_POST['text'],0,3000),$_POST['select'],0,0]);

        $sqlUpdIdea = "UPDATE startup_forums_idea SET  count_comments=count_comments+1 WHERE id=:id";
        $stmtUpdIdea = $pdo->prepare($sqlUpdIdea);
        $stmtUpdIdea->execute([':id' => $_POST['idPost'] ]);
      
      echo "Успешно(идея)";
   } elseif ($_POST['its'] == 2) {

   	  $sqlInsIdea = "INSERT INTO forumComTask( parent_id,user_id,`text`, iThink,yourLike,howLikes ) VALUES ( ?,?,?,?,?,? )";
	    $stmtInsIdea = $pdo->prepare($sqlInsIdea);
	    $stmtInsIdea->execute([ $_POST['idPost'], $_SESSION['id'],mb_substr($_POST['text'],0,3000),$_POST['select'],0,0]);

      $idOfTask = $pdo->lastInsertId();

        $sqlUpdTask = "UPDATE startup_forums_task SET  count_comments=count_comments+1 WHERE id=:id";
        $stmtUpdTask = $pdo->prepare($sqlUpdTask);
        $stmtUpdTask->execute([':id' => $_POST['idPost'] ]);


        if ($_POST['select'] == 1) {

          $sqlStartup = "SELECT parent_id,status FROM startup_forums_task WHERE id=:id";
          $stmtStartup = $pdo->prepare($sqlStartup);
          $stmtStartup->execute([':id' => $_POST['idPost'] ]);
          $itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
          if ($itemStartup) {
            $itemsStartup = $itemStartup[0];


            $sqlTrueUserW = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
            $stmtTrueUserW = $pdo->prepare($sqlTrueUserW);
            $stmtTrueUserW->execute([':parent_id' => $itemsStartup['parent_id'], ':user_id' => $_SESSION['id'] ]);
            $itemTrueUserW = $stmtTrueUserW->fetchAll(PDO::FETCH_ASSOC);
            if ($itemTrueUserW) {
               $itemsTrueUserW = $itemTrueUserW[0];
               if ($itemsTrueUserW['verify'] > 1 || $itemsStartup['status'] > 0) {} else {
                    $sqlSelectWants = "SELECT id FROM startup_want_do WHERE parent_id=:parent_id AND user_id=:user_id";
                    $stmtSelectWants = $pdo->prepare($sqlSelectWants);
                    $stmtSelectWants->execute([':parent_id' => $itemsStartup['parent_id'], ':user_id' => $_SESSION['id'] ]);
                    $itemSelectWants = $stmtSelectWants->fetchAll(PDO::FETCH_ASSOC);
                    if (count($itemSelectWants) > 2) {} else {

                     // здесь можно сделать проверку на отправку одного и того же сообщения 
        $sqlInsWant = "INSERT INTO startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )";
        $stmtInsWant = $pdo->prepare($sqlInsWant);
        $stmtInsWant->execute([ $itemsStartup['parent_id'], $_SESSION['id'],mb_substr($_POST['text'],0,5000),$_POST['idPost'],$idOfTask]);

                        $sqlUpdateMe = "UPDATE startup_verify_users SET verify=1 WHERE parent_id=:parent_id AND user_id=:user_id";
                        $stmtUpdateMe = $pdo->prepare($sqlUpdateMe);
                        $stmtUpdateMe->execute([ $itemsStartup['parent_id'], $_SESSION['id']]);
                    }
               } 

            } else {

        $sqlInsWant = "INSERT INTO startup_want_do( parent_id,user_id,`text`,from_task,comment_id ) VALUES ( ?,?,?,?,? )";
        $stmtInsWant = $pdo->prepare($sqlInsWant);
        $stmtInsWant->execute([ $itemsStartup['parent_id'], $_SESSION['id'],mb_substr($_POST['text'],0,5000),$_POST['idPost'],$idOfTask]);


                $sqlInSave = "INSERT INTO startup_verify_users( parent_id,user_id,verify) VALUES ( ?,?,? )";
                $stmtInSave  = $pdo->prepare($sqlInSave);
                $stmtInSave ->execute([ $itemsStartup['parent_id'], $_SESSION['id'], 1 ]);
            }

          }  
        }   
            echo "Успешно(задача)";  

      
       
   } elseif ($_POST['its'] == 3) {
   	
   	  $sqlInsDocs = "INSERT INTO forumComments( parent_id,user_id,`text`,yourLike,howLikes ) VALUES ( ?,?,?,?,? )";
	    $stmtInsDocs = $pdo->prepare($sqlInsDocs);
	    $stmtInsDocs->execute([ $_POST['idPost'], $_SESSION['id'],mb_substr($_POST['text'],0,5000),0,0]);

        $sqlUpdDocs = "UPDATE startup_forums_docs SET  count_comments=count_comments+1 WHERE id=:id";
        $stmtUpdDocs = $pdo->prepare($sqlUpdDocs);
        $stmtUpdDocs->execute([':id' => $_POST['idPost'] ]);
      
      echo "Успешно(доки)";
   } 



  } else { exit; }


} else { exit; }

?>

