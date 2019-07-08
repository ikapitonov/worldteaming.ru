<?php

require_once '../configBD.php';

if (!empty($_SESSION['auth'])) {
	$userId = $_SESSION['id'];
	if (!empty($_GET['search'])) {
		$userSearch = $_GET['search']; ?>
		<script type="text/javascript">location="../dialogs-<?php echo $userId; ?>&search=<?php echo $userSearch; ?>"</script>
<?php	} else { ?>
		<script type="text/javascript">location="../dialogs-<?php echo $userId; ?>"</script>
<?php	}
} else {
	exit();
}

?>