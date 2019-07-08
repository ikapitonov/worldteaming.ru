<?php 

$id = $_GET['id'];

if ($id == 1) {
	echo '<script type="text/javascript">location="../startups"</script>';
} elseif ($id == 2) {
    echo '<script type="text/javascript">location="../people"</script>';
}
?>