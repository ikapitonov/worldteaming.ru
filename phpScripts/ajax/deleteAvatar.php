<?php 

require_once '../../configBD.php';


if ($_POST['delUserImg'] == "Удалить аватарку") {
  
  if ($_POST['id'] == $_SESSION['id'] ) {
		  $sqlTrueUser = "SELECT id,url_avatar FROM users WHERE id=:id";
		  $stmtTrueUser = $pdo->prepare($sqlTrueUser);
		  $stmtTrueUser->execute([':id' => $_POST['id'] ]);
		  $itemTrueUser = $stmtTrueUser->fetchAll(PDO::FETCH_ASSOC); 
		  if ($itemTrueUser) {
        $itemsTrueUser = $itemTrueUser[0];
        if ( iconv_strlen($itemsTrueUser['url_avatar']) > 6) {
        	
        	$src = $_POST['src'];

        	$srcOne = explode("-_-Avatar-_-",$src);
        	$srcTwo = explode( "/avatarsUsers/" ,$srcOne[0]);

        	if ($srcTwo[1] == $itemsTrueUser['id']) {
        		$srcMain = explode("/avatarsUsers/" ,$src);
        		unlink("../../avatarsUsers/".$srcMain[1]);

        		$sqlUpdate1 = "UPDATE users SET  url_avatar=:url_avatar WHERE id=:id";
            $stmtUpdate1 = $pdo->prepare($sqlUpdate1);
            $stmtUpdate1->execute([ ':url_avatar' => null ,':id' => $itemsTrueUser['id'] ]);

            echo 1;
        	}      
		  } 
    } else { exit; }  
  } else { exit; }  


} elseif ($_POST['delUserImg'] == "Удалить аватарку стартапа") {

    $sqlverify = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id AND verify=:verify";
    $stmtverify = $pdo->prepare($sqlverify);
    $stmtverify->execute([':parent_id' => $_POST['id'] , ':user_id' => $_SESSION['id'], ':verify' => 3]);
    $itemverify = $stmtverify->fetchAll(PDO::FETCH_ASSOC);
    if ($itemverify) {

          $sqlStartupSel = "SELECT id,avatar_src FROM startups WHERE id=:id"; 
          $stmtStartupSel = $pdo->prepare($sqlStartupSel);
          $stmtStartupSel->execute([':id' => $_POST['id'] ]);
          $itemStartupSel = $stmtStartupSel->fetchAll(PDO::FETCH_ASSOC); 
          if ($itemStartupSel) {
            $itemsStartupSel = $itemStartupSel[0];
            if ( iconv_strlen($itemsStartupSel['avatar_src']) > 6) {
              $src = $_POST['src'];

              $srcOne = explode("-_-Avatar-_-",$src);
              $srcTwo = explode( "/avatarsStartups/" ,$srcOne[0]);

              if ($srcTwo[1] == $itemsStartupSel['id']) {
                
                  $srcMain = explode("/avatarsStartups/" ,$src);
                  unlink("../../avatarsStartups/".$srcMain[1]);

                  $sqlUpdateSt = "UPDATE startups SET  avatar_src=:avatar_src WHERE id=:id";
                  $stmtUpdateSt = $pdo->prepare($sqlUpdateSt);
                  $stmtUpdateSt->execute([ ':avatar_src' => null ,':id' => $itemsStartupSel['id'] ]);

                  echo 1;


        } else { exit; }
      } else { exit; }
    } else { exit; }
  } else { exit; }
} else { exit; }

?>