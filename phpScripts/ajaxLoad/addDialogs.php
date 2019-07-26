<?php


if ($_POST['word'] == 'дай диалоги') {
	require_once '../../configBD.php';
	$startFrom = $_POST['startFrom'];
	$word = strip_tags(urldecode($_POST['word_search']));
	if (empty($word) || $word == "undefined") {
        $word = ""; $join = ""; $like = "";
    } else {
        $join = "INNER JOIN users ON ((users.id=userDialogs.one_user AND users.id!=userDialogs.second_user)
                                    OR(users.id=userDialogs.second_user AND users.id!=userDialogs.one_user))";

        $like = "AND ((name LIKE '%" . $word . "%' OR lastname LIKE '%" . $word . "%')
                OR (CONCAT(name,' ',lastname) LIKE '%" . $word . "%'))";
    }
	
	$sqlDialog = "SELECT userDialogs.id,one_user,second_user,userDialogs.`Date`,last_message,from_who,reed,how_many_reed
                    FROM userDialogs "." ". "$join" ." "."WHERE 
                    (one_user=:one_user OR second_user=:second_user)"." ". "$like" ." ".
                    "ORDER BY userDialogs.date DESC LIMIT {$startFrom}, 20";
    $stmtDialog = $pdo->prepare($sqlDialog);
    $stmtDialog->execute([':one_user' => $_SESSION['id'], ':second_user' => $_SESSION['id'] ]); 
    $itemDialog = $stmtDialog->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($itemDialog);

} else { exit(); }

?>