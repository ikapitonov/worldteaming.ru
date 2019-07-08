<?php require_once '../configBD.php'; 

	if (count($_POST) > 0) {
		$sqlVerifyS = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
		$stmtVerifyS = $pdo->prepare($sqlVerifyS);
		$stmtVerifyS->execute([':parent_id' => $_POST['startupNum'], ':user_id' => $_SESSION['id'] ]);
		$itemVerifyS = $stmtVerifyS->fetchAll(PDO::FETCH_ASSOC);
		if ($itemVerifyS) {   $itemsVerifyS = $itemVerifyS[0];
		  if ($itemsVerifyS['verify'] == 3) {
		  	 
	     $sqlWantsSel = "SELECT id,user_id,from_task,comment_id FROM startup_want_do WHERE parent_id=:parent_id AND id=:id AND user_id=:user_id";
	     $stmtWantsSel = $pdo->prepare($sqlWantsSel);
	     $stmtWantsSel->execute([':parent_id' => $_POST['startupNum'], ':id' => $_POST['wantNum'], ':user_id' => $_POST['userNum'] ]);
	     $itemWantsSel = $stmtWantsSel->fetchAll(PDO::FETCH_ASSOC);
	     if ($itemWantsSel) {
	     	  $itemsWantsSel = $itemWantsSel[0];
            
          $sqlUpdateMe = "UPDATE startup_verify_users SET verify=2, numTask=:numTask, who_insert=:who_insert
                                                    WHERE parent_id=:parent_id AND user_id=:user_id";
          $stmtUpdateMe = $pdo->prepare($sqlUpdateMe);
          $stmtUpdateMe->execute([ ':numTask' => $itemsWantsSel['from_task'],
                                   ':who_insert' => $_SESSION['id'],
                                   ':parent_id' => $_POST['startupNum'], 
                                   ':user_id' => $_POST['userNum']]);

          if (!empty($itemsWantsSel['from_task'])) {
              $sqlUpdateForum = "UPDATE startup_forums_task SET status=1, who_id=:who_id WHERE parent_id=:parent_id AND id=:id";
              $stmtUpdateForum = $pdo->prepare($sqlUpdateForum);
              $stmtUpdateForum->execute([':who_id' => $_POST['userNum'], ':parent_id' => $_POST['startupNum'], ':id' => $itemsWantsSel['from_task'] ]);

          	  $sqlUpdate2 = "UPDATE forumComTask SET statusCom=1 WHERE id=:id";
              $stmtUpdate2 = $pdo->prepare($sqlUpdate2);
              $stmtUpdate2->execute([':id' => $itemsWantsSel['comment_id'] ]);
          }
        $sqlDeletewant1 = "DELETE FROM startup_want_do WHERE parent_id=:parent_id AND user_id=:user_id";
        $stmtDeletewant1 = $pdo->prepare($sqlDeletewant1);
        $stmtDeletewant1->execute([':parent_id' => $_POST['startupNum'], ':user_id' => $_POST['userNum'] ]);

          if ($stmtDeletewant1) { ?>
<!doctype html>
<html style='overflow-x:hidden;'>
<head>
<meta charset="UTF-8">
<title>Участник добавлен!</title>
</head>
<body>
    <style type="text/css">
        body {
            background-color: white;
            font-family: Arial;
        }
        img {
            display: block;
            height: 250px;
            margin: 20px auto;
        }
        h1 {
            font-weight: 500;
            font-size: 24px;
            line-height: 17px;
            color: #2a5885;
            margin-bottom: 30px;
        }
        h1 a {
        	  font-weight: 500;
            font-size: 24px;
            line-height: 17px;
            color: #2a5885;
            margin-bottom: 30px;
            text-decoration: none;
        }
        .wrapper {
            width: auto;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .wrapper div {
            font-size: 16px;
            color: #285473;
            font-weight: 400;
            display: flex;
            align-items: center;
        }
        .wrapper div a {
        	  font-size: 16px;
            color: #285473;
            font-weight: 400;
            text-decoration: none;
        }
        .wrapper div span {
            padding-left: 10px;
            font-size: 24px;
            color: black;
        }
        a:hover {
        	text-decoration: underline;
        }
    </style>
    <title>Успешно!</title>
    <div class="wrapperImg"><img src="../static/img/addTeam.png"></div>
    <div class="wrapper">
        <h1><a href="../insert-<?php echo $_POST['startupNum']; ?>">Участник успешно добавлен!</a></h1>
        <div><a href="../insert-<?php echo $_POST['startupNum']; ?>">Переход через:</a><span>3</span></div>
    </div>

    <script type="text/javascript">
        var span = document.querySelector(".wrapper div span");

        setInterval(function() {
            span.innerHTML = span.innerHTML - 1;
            if (span.innerHTML == 0) {
                document.location.href = "../insert-<?php echo $_POST['startupNum']; ?>";
            }
        }, 1000);

        setTimeout( function () {
            document.location.href = "../insert-<?php echo $_POST['startupNum']; ?>";
        } ,5000);
    </script>
</body>
</html>





         <?php }


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