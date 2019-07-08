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
            } else {  ?> 

<?php 

$sqlCountTeam2 = "SELECT user_id,numTask,`date`,who_insert,numTask FROM startup_verify_users WHERE 
                                                                     parent_id=:parent_id AND verify=:verify ORDER BY id DESC";
$stmtCountTeam2 = $pdo->prepare($sqlCountTeam2);
$stmtCountTeam2->execute([':parent_id' => $getURLid , ':verify' => 2 ]);
$itemCountTeam2 = $stmtCountTeam2->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountTeam3 = "SELECT user_id,creater,`date`,who_insert,numTask,textSmall,who_change FROM startup_verify_users WHERE 
                                                                     parent_id=:parent_id AND verify=:verify ORDER BY id DESC";
$stmtCountTeam3 = $pdo->prepare($sqlCountTeam3);
$stmtCountTeam3->execute([':parent_id' => $getURLid , ':verify' => 3 ]);
$itemCountTeam3 = $stmtCountTeam3->fetchAll(PDO::FETCH_ASSOC); 


$sqlUserFor = "SELECT id ,name, lastname, url_avatar FROM users WHERE id=:id";
$stmtUserFor = $pdo->prepare($sqlUserFor);

$sqlStatusTask = "SELECT status FROM startup_forums_task WHERE id=:id";
$stmtStatusTask = $pdo->prepare($sqlStatusTask);

include_once "phpScripts/formatDateWord.php";


$sqlWants = "SELECT id FROM startup_want_do WHERE parent_id=:parent_id";
$stmtWants = $pdo->prepare($sqlWants);
$stmtWants->execute([':parent_id' => $getURLid]);
$itemWants = $stmtWants->fetchAll(PDO::FETCH_ASSOC); 


$sqlStartup = "SELECT id ,name FROM startups WHERE id = :id";
$stmtStartup = $pdo->prepare($sqlStartup);
$stmtStartup->execute([':id' => $getURLid]);
$itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
$itemsStartup = $itemStartup[0];





// счетчик общий 
if ($itemCountTeam2) {
  $peremCount2 = count($itemCountTeam2);
} else {
    $peremCount2 = 0;
}
$peremCountMain = $peremCount2 + count($itemCountTeam3);


?>





<title>Команда <?php echo " ". $itemsStartup['name']; ?></title>
<link rel="stylesheet" type="text/css" href="static/settingStartup/settingMain.css">
<link rel="stylesheet" type="text/css" href="static/settingStartup/teaming.css">
<div class="wrap_with_Fo">



   <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
            <div id="navbar_startups_forum">
                <div id="navbar_startups_wrap_items">
                  <a href="startup-<?php echo $itemsStartup['id']; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="" id="startups_main_UNDERNAME">Просмотр заявок на участие</a>
                </div>
                <div class="selectAll">
                  Найдено:<span><?php echo $peremCountMain; ?></span>
                </div>
            </div>
            <div class="startup_wrap_padding">
                <div class="setting_groupWrap" id="setting_groupWrap0">
                    <div>Участники<span><?php if ($itemCountTeam2) { echo count($itemCountTeam2);  } else {} ?></span><small></small>
                    <a href="teaming-<?php echo $getURLid; ?>"></a></div>
                </div>
                <?php if ($itemCountTeam2) {  ?>
                <?php foreach ($itemCountTeam2 as  $itemsCountTeam2) { 

                  $stmtUserFor->execute([':id' => $itemsCountTeam2['user_id'] ]);
                  $itemUserFor = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                  $itemsUserFor = $itemUserFor[0];


                  $stmtUserFor->execute([':id' => $itemsCountTeam2['who_insert'] ]);
                  $itemUserIns = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                  $itemsUserIns = $itemUserIns[0];

                  if ($itemsCountTeam2['numTask'] > 0) {
                    $stmtStatusTask->execute([':id' => $itemsCountTeam2['numTask'] ]);
                    $itemStatusTask = $stmtStatusTask->fetchAll(PDO::FETCH_ASSOC);
                    $itemsStatusTask = $itemStatusTask[0];
                  }
            
                  $dateDateSmall = formatDate($itemsCountTeam2['date'], "Добавлен");

                  if ($itemsUserFor['url_avatar']) {
                    $UrlImgUserFor = "avatarsUsers/". $itemsUserFor['url_avatar'];
                  } else {
                      $UrlImgUserFor = "avatarsUsers/itsMe.jpg";
                  } 
                ?>
                <div class="item_forum_Com item_setting_Main2">
                    <div class="item_forum_Com_left">
                        <div class="forum_ComUserfoto forum_ComUUserImg<?php echo $itemsUserFor['id']; ?>" style="margin-left: 0;"></div>
                        <style type="text/css">
                              .forum_ComUUserImg<?php echo $itemsUserFor['id']; ?> {
                                background-image: url(<?php echo $UrlImgUserFor; ?>);
                              }
                        </style>
                    </div>
                    <div class="item_forum_Com_right">
                        <div class="item_setting_Space">
                            <div class="forum_Com_right_UP">
                                <a href="user-<?php echo $itemsUserFor['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserFor['name']." ".$itemsUserFor['lastname']; ?></a>
                                <div class="dateColor"><?php echo $dateDateSmall; ?></div>
                                <div class="id_this_user_2" style="display: none"><?php echo $itemsCountTeam2['user_id']; ?></div>
                                <div class="class_this_user_2" style="display: none;">2</div>
                            </div>
                            <ul class="item_settingDoing">
                                <li class="settingDoing_first"><span>Действие</span>
                                    <i class="material-icons">arrow_drop_down</i></li>
                                <div class="settingDoingOnclick_wrap">
                                    <li class="settingDoingOnclick btnAddInic">Перевести в "Инициаторы"</li>
                                    <li class="settingDoingOnclick btnDELELE_setting">Удалить</li>
                                </div>
                            </ul>
                        </div>
                        <div class="settingAboutTask">                            
                            <div>Добавил:<a style="padding-left: 10px;" href="user-<?php echo $itemsUserIns['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserIns['name']." ".$itemsUserIns['lastname']; ?></a></div>
                            <?php if($itemsCountTeam2['numTask'] > 0) { 
                              if ($itemsStatusTask['status'] == 1) {
                                $wordTask1 = "Выполняет"; 
                                $wordTask1N = 1;
                              } elseif ($itemsStatusTask['status'] == 2)  { $wordTask1 = "Выполнил"; $wordTask1N = 2;  } 
                                else { $wordTask1 = ""; $wordTask1N = 0; }
                             ?>

                                <a href="forum_task_<?php echo $itemsCountTeam2['numTask']; ?>-<?php echo $itemsStartup['id']; ?>" class="item_a_main tasHrefTaskItem2"><?php echo $wordTask1. " "; ?> задачу №<span class="taskNumberItem2"><?php echo $itemsCountTeam2['numTask']; ?></span></a>
                                <div class="this_user_about_task" style="display: none;"><?php echo $wordTask1N; ?></div>
                            <?php } else{ ?>
                                <a  class="item_a_main tasHrefTaskItem2 namesHidden"><span class="taskNumberItem2"></span></a>
                                <div class="this_user_about_task" style="display: none;">0</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <script type="text/javascript" src="static/settingStartup/teaming2.js"></script>
                <?php } else { ?>
                  <div class="notFound_pickImg">
                        <img src="static/img/notFound.png">
                    </div>
                <?php } ?>
                <div class="setting_groupWrap" id="setting_groupWrap1">
                    <div>Инициаторы<span><?php if ($itemCountTeam3) { echo count($itemCountTeam3);  } else {} ?></span><small></small>
                      <a href="teaming-<?php echo $getURLid; ?>"></a></div>
                </div>
                <?php foreach ($itemCountTeam3 as $itemsCountTeam3) {

                  $stmtUserFor->execute([':id' => $itemsCountTeam3['user_id'] ]);
                  $itemUserFor2 = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                  $itemsUserFor2 = $itemUserFor2[0];

                  if ($itemsCountTeam3['creater'] > 0) {} else {
                      $stmtUserFor->execute([':id' => $itemsCountTeam3['who_insert'] ]);
                      $itemUserInsert = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                      $itemsUserInsert = $itemUserInsert[0];

                      $stmtUserFor->execute([':id' => $itemsCountTeam3['who_change'] ]);
                      $itemUserChange = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                      $itemsUserChange = $itemUserChange[0];

                      $stmtUserFor->execute([':id' => $_SESSION['id'] ]);
                      $itemUserYou = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                      $itemsUserYou = $itemUserYou[0];

                  }

                  if ($itemsCountTeam3['numTask'] > 0) {
                    $stmtStatusTask->execute([':id' => $itemsCountTeam3['numTask'] ]);
                    $itemStatusT = $stmtStatusTask->fetchAll(PDO::FETCH_ASSOC);
                    $itemsStatusT = $itemStatusT[0];
                  }

                  if ($itemsCountTeam3['creater'] > 0) {
                    $dateDate2 = formatDate($itemsCountTeam3['date'], "От");
                  } else {
                    $dateDate2 = formatDate($itemsCountTeam3['date'], "Переведен");
                  }

                  if ($itemsUserFor2['url_avatar']) {
                    $UrlImgUserFor2 = "avatarsUsers/". $itemsUserFor2['url_avatar'];
                  } else {
                      $UrlImgUserFor2 = "avatarsUsers/itsMe.jpg";
                  }   
                ?>
                <div class="item_forum_Com <?php if ($itemsCountTeam3['creater'] == 1) {} else {echo " "."item_setting_Main3";} ?> ">
                    <div class="item_forum_Com_left">
                        <div class="forum_ComUserfoto forum_ComUUserImgImg<?php echo $itemsUserFor2['id']; ?>" style="margin-left: 0;"></div>
                        <style type="text/css">
                              .forum_ComUUserImgImg<?php echo $itemsUserFor2['id']; ?> {
                                background-image: url(<?php echo $UrlImgUserFor2; ?>);
                              }
                        </style>
                    </div>
                    <div class="item_forum_Com_right">
                        <div class="item_setting_Space">
                            <div class="forum_Com_right_UP">
                                <a href="user-<?php echo $itemsUserFor2['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserFor2['name']." ".$itemsUserFor2['lastname']; ?></a>
                                <div class="dateColor"><?php echo $dateDate2; ?></div>
                                <a href="user-<?php echo $_SESSION['id']; ?>" class="itsYOU" style="display: none;"><?php echo $itemsUserYou['name']." ".$itemsUserYou['lastname']; ?></a>
                            </div>
                        </div>
                        <?php if ($itemsCountTeam3['creater'] > 0) {} else { ?>
                        <div class="settingAboutTask">
                              <div>Добавил:<a style="padding-left: 10px;" href="user-<?php echo $itemsUserInsert['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserInsert['name']." ".$itemsUserInsert['lastname']; ?></a></div>

                              <?php if($itemsCountTeam3['numTask'] > 0) { 
                              if ($itemsStatusT['status'] == 1) {
                                $TaskWord = "Выполняет"; 
                                $TaskNum = 1;
                              } elseif ($itemsStatusT['status'] == 2)  { $TaskWord = "Выполнил"; $TaskNum = 2;  } 
                                else { $TaskWord = ""; $TaskNum = 0; }
                             ?>

                                  <a href="forum_task_<?php echo $itemsCountTeam3['numTask']; ?>-<?php echo $itemsStartup['id']; ?>" class="item_a_main"><?php echo $TaskWord. " "; ?> задачу №<span class=""><?php echo $itemsCountTeam3['numTask']; ?></span></a>
                                  <div class="this_user_about_task" style="display: none;"><?php echo $TaskNum; ?></div>
                              <?php } else{} ?>
                        </div>
                        <?php } ?>
                        <div class="settingAboutCommentyou"> 
                            <?php if ($itemsCountTeam3['creater'] > 0) { ?> 
                                <div></div>
                                <div>Основатель проекта</div>
                            <?php } else { ?>
                            <div class="commentAboutYOu">
                                <div class="valueYouDoingSt"><?php echo $itemsCountTeam3['textSmall']; ?></div>
                                <div class="changeAbYou_onclick"><span>Изменить</span><i class="material-icons">check_box</i></div>
                                <div style="display: none" class="nubmer_this_user3"><?php echo $itemsCountTeam3['user_id']; ?></div>
                            </div>
                            <div class="changeAboutInic">Изменил:<a style="padding-left: 10px; max-width: 250px;" href="user-<?php echo $itemsUserChange['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserChange['name']." ".$itemsUserChange['lastname']; ?></a></div>
                            <?php }  ?>
                        </div>
                        <div class="changeAbYou_wrap">
                            <input type="text" placeholder="Не должно быть пустым" maxlength="25">
                            <small class="changeAbYou_small">Не более 25 символов</small>
                            <div class="changeAbYou_btn_wrap">
                                <button class="changeAbYou_yes">Сохранить</button>
                                <button class="changeAbYou_no">Отмена</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div id="startup_wrapper_right">
            <div class="profile_left_header_info">Меню</div>
            <div class="startup_menuSetting">
                <a href="update-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Редактирование информации</a>
                <a href="insert-<?php echo $getURLid; ?>" class="startup_menu_ITEM">Обработка заявок<?php if ($itemWants) { ?><span id="how_manyWantsdo"><?php echo count($itemWants); ?></span><?php } else {} ?></a>
                <a href="teaming-?php echo $getURLid; ?>" class="startup_menu_ITEM startup_menu_ITEM_border">Команда</a>
            </div>
        </div>
    </div>
    <?php include "static/settingStartup/popupWindow.php"; ?>
    <?php if (count($itemCountTeam3) > 1) { ?>
        <script type='text/javascript' src='static/settingStartup/teaming3.js'></script>
    <?php } else {} ?>
  
<?php include "footer.php"; ?>
<?php } } } } } ?>