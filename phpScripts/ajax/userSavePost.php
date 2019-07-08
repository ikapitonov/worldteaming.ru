<?php 

require_once '../../configBD.php';
 
  if ( $_POST['newPost'] == 'создать' ) {
  	$txt = $_POST['TxtBlog'];
  	$parentid = $_POST['parent_id'];
  	if ($_SESSION['id'] == $_POST['parent_id']) {
	
	    $sql = "INSERT INTO `userBlog`(`parent_id`,`text`,`yourLike`,`Howlikes`) VALUES ( ?,?,?,? )";
	    $stmt = $pdo->prepare($sql);
	    $stmt->execute([ $parentid, mb_substr($txt,0,3000), 0 , 0 ]);   
    } else { exit; }
  } else { exit; }

?>