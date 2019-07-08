<?php  error_reporting(0); 
$sqlCounts1 = "SELECT id FROM startup_forums_idea WHERE parent_id=:parent_id";
$stmtCounts1 = $pdo->prepare($sqlCounts1);
$stmtCounts1->execute([':parent_id' => $getURLid]);
$itemCounts1 = $stmtCounts1->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountsWant = "SELECT id FROM startup_want_do WHERE parent_id=:parent_id";
$stmtCountsWant = $pdo->prepare($sqlCountsWant);
$stmtCountsWant->execute([':parent_id' => $getURLid]);
$itemCountsWant = $stmtCountsWant->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountsDocs = "SELECT id FROM startup_forums_docs WHERE parent_id=:parent_id";
$stmtCountsDocs = $pdo->prepare($sqlCountsDocs);
$stmtCountsDocs->execute([':parent_id' => $getURLid]);
$itemCountsDocs = $stmtCountsDocs->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountsTask = "SELECT id FROM startup_forums_task WHERE parent_id=:parent_id";
$stmtCountsTask = $pdo->prepare($sqlCountsTask);
$stmtCountsTask->execute([':parent_id' => $getURLid]);
$itemCountsTask = $stmtCountsTask->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountTeam2 = "SELECT user_id,numTask FROM startup_verify_users WHERE parent_id=:parent_id AND verify=:verify ORDER BY id DESC";
$stmtCountTeam2 = $pdo->prepare($sqlCountTeam2);
$stmtCountTeam2->execute([':parent_id' => $getURLid , ':verify' => 2 ]);
$itemCountTeam2 = $stmtCountTeam2->fetchAll(PDO::FETCH_ASSOC); 

$sqlCountTeam3 = "SELECT id,user_id,creater,textSmall FROM startup_verify_users WHERE parent_id=:parent_id AND verify=:verify ORDER BY id DESC";
$stmtCountTeam3 = $pdo->prepare($sqlCountTeam3);
$stmtCountTeam3->execute([':parent_id' => $getURLid , ':verify' => 3 ]);
$itemCountTeam3 = $stmtCountTeam3->fetchAll(PDO::FETCH_ASSOC); 

$sqlUpdateViews = "UPDATE startups SET  views=views+1 WHERE id=:id";
$stmtUpdateViews = $pdo->prepare($sqlUpdateViews);
$stmtUpdateViews->execute([':id' => $getURLid]);


include_once('phpScripts/functionsAvatar.php');
if(isset($_FILES['file'])) {
     $check = can_upload($_FILES['file']);   
  if($check === true){

    $sqlCheckA = "SELECT id,avatar_src FROM startups WHERE id=:id";
    $stmtCheckA = $pdo->prepare($sqlCheckA);
    $stmtCheckA->execute([':id' => $getURLid ]);
    $itemCheckA = $stmtCheckA->fetchAll(PDO::FETCH_ASSOC); 
    $itemsCheckA = $itemCheckA[0];
    $itemsCheckAVatar = $itemsCheckA['avatar_src'];
      if ( iconv_strlen($itemsCheckA['avatar_src']) > 6) {
        $sqlCkechAvatar = "UPDATE startups SET  avatar_src=:avatar_src WHERE id=:id";
        $stmtCkechAvatar = $pdo->prepare($sqlCkechAvatar);
        $stmtCkechAvatar->execute([ ':avatar_src' => null ,':id' => $getURLid ]);

        unlink("avatarsStartups/".$itemsCheckAVatar);
      } else {}
    


    $AvatarName = make_upload($_FILES['file'],"notUser", $getURLid);

    $sqlUrlUp = "UPDATE startups SET avatar_src=:avatar_src WHERE id=:id";
    $stmtUrlUp = $pdo->prepare($sqlUrlUp);
    $stmtUrlUp->execute([ ':avatar_src' => $AvatarName, ':id' => $getURLid ]);


    $Avatarka = "avatarsStartups/".$AvatarName;
  } else{
  echo $check;  
  }
}


include_once 'phpScripts/startupDate.php';
$dateWasBord = DateWordSt($itemsStartup['date_born'],"Основан");
?>


