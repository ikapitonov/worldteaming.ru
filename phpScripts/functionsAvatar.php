<?php

  require_once 'configBD.php';
  function can_upload($file){

    if($file['name'] == '') {
		return 'Вы не выбрали файл.';
    }

	if($file['size'] == 0) {
		return 'Файл слишком большой';
	}
	
	$getMime = explode('.', $file['name']);
	$mime = strtolower(end($getMime));
	$types = array('jpg', 'png', 'bmp', 'jpeg');
	
	if(!in_array($mime, $types)) {
		return 'Недопустимый тип файла';
	}
	
	return true;
  }
  
  function make_upload($file, $where, $URL){	
    
    if ($where == "user") {
    	$nameTrue = explode(".", $file['name']);
		$name = $_SESSION['id']. "-_-Avatar-_-" .".".$nameTrue[1];
		copy($file['tmp_name'], 'avatarsUsers/' . $name);
	} else {
		$nameTrue = explode(".", $file['name']);
		$name = $URL. "-_-Avatar-_-" .".".$nameTrue[1];
		copy($file['tmp_name'], 'avatarsStartups/' . $name);
	}
    
    return $name;
  }
?>





