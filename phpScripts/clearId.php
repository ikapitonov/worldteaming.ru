


<?php  

function remove_key($key) {
	parse_str($_SERVER['QUERY_STRING'], $vars);
	$url = strtok($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '?') . http_build_query(array_diff_key($vars,array($key=>"")));
	return $url;
}

?>