<link rel="stylesheet" type="text/css" href="static/startup/startupRight.css">


    <div id="startup_wrapper_img">
        <img src="<?php echo $Avatarka; ?>">
    </div>

    <div id="startup_functions_wrap">
        <div class="startup_right_h2"><h2>Функции:</h2></div>
        <div class="startup_right_people_mt" style="height: 1px; width: 1px;"></div>
<div class="startup_wrap_padding">
        <?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { ?>
            <div class="goLoginBlock">Для использования <b>функционала</b> данного ресурса необходимо представиться<a class="goLoginBTN" href="signin">Авторизоваться</a><a href="signin"><center><img style="padding-top: 10px;" src="static/img/goLogin.png"></center></a><span></span></div>
        <?php } else {
        if ($itemverify) {
          if ($itemsverify['verify'] > 1 && $itemsverify['verify'] < 4) { ?>
              <div class="startup_functions_wrapper startup_functionsCALL">
                  <i class="material-icons">whatshot</i>
                  <span>Предложить идею</span>
              </div>
              <div class="startup_functions_wrapper startup_functionsCALL">
                  <i class="material-icons">link</i>
                  <span>Добавить документ</span>
              </div>
              <a href="taskWrite-<?php echo $getURLid; ?>" class="startup_functions_wrapper">
                  <i class="material-icons">add</i>
                  <span>Написать задачу</span>
              </a>
              <!-- покинуть проект -->
              <?php if ($itemsverify['verify'] == 2) {  ?>
              <?php } else {} if ($itemsverify['verify'] == 3) { ?>  
              <div class="wrappH3"><h3 class="startup_right_h3_setting">Управление:</h3></div>
               <a href="update-<?php echo $getURLid; ?>" class="startup_functions_wrapper">
                <i class="material-icons">settings</i>
                <span>Редактировать страницу</span>
               </a>
               <a href="insert-<?php echo $getURLid; ?>" class="startup_functions_wrapper">
                <i class="material-icons">group_add</i>
                <span>Посмотр заявок</span>
               </a>
               <a href="teaming-<?php echo $getURLid; ?>" class="startup_functions_wrapper">
                <i class="material-icons">group_work</i>
                <span>Команда стартапа</span>
               </a>
              <div class="wrappH3"><h3 class="startup_right_h3_setting">Настройки аватарки:</h3></div>
              <form method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file" style="display: none;">
                <label for="file" class="startup_functions_wrapper" id="btnAddImg">
                    <i class="material-icons">photo_camera</i>
                    <span><?php if ($itemsStartup['avatar_src']) {echo "Обновить";} else {echo "Добавить";} ?> фото</span>
                </label>
                <input type="submit" name="submit" id="startup_sub_foto" style="display: none;" value="Сохранить">
                <span id="needTosave" style="display: none;">Необходимо сохранить</span>
                <script type="text/javascript" src="static/startup/prewiewAvatar.js"></script>
              </form>
              <?php } ?>
              <?php if ($itemsStartup['avatar_src']) { ?>
                <div class="startup_functions_wrapper" id="deleteMy_avatar">
                    <i class="material-icons">delete_outline</i>
                    <span>Удалить аватарку</span>
                    <script type="text/javascript" src="static/startup/deleteAvatarStartup.js"></script>
                </div>
              <?php } else {} ?>
          <?php } else { ?>
            <div class="startup_functions_wrapper startup_functionsCALL">
                <i class="material-icons">whatshot</i>
                <span>Предложить идею</span>
            </div>
            <?php if ($itemsverify['verify'] == 0) { ?>
                <div class="startup_functions_wrapper" id="startup_insertMe">
                    <i class="material-icons startup_functions_wrapperColor startup_functions_wrapperColorColor">done</i>
                    <span>Страница сохранена</span>
                    <button id="startup_delete_Saving" class="startup_btn_del_any" style="display: flex;">
                        <i class="material-icons">delete_outline</i>
                    </button>
                    <script src="static/startup/saveMeStartup.js"></script>
                </div>
                <div class="startup_functions_wrapper startup_functionsCALL" id="startup_btn_WANT">
                    <i class="material-icons">person_add</i>
                    <span>Хочу учавствовать!</span>
                </div>
            <?php } else {} if ($itemsverify['verify'] == 1) { ?>  
                 <div class="startup_functions_wrapper">
                    <i class="material-icons">person_add</i>
                    <span>Заявка на участие отправлена</span>
                </div>
            <?php } else {} if ($itemsverify['verify'] == 9) {     
                      $sqlDeleterMan = "SELECT parent_id,user_id,who_delete,`date` FROM startup_deleter_people 
                                                          WHERE parent_id=:parent_id AND user_id=:user_id";
                      $stmtDeleterMan = $pdo->prepare($sqlDeleterMan);
                      $stmtDeleterMan->execute([':parent_id' => $getURLid, ':user_id' =>$_SESSION['id'] ]);
                      $itemDeleterMan = $stmtDeleterMan->fetchAll(PDO::FETCH_ASSOC); 
                      $itemsDeleterMan = $itemDeleterMan[0];

                      $dateDeleter = DateWordSt($itemsDeleterMan['date'],"");

                      $stmtUserFor->execute([':id' => $itemsDeleterMan['who_delete'] ]);
                      $itemDeleterUser = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                      $itemsDeleterUser = $itemDeleterUser[0];
              ?>  
                  <div class="deleterBlockSR">К сожалению, вы были удалены из участников данного стартапа<br>
                      <center style="margin-top: 10px;"><img src="static/img/deleter.png"></center>
                      <b>Удалил:</b><center>
                          <a class="item_a_main" href="user-<?php echo $itemsDeleterUser['id']; ?>"><?php echo $itemsDeleterUser['name'] . " " .$itemsDeleterUser['lastname']; ?></a>
                      </center>
                      <span><?php echo $dateDeleter; ?></span>
                  </div>
        <?php } } } else { ?>
        <div class="startup_functions_wrapper startup_functionsCALL">
            <i class="material-icons">whatshot</i>
            <span>Предложить идею</span>
        </div>
        <div class="startup_functions_wrapper" id="startup_insertMe">
            <i class="material-icons startup_functions_wrapperColor">star_border</i>
            <span>Сохранить</span>
            <button id="startup_delete_Saving" class="startup_btn_del_any" style="display: none;">
                <i class="material-icons">delete_outline</i>
            </button>
            <script src="static/startup/saveMeStartup.js"></script>
        </div>
        <div class="startup_functions_wrapper startup_functionsCALL" id="startup_btn_WANT">
            <i class="material-icons">person_add</i>
            <span>Хочу учавствовать!</span>
        </div>
        <?php } } ?>  
      
    </div>
