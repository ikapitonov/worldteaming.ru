<?php include "header.php"; ?>

<?php 
if (count($_GET) > 3 || empty($_GET['id'])) {
  echo '<script type="text/javascript">location="index.php"</script>';
}

if (empty($_GET['task']) && empty($_GET['idea']) && empty($_GET['docs'])) {
  echo '<script type="text/javascript">location="index.php"</script>';
} else {
    if (empty($_GET['task']) && empty($_GET['idea'])) {
      $getURLid = $_GET['id'];
      $commentSql = "forumComments";
      $nameSection = "docs";
      $mainLikesIts = 2;
      $SQL_temp = "startup_forums_docs";
      $nameSectionFull = "Документы";
      $nameSectionStock = "Документ";
      $AboutThisSection = "Нужная информация доступна каждому!"; 

      $sqlSectionCount = "SELECT parent_id FROM startup_forums_docs WHERE parent_id = :parent_id";
    } elseif (empty($_GET['task']) && empty($_GET['docs'])) {
      $getURLid = $_GET['id'];
      $commentSql = "forumComIdea";
      $nameSection = "idea";
      $mainLikesIts = 1;
      $SQL_temp = "startup_forums_idea";
      $nameSectionFull = "Идеи и предложения";
      $nameSectionStock = "Идея";
      $AboutThisSection = "Идеи меняют мир! Не так ли?";

      $sqlSectionCount = "SELECT parent_id FROM startup_forums_idea WHERE parent_id = :parent_id";
    } elseif (empty($_GET['idea']) && empty($_GET['docs'])) {
      $getURLid = $_GET['id'];
      $commentSql = "forumComTask";
      $nameSection = "task";
      $mainLikesIts = 3;
      $SQL_temp = "startup_forums_task";
      $nameSectionFull = "Задачник";
      $nameSectionStock = "Задание";
      $AboutThisSection = "Задачник помогает людям объединиться";

      $sqlSectionCount = "SELECT parent_id FROM startup_forums_task WHERE parent_id = :parent_id";
    } else {
      echo '<script type="text/javascript">location="index.php"</script>';
    }

    $stmtSectionCount = $pdo->prepare($sqlSectionCount);
    $stmtSectionCount->execute([':parent_id' => $getURLid]);
    $itemSectionCount = $stmtSectionCount->fetchAll(PDO::FETCH_ASSOC); 
    $sec_counter = count($itemSectionCount);

    if ($sec_counter / 20 <= 1) {
      $blogI = 1;
    } else {
      $blogI = $sec_counter / 20;
      if ((int)$blogI != $blogI) {
        $blogI = (int)$blogI + 1;
      }
    }
    $pageStr = $_GET['page'];
    if ($pageStr > 1) {
      $itemCountSql = 20 * ($pageStr - 1);
    } else {
      $itemCountSql = 0;
    }
    if ((20 * ($pageStr - 1)) > $sec_counter || $pageStr == "0") { ?>
      <script type="text/javascript">location="section_<?php echo $nameSection; ?>-<?php echo $getURLid; ?>-page1"</script>
    <?php }

    $sqlSection = "SELECT * FROM $SQL_temp
                    WHERE parent_id = :parent_id ORDER BY id DESC LIMIT $itemCountSql,20";
    $stmtSection = $pdo->prepare($sqlSection);
    $stmtSection->execute([':parent_id' => $getURLid]);
    $itemSection = $stmtSection->fetchAll(PDO::FETCH_ASSOC); 


    $sqlStartup = "SELECT id ,date_born, name, status, type, area, people, views,avatar_src FROM startups WHERE id = :id";
    $stmtStartup = $pdo->prepare($sqlStartup);
    $stmtStartup->execute([':id' => $getURLid]);
    $itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
    if (!$itemStartup) {
      echo '<script type="text/javascript">location="index.php"</script>';
    } else {
      $itemsStartup = $itemStartup[0];  

if ($itemsStartup['avatar_src']) {
    $Avatarka = "avatarsStartups/". $itemsStartup['avatar_src'];
} else {
    $Avatarka = "avatarsStartups/group.jpg";
}



if ($_SESSION['id'] && $_SESSION['auth']) {
  $sqlverify = "SELECT verify,creater FROM startup_verify_users WHERE parent_id=:parent_id AND user_id=:user_id";
  $stmtverify = $pdo->prepare($sqlverify);
  $stmtverify->execute([':parent_id' => $getURLid , ':user_id' => $_SESSION['id']]);
  $itemverify = $stmtverify->fetchAll(PDO::FETCH_ASSOC);
  $itemsverify = $itemverify[0];
}

if ($_SESSION['id'] && $_SESSION['auth']) { 
    $sqlForumMain = "SELECT user_id FROM forumMainLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
    $stmtForumMain = $pdo->prepare($sqlForumMain);
}

$sqlUserFor = "SELECT id ,name, lastname, url_avatar FROM users WHERE id = :id";
                $stmtUserFor = $pdo->prepare($sqlUserFor); 


$sqlDiscass = "SELECT id FROM $commentSql WHERE parent_id=:parent_id";
                $stmtDiscass = $pdo->prepare($sqlDiscass); 
?>

<?php if (!empty($_GET['page'])) { ?>
  <script type="text/javascript" src="static/profile/scrollPosts.js"></script>
<?php } ?>

<?php include "static/startup/popupFunctions.php"; ?>
<title><?php echo $nameSectionFull . " ".$itemsStartup['name']; ?></title>
<link rel="stylesheet" type="text/css" href="static/section/section.css">
<div class="wrap_with_Fo">
    <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
       <div id="navbar_startups_forum">
              <div id="navbar_startups_wrap_items">
                  <a href="startup-<?php echo $getURLid; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="" id="startups_main_UNDERNAME"><h1><?php echo $nameSectionFull; ?></h1></a>
              </div>
              <?php if ($itemSection) { ?>
              <div class="selectAll">
                Найдено:<span><?php if ($itemSection) { echo $sec_counter; } else {echo 0;}?></span>
              </div>
              <?php }  else {} ?>
            </div>
            <div class="startup_wrap_padding">
                <div class="setting_groupWrap">
                    <strong><?php echo $AboutThisSection; ?></strong>
                </div>
                <div class="forums_to_doing">
                  <?php if ($_SESSION['id'] && $_SESSION['auth'] && $itemsverify['verify'] != 9) { if (empty($_GET['task']) && empty($_GET['docs'])) { ?>
                    <div class="forums_to_doing_text">Возможно, именно <strong>твоя</strong> идея изменит мир!</div>
                    <div class="startup_functions_wrapper startup_functionsCALL" style="width: 210px; margin-top: 0;">
                        <i class="material-icons">whatshot</i>
                        <span>Предложить идею</span>
                    </div>
                    <?php } else { if ($itemverify) { if ($itemsverify['verify'] == 0) { ?>
                    <div class="forums_to_doing_text">Доступно для редактирования только <strong>участикам</strong> и <strong>инициаторам</strong></div>
                    <div class="startup_functions_wrapper startup_functionsCALL" style="width: 220px; margin-top: 0;" id="WANT2SEC">
                        <i class="material-icons">person_add</i>
                        <span>Хочу учавствовать!</span>
                    </div>
                    <?php } elseif ($itemsverify['verify'] == 1) { ?>
                    <div class="forums_to_doing_text">Редактирование только <strong>участиками</strong> и <strong>инициаторами</strong></div>
                    <div class="startup_functions_wrapper" style="width: 290px; margin-top: 0;">
                        <i class="material-icons">person_add</i>
                        <span>Заявка на участие отправлена</span>
                    </div>
                    <?php } elseif ($itemsverify['verify'] > 1 && $itemsverify['verify'] < 4) { ?>
                        <?php if (empty($_GET['task'])) {  ?>
                          <div class="forums_to_doing_text">Доступно для редактирования</div>
                            <div class="startup_functions_wrapper startup_functionsCALL" style="width: 220px; margin-top: 0;">
                                <i class="material-icons">link</i>
                                <span>Добавить документ</span>
                            </div>
                        <?php } else { ?>  
                          <div class="forums_to_doing_text">Доступно для редактирования</div>
                            <a href="taskWrite-?php echo $getURLid; ?>" class="startup_functions_wrapper" style="width: 200px; margin-top: 0;">
                                <i class="material-icons">add</i>
                                <span>Написать задачу</span>
                            </a>
                    <?php } } else {
                                echo '<script type="text/javascript">location="index.php"</script>';
                    } } else {  ?>
                    <div class="forums_to_doing_text">Доступно для редактирования только <strong>участикам</strong> и <strong>инициаторам</strong></div>
                    <div class="startup_functions_wrapper startup_functionsCALL" style="width: 220px; margin-top: 0;" id="WANT2SEC">
                        <i class="material-icons">person_add</i>
                        <span>Хочу учавствовать!</span>
                    </div>
                    <?php } } } else { if ($itemsverify['verify'] == 9) { if (empty($_GET['task']) && empty($_GET['docs'])) { ?>
                        <div class="forums_to_doing_text">Возможно, именно <strong>твоя</strong> идея изменит мир!</div>
                        <div class="startup_functions_wrapper startup_functionsCALL" style="width: 210px; margin-top: 0;">
                            <i class="material-icons">whatshot</i>
                            <span>Предложить идею</span>
                        </div>
                    <?php } else { ?>  
                      <div id="deleterSection9">К сожалению, вы были удалены из участников данного стартапа <img src="static/img/deleter.png"></div>
                    <?php } } else { ?>
                        <div class="goLoginComments" style="margin-left: 20px;">Для использования функционала необходимо представиться<a class="goLoginCommentsBtn" href="signin">Авторизоваться</a><a href="signin"><img src="static/img/goLogin.png"></a></div>
                     <?php } }  ?>
                </div>

                <?php if ($itemSection) {

                $sqlJoinCg = "SELECT parent_cg,cg,`text` FROM startup_task_cg
                  INNER JOIN want_cg ON startup_task_cg.cg=want_cg.id 
                  WHERE startup_task_cg.id=:id";
                $stmtJoinCg = $pdo->prepare($sqlJoinCg); ?>

                <ul class="wrapper_item_forum">




                <?php foreach ($itemSection as $itemsSection) { ?>
                <?php 
                  $stmtUserFor->execute([':id' => $itemsSection['user_id'] ]);
                  $itemUserFor = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC); 
                  $itemsUserFor = $itemUserFor[0]; 
                  if ($itemsUserFor['url_avatar']) {
                    $UrlImgUser = "avatarsUsers/". $itemsUserFor['url_avatar'];
                  } else {
                      $UrlImgUser = "avatarsUsers/itsMe.jpg";
                  }

                  $stmtJoinCg->execute([':id' => $itemsSection['id']]);
                  $itemJoinCg = $stmtJoinCg->fetchAll(PDO::FETCH_ASSOC);

                  include_once "phpScripts/formatDate.php";
                  $dateDate = formatDate($itemsSection['date']);

                  $stmtDiscass->execute([':parent_id' => $itemsSection['id'] ]);
                  $itemDiscass = $stmtDiscass->fetchAll(PDO::FETCH_ASSOC); 
                  if ($itemDiscass) {
                    $itemDiscassC = count($itemDiscass);
                  } 
                  else { $itemDiscassC = 0; }
                ?>   
                    <li class="item_forum_li">
                        <div class="from_user_Section_wrapper">
                            <div class="from_user_Section_foto from_user_Section_foto<?php echo $itemsSection['id']; ?>"></div>
                            <style type="text/css">
                              .from_user_Section_foto<?php echo $itemsSection['id']; ?> {
                                background-image: url(<?php echo $UrlImgUser; ?>);
                              }
                            </style>
                            <div class="from_user_main_Section_info_wrap">
                                <a class="item_a_main namesHidden" href="user-<?php echo $itemsUserFor['id']; ?>"><?php echo $itemsUserFor['name']. " ". $itemsUserFor['lastname']; ?></a>
                                <div><?php echo $dateDate; ?></div>
                            </div>
                            <?php if(!empty($_GET['task'])) { 
                              if (empty($itemsSection['deleter'])) {
                                                                                                  if ($itemsSection['status'] == 0) { 
                                  $statusTask = "Активная задача"; $statusColor = "#82b93c;"; } elseif ($itemsSection['status'] == 1) {
                                  $statusTask = "Выполняется"; $statusColor = "#FFBB00;"; }  elseif ($itemsSection['status'] == 2) {
                                  $statusTask = "Выполнена!"; $statusColor = "#3498DB;"; } else {}
                              } else {
                                  $statusTask = "Прервана!"; $statusColor = "#f65314;"; 
                              } ?> 
                            
                            <div class="section_aboutTask_status" style="color: <?php echo " ".$statusColor; ?>"><?php echo $statusTask; ?></div>
                            <?php } ?>
                        </div>
                        <div class="wrapper_item_ml">
                            <div class="item_TITTLE"><a href="forum_<?php echo $nameSection."_".$itemsSection['id']; ?>-<?php echo $_GET['id']; ?>"><h2><?php echo $itemsSection['tittle']; ?></h2></a></div>
                            <?php if(!empty($_GET['task'])): ?>
                                    <?php if ($itemJoinCg) { ?>  <div class="for_task_print_wrapper">
                                        <?php foreach ($itemJoinCg as $itemsJoinCg) {
                                           if ($itemsJoinCg['parent_cg'] == 0) { ?>
                                              <div style="width: 100%; height: 1px;"></div>
                                              <div class="cg_MAIN_print"><?php echo $itemsJoinCg['text']; ?></div>      
                                      <?php } else { ?>
                                              <div class="cg_small_WRAPPER_DIV">
                                                  <div class="cg_smallITEM"><?php echo $itemsJoinCg['text']; ?></div>
                                              </div>
                                      <?php } } ?> </div> <?php } ?>
                            <?php endif; ?>
                            <div class="item_UNDER_info">
                                <div class="item_inder_comments">
                                    <div class="button_under_beaty like_btn_i_Sec" style="margin-bottom: 3px;">
                                        <?php  if ($_SESSION['id'] && $_SESSION['auth']) { 
              $stmtForumMain->execute([':user_id' => $_SESSION['id'], ':post_id' => $itemsSection['id'], ':its' => $mainLikesIts ]);
              $itemForumMain = $stmtForumMain->fetchAll(PDO::FETCH_ASSOC);

                                         if ($itemForumMain) { ?>
                                             <i class="material-icons material-icons_favorite">favorite</i>
                                    <?php }  else { echo "<i class='material-icons'>favorite</i>"; }} 
                                    else { echo "<i class='material-icons'>favorite</i>"; } ?> 
                                    </div>
                                    <span class="section_how_likes section_how_likesInner"><?php echo $itemsSection['count_likes']; ?></span>
                                </div>
                                <input type="hidden" class="numberSecPost1" value="<?php echo $itemsSection['id']; ?>">
                                <div class="itemContent_countSt">
                                    <i class="material-icons">forum</i>Обсуждения: <span><?php echo $itemDiscassC; ?></span>
                                </div>
                                <div id="info_inder_rewius_LI">Просмотров:<span><?php echo $itemsSection['count_views']; ?></span></div>
                            </div>
                        </div>
                    </li>                 
                <?php } ?>
                </ul> 
                <?php if ($blogI > 1) { ?>
                      <link rel="stylesheet" type="text/css" href="static/main/nav_posts.css">
                      <div class="nav_posts_wrapper" style="margin-top: 10px;">
                      <?php if ($pageStr > 1) { ?>
                        <a href="section_<?php echo $nameSection; ?>-<?php echo $getURLid; ?>" class="nav_posts_word"><i class="material-icons">keyboard_backspace</i><span>В начало</span></a>
                      <?php } if ($pageStr > 1) {
                                  if ($pageStr == $blogI) {
                                    $iBlogStart = $blogI - 1;
                                    $iBlogEnd = $blogI;
                                  } else if ($pageStr == 1 || empty($pageStr)) {
                                    $iBlogStart = 1;
                                    $iBlogEnd = 2;
                                  } else {
                                    $iBlogStart = $pageStr - 1;
                                    $iBlogEnd = $pageStr + 1;
                                  }
                      } else {
                        $iBlogStart = 1;
                            if ($blogI >= 3) {
                              $iBlogEnd = 3;
                            } else {
                              $iBlogEnd = $blogI;
                            }
                      }
                      for ($iBlog = $iBlogStart; $iBlog <= $iBlogEnd; $iBlog++) { ?>
                          <a href="section_<?php echo $nameSection; ?>-<?php echo $getURLid; ?>-page<?php echo $iBlog; ?>"class="nav_posts_btn" 
                            id="<?php if ($iBlog == $pageStr || (empty($pageStr) &&  $iBlog == 1)) { echo 'nav_posts_word_check'; } ?>"><?php echo $iBlog; ?></a>
                      <?php } if ($blogI > $pageStr && $blogI > 1) { ?>
                      <a href="section_<?php echo $nameSection; ?>-<?php echo $getURLid; ?>-page<?php echo $blogI; ?>" class="nav_posts_word_end">
                        <span>В конец</span><i class="material-icons">keyboard_backspace</i>
                      </a>
                    <?php } echo "</div>"; } ?> 
                <?php  } else { ?>
                    <div class="notFound_pickImg">
                        <img src="static/img/notFound.png">
                    </div>
                <?php  } ?>       
            </div>
        </div>
        <div id="startup_wrapper_right">
            <?php include "startupRight.php"; ?>
        </div>
    </div>

    <script src="static/startup/functionStartup.js"></script>
    <?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {} else { ?>
        <script src='static/section/sectionLikePost.js'></script>   <?php  } ?>
<?php include "footer.php"; ?>
<?php } } ?>
