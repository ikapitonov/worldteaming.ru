<?php include "header.php"; $getURLid = $_GET['id']; ?>
<?php if (count($_GET) > 1 ) {
        echo '<script type="text/javascript">location="index.php"</script>';
}  else {
if (empty($_GET['id']) || $_GET['id'] == 0 )  {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {

if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
    echo '<script type="text/javascript">location="index.php"</script>';
} else {
    $sqlCheck = "SELECT verify FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
    $stmtCheck = $pdo->prepare($sqlCheck);
    $stmtCheck->execute([':parent_id' => $getURLid, ':user_id' => $_SESSION['id'] ]);
    $itemCheck = $stmtCheck->fetchAll(PDO::FETCH_ASSOC); 
        if (!$itemCheck) {
           echo '<script type="text/javascript">location="index.php"</script>'; 
         }  else { 
            $itemsCheck = $itemCheck[0];
            if ($itemsCheck['verify'] !== 3) {
                echo '<script type="text/javascript">location="index.php"</script>'; 
            } ?> 


<?php 

$sqlStartup = "SELECT id ,name FROM startups WHERE id = :id";
$stmtStartup = $pdo->prepare($sqlStartup);
$stmtStartup->execute([':id' => $getURLid]);
$itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
$itemsStartup = $itemStartup[0];

$sqlWants = "SELECT * FROM startup_want_do WHERE parent_id=:parent_id ORDER BY from_task DESC";
$stmtWants = $pdo->prepare($sqlWants);
$stmtWants->execute([':parent_id' => $getURLid]);
$itemWants = $stmtWants->fetchAll(PDO::FETCH_ASSOC); 

include_once "phpScripts/formatDateWord.php";
include_once "phpScripts/online.php";


?>

   <title>Заявки <?php echo $itemsStartup['name']; ?></title>
   <link rel="stylesheet" type="text/css" href="static/settingStartup/insert.css">
   <link rel="stylesheet" type="text/css" href="static/settingStartup/settingMain.css">
<div class="wrap_with_Fo">

   <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
            <div id="navbar_startups_forum">
                <div id="navbar_startups_wrap_items">
                  <a href="startup-<?php echo $itemsStartup['id']; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="insert-<?php echo $itemsStartup['id']; ?>" id="startups_main_UNDERNAME">Просмотр заявок на участие</a>
                </div>
                <div class="selectAll">
                  Найдено:<span><?php if ($itemWants) { echo count($itemWants); } else {echo 0;}?></span>
                </div>
            </div>
            <div class="startup_wrap_padding">
              
              <?php if ($itemWants) { 
                  $sqlUserFor = "SELECT users.id ,name, lastname, url_avatar, status, online FROM users 
                                INNER JOIN users_static_info ON users_static_info.id=users.id  WHERE users.id=:id";
                  $stmtUserFor = $pdo->prepare($sqlUserFor);
              ?>
              <?php foreach ($itemWants as  $itemsWants) { ?>
              <?php   $stmtUserFor->execute([':id' => $itemsWants['user_id'] ]);
                      $itemUserFor = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                      $itemsUserFor = $itemUserFor[0];

                      if ($itemsUserFor['url_avatar']) {
                        $UrlImgUserFor = "avatarsUsers/". $itemsUserFor['url_avatar'];
                      } else {
                          $UrlImgUserFor = "avatarsUsers/itsMe.jpg";
                      }
                  
                      $dateDateSmall = formatDate($itemsWants['date'],"От"); 
              ?>
                <div class="item_forum_Com">
                    <div class="item_forum_Com_left">
                        <div class="forum_ComUserfoto forum_ComUUserImg<?php echo $itemsUserFor['id']; ?>" style="margin-left: 0;"></div>
                        <style type="text/css">
                              .forum_ComUUserImg<?php echo $itemsUserFor['id']; ?> {
                                background-image: url(<?php echo $UrlImgUserFor; ?>);
                              }
                        </style>
                        <div style="display: none" class="backImageUrl"><?php echo $UrlImgUserFor; ?></div>
                        <div class="idAnotherUser" style="display: none"><?php echo $itemsUserFor['id']; ?></div>
                        <div style="display: none" class="nubmerOfWants"><?php echo $itemsWants['id']; ?></div>
                        <div style="display: none" class="statusUserJS"><?php echo str_online($itemsUserFor['online']); ?></div>
                    </div>
                    <div class="item_forum_Com_right">
                        <div class="forum_Com_right_UP">
                            <a href="user-<?php echo $itemsUserFor['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserFor['name']." ".$itemsUserFor['lastname']; ?></a>
                            <div class="dateColor"><?php echo $dateDateSmall; ?></div>
                        </div>
                        <?php if ($itemsWants['from_task']) { ?>
                        <div class="fromTaskSetting"><a href="forum_task_<?php echo $itemsWants['from_task']; ?>-<?php echo $itemsStartup['id']; ?>">Заявка к задаче №<b><?php echo $itemsWants['from_task']; ?></b></a></div>
                        <?php } else { echo "<div class='fromTaskSetting' style='display: none;'><a></a></div>"; } ?>
                        <div class="forum_Com_right_TEXT txtControl"><?php echo $itemsWants['text']; ?></div>
                        <div class="forum_Com_right_TEXT_FULL" style="display: none;">Показать полностью...</div>
                        <div class="forum_item_under">
                            <div class="forum_item_under_left">
                                <form action="phpScripts/insertPartner.php" method="POST">
                                    <input type="hidden" name="startupNum" value="<?php echo $getURLid; ?>">
                                    <input type="hidden" name="wantNum" value="<?php echo $itemsWants['id']; ?>">
                                    <input type="hidden" name="userNum" value="<?php echo $itemsUserFor['id']; ?>">
                                    <input type="submit" name="submit" class="forum_item_under_left_1 forum_item_under_btn" value="Принять участника">
                                </form>
                                <div class="forum_item_under_left_2 forum_item_under_btn">Написать сообщение</div>
                            </div>
                            <div class="forum_item_under_right forum_item_under_btn">Отказать</div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <script src="static/settingStartup/insert.js"></script>
                <?php } else { ?>
                   <div class="notFound_pickImg">
                        <img src="static/img/notFound.png">
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="startup_wrapper_right">
            <div class="profile_left_header_info">Меню</div>
            <div class="startup_menuSetting">
                <a href="update-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Редактирование информации</a>
                <a href="insert-<?php echo $getURLid; ?>" class="startup_menu_ITEM startup_menu_ITEM_border">Обработка заявок<?php if ($itemWants) { ?><span id="how_manyWantsdo"><?php echo count($itemWants); ?></span><?php } else {} ?></a>
                <a href="teaming-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Команда</a>
            </div>
        </div>
    </div>
       <?php include "static/settingStartup/insertPopupMes.php"; ?>

<?php include "footer.php"; ?>
<?php } } } } ?>


