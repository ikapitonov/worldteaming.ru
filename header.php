<?php include "phpScripts/authUser.php"; ?>
<?php  error_reporting(0); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta charset="utf-8" http-equiv="Project" content="no-cache">
<meta http-equiv="Cache-Control" content="private">
<meta http-equiv="Cache-Control" content="no-cache">
    <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sree+Krushnadevaraya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="static/main/mainCss.css">
    <link rel="stylesheet" type="text/css" href="static/Header/header.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>
</head>
<body>


<?php 
if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {} else {
    $sqlVerifyUserCheck = "SELECT formStart,mailVerify FROM users WHERE id=:id";
    $stmtVerifyUserCheck = $pdo->prepare($sqlVerifyUserCheck);
    $stmtVerifyUserCheck->execute([':id' => $_SESSION['id']]);
    $itemVerifyUserCheck = $stmtVerifyUserCheck->fetchAll(PDO::FETCH_ASSOC); 
    $itemsVerifyUserCheck = $itemVerifyUserCheck[0];

    $itemsVerifyUserCheckID = $_SESSION['id'];
    if ($itemsVerifyUserCheck['mailVerify'] != 1) {
        $headerValidate1 = stripos($_SERVER['REQUEST_URI'], "mail.php");
        if ($headerValidate1 == true) {
        } else { ?>
            <script type="text/javascript">location="mail.php?id=<?php echo $itemsVerifyUserCheckID; ?>"</script>
    <?php    }
    } else {
        if ($itemsVerifyUserCheck['formStart'] != 1) {
            $headerValidate2 = stripos($_SERVER['REQUEST_URI'], "formStart");
            if ($headerValidate2 == true) {
            } else { ?>
                <script type="text/javascript">location="formStart-<?php echo $itemsVerifyUserCheckID; ?>"</script>
        <?php }
        } else {}
    }
}

?>

    <header id='section_header'>
        <nav>
            <div class="nH_wrapper_items">
                <ul class="nH_ul_set">
                    <li class="nH_item_set_Li">
                        <a href="index.php" id="top_logotip"><span>Главная</span><img src="static/img/logotip.svg" alt="Главная"></a>
                    </li>
                    <li class="nH_item_set_Li" style="margin-left: 50px;">
                        <a href="startups" class="nH_item_a_word nH_item_a_ml">Стартапы</a>
                    </li>
                    <li class="nH_item_set_Li">
                        <a href="people" class="nH_item_a_word nH_item_a_ml">Люди</a>
                    </li>
                </ul>
            </div>
            <div class="nH_wrapper_items">
                <ul class="nH_ul_set">
                    <?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {  ?>
                    <li class="nH_item_set_Li">
                        <a href="signin" class="nH_item_a_word nH_item_a_mr">Вход</a>
                    </li>
                    <li class="nH_item_set_Li">
                        <a href="signup" class="nH_a_signup">Регистрация</a>
                    </li>

                    <?php } else  {  
                      $sqlCountDialogsH = "SELECT id FROM userDialogs WHERE to_who=:to_who AND reed=:reed";
                      $stmtCountDialogsH = $pdo->prepare($sqlCountDialogsH);
                      $stmtCountDialogsH->execute([':to_who' => $_SESSION['id'] , ':reed' => 0]);
                      $itemCountDialogsH = $stmtCountDialogsH->fetchAll(PDO::FETCH_ASSOC);
                      if ($itemCountDialogsH) {
                        $CountDialogsHeader = count($itemCountDialogsH);
                      } else { $CountDialogsHeader = null; }
                    ?>
                    <li class="nH_item_set_Li">
                        <a href="content-startups-<?php echo $_SESSION['id']; ?>" class="nH_item_a_word nH_item_a_mr">Мой контект</a>
                    </li>
                    <li class="nH_item_set_Li">
                        <a href="dialogs-<?php echo $_SESSION['id']; ?>" class="nH_item_a_word nH_item_a_mr">Диалоги<?php if ($itemCountDialogsH) { ?>
                        <div class="nH_count_dialogsNR"><?php echo $CountDialogsHeader; ?></div>
                        <?php } else {} ?></a>
                    </li>
                    <li class="nH_item_set_Li">
                        <a href="user-<?php echo $_SESSION['id']; ?>" class="nH_item_a_word nH_item_a_mr">Моя станица</a>
                    </li>
                    <form method="POST" action="phpScripts/logout.php" class="nH_form_logout">
                        <input type="submit" name="logout" id="nH_logoutBtn">
                        <label for="nH_logoutBtn" class="nH_item_a_word">Выйти</label>
                    </form>
                    <?php } ?>
                </ul>
            </div>          
        </nav>
    </header>