</div>
<div class="startup_right_blocks">
    <div class="startup_right_h2"><h2>Разделы</h2></div>
    <div class="startup_wrap_padding">
        <a href="section_idea-<?php echo $getURLid; ?>" class="startup_right_urlTopic">
            <div class="toForumWrapper">
              <div class="toForumIconLeft">
                <i class="material-icons-outlined">accessibility_new</i>
              </div>
              <div class="toForumItemTxt">Идеи и предложения</div>
            </div>
            <div class="toForumCount"><?php if ($itemCounts1) { echo count($itemCounts1); } else {} ?></div>
        </a>
        <a href="section_docs-<?php echo $getURLid; ?>" class="startup_right_urlTopic">
            <div class="toForumWrapper">
              <div class="toForumIconLeft">
                <i class="material-icons-outlined">insert_drive_file</i>
              </div>
              <div class="toForumItemTxt">Документы</div>
            </div>
            <div class="toForumCount"><?php if ($itemCountsDocs) { echo count($itemCountsDocs); } else {} ?></div>  
        </a>
        <a href="section_task-<?php echo $getURLid; ?>" class="startup_right_urlTopic">
            <div class="toForumWrapper">
              <div class="toForumIconLeft">
                <i class="material-icons-outlined">person_add</i>
              </div>
              <div class="toForumItemTxt">Задачник</div>
            </div>
            <div class="toForumCount"><?php if ($itemCountsTask) { echo count($itemCountsTask); } else {} ?></div>  
        </a>
    </div>
