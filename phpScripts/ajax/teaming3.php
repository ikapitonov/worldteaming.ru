<?php 

if ($_POST['comment'] == "Комментирую деятельность") {
  require_once '../../configBD.php';

  $sqlSelVerify = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
	$stmtSelVerify = $pdo->prepare($sqlSelVerify);
	$stmtSelVerify->execute([':parent_id' => $_POST['parent_ID'], ':user_id' => $_SESSION['id'] ]);
	$itemSelVerify = $stmtSelVerify->fetchAll(PDO::FETCH_ASSOC); 
  if ($itemSelVerify) {
    $itemsSelVerify = $itemSelVerify[0];
    if ($itemsSelVerify['verify'] == 3) {

    	$sqlSelVer = "SELECT verify FROM startup_verify_users WHERE 
                                                                  parent_id=:parent_id AND 
                                                                  user_id=:user_id AND 
                                                                  verify=:verify";
	    $stmtSelVer = $pdo->prepare($sqlSelVer);
	    $stmtSelVer->execute([':parent_id' => $_POST['parent_ID'], ':user_id' => $_POST['numId'], ':verify' => 3 ]);
	    $itemSelVer = $stmtSelVer->fetchAll(PDO::FETCH_ASSOC);
	    if ($itemSelVer) {

        $sqlUpdate1 = "UPDATE startup_verify_users SET  textSmall=:textSmall,who_change=:who_change WHERE  
                                                                          parent_id=:parent_id AND 
	                                                                        user_id=:user_id AND 
	                                                                        verify=:verify";
	      $sqlUpdate1 = $pdo->prepare($sqlUpdate1);
	      $sqlUpdate1->execute([  ':textSmall'  => ucfirst(mb_substr(strip_tags($_POST['text']),0,25)), 
	      	                      ':who_change' => $_SESSION['id'],
	      	                      ':parent_id'  => $_POST['parent_ID'],
	      	                      ':user_id'    => $_POST['numId'],
	      	                      ':verify'     => 3 ]);


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