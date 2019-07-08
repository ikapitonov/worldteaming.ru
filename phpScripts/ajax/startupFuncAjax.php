<?php 
require_once '../../configBD.php';

if ($_POST['namePost'] == "Передать данные для форума") {
  if ($_SESSION['id'] && $_SESSION['auth']) {

    
    if ($_POST['its'] == 1) {
	    $sqlInsIdea = "INSERT INTO startup_forums_idea( parent_id,user_id,
	                                                    count_views,count_comments,count_likes,
	                                                    tittle,`text`,my_like ) VALUES ( ?,?,?,?,?,?,?,? )";
	    $stmtInsIdea = $pdo->prepare($sqlInsIdea);
	    $stmtInsIdea->execute([ $_POST['idStartup'], $_SESSION['id'],0,0,0,
	    	                      ucfirst(mb_substr(strip_tags($_POST['tittle']),0,80)),
	    	                      mb_substr($_POST['text'],0,5000),0 ]);
	    $idOfIdea = $pdo->lastInsertId();
	    echo (int)$idOfIdea;
    }
    elseif ($_POST['its'] == 2) {
        $sqlTrueUserW = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
		$stmtTrueUserW = $pdo->prepare($sqlTrueUserW);
		$stmtTrueUserW->execute([':parent_id' => $_POST['idStartup'], ':user_id' => $_SESSION['id'] ]);
		$itemTrueUserW = $stmtTrueUserW->fetchAll(PDO::FETCH_ASSOC);
        if ($itemTrueUserW) {
	        $sqlUpdateMe = "UPDATE startup_verify_users SET verify=1 WHERE parent_id=:parent_id AND user_id=:user_id";
            $stmtUpdateMe = $pdo->prepare($sqlUpdateMe);
            $stmtUpdateMe->execute([$_POST['idStartup'], $_SESSION['id']]);
        } else {
            $sqlInSave = "INSERT INTO startup_verify_users( parent_id,user_id,verify) VALUES ( ?,?,? )";
	        $stmtInSave  = $pdo->prepare($sqlInSave);
	        $stmtInSave ->execute([ $_POST['idStartup'], $_SESSION['id'], 1 ]);
        }


	    $sqlInsWant = "INSERT INTO startup_want_do( parent_id,user_id,`text`) VALUES ( ?,?,? )";
	    $stmtInsWant  = $pdo->prepare($sqlInsWant);
	    $stmtInsWant ->execute([ $_POST['idStartup'], $_SESSION['id'], mb_substr($_POST['text'],0,5000)]);
	    echo "Отправлено!WantWantWant";
    }
    elseif ($_POST['its'] == 3) {
		  $sqlTrueUser = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
		  $stmtTrueUser = $pdo->prepare($sqlTrueUser);
		  $stmtTrueUser->execute([':parent_id' => $_POST['idStartup'], ':user_id' => $_SESSION['id'] ]);
		  $itemTrueUser = $stmtTrueUser->fetchAll(PDO::FETCH_ASSOC); 
		  if ($itemTrueUser) {
		  	$itemsTrueUser = $itemTrueUser[0];
		  	if ($itemsTrueUser['verify'] > 1) {
		  		$sqlInsDocs = "INSERT INTO startup_forums_docs( parent_id,user_id,
	                                                        count_views,count_comments,count_likes,
	                                                        tittle,`text`,my_like ) VALUES ( ?,?,?,?,?,?,?,? )";
	        $stmtInsDocs = $pdo->prepare($sqlInsDocs);
	        $stmtInsDocs->execute([ $_POST['idStartup'], $_SESSION['id'],0,0,0,
	    	                          ucfirst(mb_substr(strip_tags($_POST['tittle']),0,80)),
	    	                          mb_substr($_POST['text'],0,5000),0 ]);
		  	$idOfDocs = $pdo->lastInsertId();
	        echo (integer)$idOfDocs;
		  	}
		  }
    } else {
    	exit;
    }

    
  } else { exit; }


} else { exit; }

?>