</div>
<div class="startup_right_blocks">
  <?php if ($itemCountTeam2) { ?>
    <div class="startup_right_h2"><h2>Участники</h2></div>
    <div class="startup_wrap_padding">
       <?php foreach ($itemCountTeam2 as $itemsCountTeam2) {  
          $stmtUserFor->execute([':id' => $itemsCountTeam2['user_id'] ]);
          $itemUserFor2 = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
          $itemsUserFor2 = $itemUserFor2[0];

          if ($itemsUserFor2['url_avatar']) {
            $UrlImgUserFor2 = "avatarsUsers/". $itemsUserFor2['url_avatar'];
          } else {
              $UrlImgUserFor2 = "avatarsUsers/itsMe.jpg";
          }
        ?>
        <div class="from_user_wrapper">
            <div class="from_user_foto user_fotoImgR2<?php echo $itemsUserFor2['id']; ?>"></div>
            <style type="text/css">
                .user_fotoImgR2<?php echo $itemsUserFor2['id']; ?> {
                    background-image: url(<?php echo $UrlImgUserFor2; ?>);
                }
            </style>
            <div class="from_user_main_info_wrap">
                <a href="user-<?php echo $itemsUserFor2['id']; ?>" class="item_a_main"><?php echo $itemsUserFor2['name']." ".$itemsUserFor2['lastname']; ?></a>
                <?php if (!empty($itemsCountTeam2['numTask'])) { ?>
                <a class="smallItemPeopleA" href="forum.php?task=<?php echo $itemsCountTeam2['numTask']; ?>&id=<?php echo $getURLid; ?>">Задача номер <?php echo " ".$itemsCountTeam2['numTask']; ?></a>
                <?php } else { ?>
                <div class="smallItemPeople">Проявил желание</div>
                <?php } ?>
            </div>
        </div>
        <?php }  ?>
    </div>
  <?php } else {} ?>
    <div class="startup_right_h2"><h2>Инициаторы</h2></div>
    <div class="startup_wrap_padding">
       <?php foreach ($itemCountTeam3 as $itemsCountTeam3) {  
          $stmtUserFor->execute([':id' => $itemsCountTeam3['user_id'] ]);
          $itemUserFor3 = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
          $itemsUserFor3 = $itemUserFor3[0];

          if ($itemsUserFor3['url_avatar']) {
            $UrlImgUserFor3 = "avatarsUsers/". $itemsUserFor3['url_avatar'];
          } else {
              $UrlImgUserFor3 = "avatarsUsers/itsMe.jpg";
          }
        ?>
        <div class="from_user_wrapper">
            <div class="from_user_foto user_fotoImgRi3<?php echo $itemsUserFor3['id']; ?>"></div>
            <style type="text/css">
                .user_fotoImgRi3<?php echo $itemsUserFor3['id']; ?> {
                    background-image: url(<?php echo $UrlImgUserFor3; ?>);
                }
            </style>
            <div class="from_user_main_info_wrap">
                <a href="user-<?php echo $itemsUserFor3['id']; ?>" class="item_a_main"><?php echo $itemsUserFor3['name']." ".$itemsUserFor3['lastname']; ?></a>
                <?php if (!empty($itemsCountTeam3['creater'])) { ?>
                <div class="smallItemPeople">Основатель проекта</div>
                <?php } else { ?>
                <div class="smallItemPeople"><?php echo $itemsCountTeam3['textSmall']; ?></div>
                <?php } ?>
            </div>
        </div>
        <?php }  ?>
    </div>
    <div class="startup_right_h2"><h2>Информация</h2></div>
    <div class="startup_wrap_padding">
        <div class="startup_right_wrap_items startup_right_people_mt" id="startup_right_people_mtONE">
            <div class="startup_right_item_about">Хотят участвовать:</div>
            <div class="startup_right_item_count"><?php echo count($itemCountsWant); ?></div>
        </div>
        <div class="startup_right_wrap_items startup_right_people_mt">
            <div class="startup_right_item_about">Всего просмотров:</div>
            <div class="startup_right_item_count"><?php echo $itemsStartup['views']; ?></div>
        </div>
        <div class="startup_right_wrap_items startup_right_people_mt">
            <div class="startup_right_item_DATE"><?php echo $dateWasBord; ?></div>
        </div>
      </div>
</div>