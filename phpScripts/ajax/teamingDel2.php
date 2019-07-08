<?php 

if ($_POST['delComment'] == "Удалить участника") {
  require_once '../../configBD.php';

  $sqlSelVerify = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
	$stmtSelVerify = $pdo->prepare($sqlSelVerify);
	$stmtSelVerify->execute([':parent_id' => $_POST['parent_ID'], ':user_id' => $_SESSION['id'] ]);
	$itemSelVerify = $stmtSelVerify->fetchAll(PDO::FETCH_ASSOC); 
	if ($itemSelVerify) {
    $itemsSelVerify = $itemSelVerify[0];
    if ($itemsSelVerify['verify'] == 3) {
    	
    	$sqlSelVer = "SELECT verify,numTask FROM startup_verify_users WHERE 
    	                                                                        parent_id=:parent_id AND 
    	                                                                        user_id=:user_id AND 
    	                                                                        verify=:verify";
	    $stmtSelVer = $pdo->prepare($sqlSelVer);
	    $stmtSelVer->execute([':parent_id' => $_POST['parent_ID'], ':user_id' => $_POST['numId'], ':verify' => 2 ]);
	    $itemSelVer = $stmtSelVer->fetchAll(PDO::FETCH_ASSOC);
	    if ($itemSelVer) {
	    	$itemsSelVer = $itemSelVer[0];
        
        $sqlUpdate1 = "UPDATE startup_verify_users SET  verify=9,who_insert=:who_insert WHERE 
                                                                        parent_id=:parent_id AND 
                                                                        user_id=:user_id AND 
                                                                        verify=:verify";
        $stmtUpdate1 = $pdo->prepare($sqlUpdate1);
        $stmtUpdate1->execute([ ':who_insert' => $_SESSION['id'],
        	                      ':parent_id' => $_POST['parent_ID'], 
        	                      ':user_id' => $_POST['numId'], 
        	                      ':verify' => 2 ]);

        $sqlInserDel = "INSERT INTO startup_deleter_people(parent_id,user_id,who_delete,`text`) VALUES ( ?,?,?,? )";
        $stmtInserDel = $pdo->prepare($sqlInserDel);
        $stmtInserDel->execute([ $_POST['parent_ID'], $_POST['numId'],$_SESSION['id'], mb_substr($_POST['text'],0,1200) ]);

        if ($itemsSelVer['numTask'] > 0) { 

      	  $sqlSelTaskNum = "SELECT status FROM startup_forums_task WHERE parent_id=:parent_id AND id=:id AND status=:status";
          $stmtSelTaskNum = $pdo->prepare($sqlSelTaskNum);
          $stmtSelTaskNum->execute([':parent_id' => $_POST['parent_ID'], ':id' => $itemsSelVer['numTask'], ':status' => 1 ]);
          $itemSelTaskNum = $stmtSelTaskNum->fetchAll(PDO::FETCH_ASSOC); 

          if ($itemSelTaskNum) {

        	  $sqlUpTaskForum = "UPDATE startup_forums_task SET  status=9, deleter=:deleter WHERE parent_id=:parent_id AND id=:id";
            $stmtUpTaskForum = $pdo->prepare($sqlUpTaskForum);
            $stmtUpTaskForum->execute([':deleter' => $_POST['numId'], ':parent_id' => $_POST['parent_ID'], ':id' => $itemsSelVer['numTask']]);

            $sqlUpComment = "UPDATE forumComTask SET  statusCom=9 WHERE parent_id=:parent_id AND user_id=:user_id AND statusCom=:statusCom";
            $stmtUpComment = $pdo->prepare($sqlUpComment);
            $stmtUpComment->execute([':parent_id' => $itemsSelVer['numTask'], ':user_id' => $_POST['numId'], ':statusCom' => 1  ]);
          }
        }



       echo 1;




	    } else {
	    	exit;
	    }
    } else {
    	exit;
    }
	} else {
	  exit;
  }
} else {
	  exit;
}

?>