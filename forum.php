<?php include "header.php"; ?>

<?php 

if (count($_GET) > 4) {
  echo '<script type="text/javascript">location="index.php"</script>';
}
if (empty($_GET['task']) && empty($_GET['idea']) && empty($_GET['docs'])) {
  echo '<script type="text/javascript">location="index.php"</script>';
} else {
    if (empty($_GET['task']) && empty($_GET['idea'])) {
      $getURLidNoMain = $_GET['docs'];
      $nameSection = "docs";
      $nameSectionFull = "Документы";
      $AboutThisSection = "Раздел <strong>\"Документы\"</strong> позволяет оставлять нужные вам файлы в общий доступ. К сожалению, пока что только ссылкой"; 
      $mainLikesIts = 2;
      $Sql_word = "forumComments";

      $sqlForum1 = "SELECT * FROM startup_forums_docs WHERE id=:id"; 
      $sqlUpdateViewsForum = "UPDATE startup_forums_docs SET  count_views=count_views+1 WHERE id=:id";
    } elseif (empty($_GET['task']) && empty($_GET['docs'])) {
      $getURLidNoMain = $_GET['idea'];
      $nameSection = "idea";
      $nameSectionFull = "Идеи и предложения";
      $mainLikesIts = 1;
      $Sql_word = "forumComIdea";

      $sqlForum1 = "SELECT *  FROM startup_forums_idea WHERE id=:id"; 
      $sqlUpdateViewsForum = "UPDATE startup_forums_idea SET  count_views=count_views+1 WHERE id=:id";
    } elseif (empty($_GET['idea']) && empty($_GET['docs'])) {
      $getURLidNoMain = $_GET['task'];
      $nameSection = "task";
      $nameSectionFull = "Задачник";
      $mainLikesIts = 3;
      $Sql_word = "forumComTask";

      $sqlForum1 = "SELECT *  FROM startup_forums_task WHERE id=:id"; 
      $sqlUpdateViewsForum = "UPDATE startup_forums_task SET  count_views=count_views+1 WHERE id=:id";
    } else {
      echo '<script type="text/javascript">location="index.php"</script>';
    } 

    $stmtForum1 = $pdo->prepare($sqlForum1);
    $stmtForum1->execute([':id' => $getURLidNoMain]);
    $itemForum1 = $stmtForum1->fetchAll(PDO::FETCH_ASSOC); 
    if (!$itemForum1) {
        echo '<script type="text/javascript">location="index.php"</script>';
    } else { $itemsForum1 = $itemForum1[0];
    $getURLid = $itemsForum1['parent_id'];
 

    $sqlStartup = "SELECT id ,date_born, name, status, type, area, people, views,avatar_src FROM startups WHERE id = :id";
    $stmtStartup = $pdo->prepare($sqlStartup);
    $stmtStartup->execute([':id' => $getURLid]);
    $itemStartup = $stmtStartup->fetchAll(PDO::FETCH_ASSOC); 
    if (!$itemStartup) {
        echo '<script type="text/javascript">location="index.php"</script>';
    } else { $itemsStartup = $itemStartup[0]; 

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


$stmtUpdateViewsForum = $pdo->prepare($sqlUpdateViewsForum);
$stmtUpdateViewsForum->execute([':id' => $getURLidNoMain]);

$sqlCommentCount = "SELECT parent_id FROM $Sql_word WHERE parent_id=:parent_id";
$stmtCommentCount = $pdo->prepare($sqlCommentCount);
$stmtCommentCount->execute([':parent_id' => $getURLidNoMain]);
$itemCommentCount = $stmtCommentCount->fetchAll(PDO::FETCH_ASSOC);
$com_count = count($itemCommentCount);

    if ($com_count / 10 <= 1) {
      $blogI = 1;
    } else {
      $blogI = $com_count / 10;
      if ((int)$blogI != $blogI) {
        $blogI = (int)$blogI + 1;
      }
    }
    $pageStr = $_GET['page'];
    if ($pageStr > 1) {
      $itemCountSql = 10 * ($pageStr - 1);
    } else {
      $itemCountSql = 0;
    }
    if ((10 * ($pageStr - 1)) > $com_count || $pageStr == "0") {
      $tempforumid = $itemsForum1['id']; ?>
      <script type="text/javascript">location="forum_<?php echo $nameSection; ?>_<?php echo $tempforumid; ?>-<?php echo $getURLid; ?>-page1"</script>
<?php    }


$sqlComment = "SELECT * FROM $Sql_word WHERE parent_id=:parent_id ORDER BY id DESC LIMIT $itemCountSql,10";
$stmtComment = $pdo->prepare($sqlComment);
$stmtComment->execute([':parent_id' => $getURLidNoMain]);
$itemComment = $stmtComment->fetchAll(PDO::FETCH_ASSOC);

$thisuserTASK = "";

if ($_SESSION['id'] && $_SESSION['auth']) { 
    $sqlForumMain = "SELECT user_id FROM forumMainLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
    $stmtForumMain = $pdo->prepare($sqlForumMain);
    $stmtForumMain->execute([':user_id' => $_SESSION['id'], ':post_id' => $getURLidNoMain, ':its' => $mainLikesIts ]);
    $itemForumMain = $stmtForumMain->fetchAll(PDO::FETCH_ASSOC); 


    $sqlComLike = "SELECT user_id FROM forumComLikes WHERE user_id=:user_id AND post_id=:post_id AND its=:its";
    $stmtComLike = $pdo->prepare($sqlComLike);
}


$deleteCan = null;
?>


<?php if (!empty($_GET['page'])) { ?>
  <script type="text/javascript" src="static/forum/pageScroll.js"></script>
<?php } ?>

<?php include "static/startup/popupFunctions.php"; ?>
<title>Форум -<?php echo " ". $nameSectionFull; ?></title>
<link rel="stylesheet" type="text/css" href="static/forum/forum.css">
<link rel="stylesheet" type="text/css" href="static/main/execText.css">
<div class="wrap_with_Fo">
    <div id="startup_wrapper_2divs">
        <div id="startup_wrapper_left">
       <div id="navbar_startups_forum">
              <div id="navbar_startups_wrap_items">
                  <a href="startup-<?php echo $getURLid; ?>" id="startups_main_NAME"><?php echo $itemsStartup['name']; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="section_<?php echo $nameSection;?>-<?php echo $getURLid; ?>" id="startups_main_UNDERNAME"><?php echo $nameSectionFull; ?></a>
                  <i class="material-icons">chevron_right</i>
                  <a href="" id="startups_main_UNDERNAMENum">№ <?php echo " ".$itemsForum1['id']; ?></a>
              </div>
            </div>
            <div class="startup_wrap_padding">
                <div class="forums_about_this_wrap">
                    <h1><?php echo $itemsForum1['tittle']; ?></h1>
                </div>
                <?php if(!empty($_GET['task'])) { 
 
                      $sqlUserUser = "SELECT id ,name, lastname FROM users WHERE id=:id";
                      $stmtUserUser = $pdo->prepare($sqlUserUser); 

                      if (empty($itemsForum1['deleter'])) {

                        if (!empty($itemsForum1['who_id'])) {
                            $stmtUserUser->execute([':id' => $itemsForum1['who_id'] ]);
                            $itemUserUser = $stmtUserUser->fetchAll(PDO::FETCH_ASSOC); 
                            $itemsUserUser = $itemUserUser[0];
                        }

                        if ($itemsForum1['status'] == 0) { 
                          $statusTask = "Активная задача"; $statusTask2 = ""; $statusColor = "aboutDoingTaskUP1"; 
                          $who_idHref = ""; $who_idNameFull = ""; $thisuserTASK = ""; } 
                        elseif ($itemsForum1['status'] == 1) {
                          $statusTask = "Выполняется"; $statusTask2 = ""; $statusColor = "aboutDoingTaskUP2";  
                          $who_idHref = $itemsUserUser['id']; $who_idNameFull = $itemsUserUser['name']." ".$itemsUserUser['lastname']; $thisuserTASK = "Взялся на задачу:"; } 
                        elseif ($itemsForum1['status'] == 2) {
                          $statusTask = "Выполнена"; $statusTask2 = ""; $statusColor = "aboutDoingTaskUP3";  
                          $who_idHref = $itemsUserUser['id']; $who_idNameFull = $itemsUserUser['name']." ".$itemsUserUser['lastname']; $thisuserTASK = "Взялся на задачу:"; } 

                      } else {
 
                          $stmtUserUser->execute([':id' => $itemsForum1['who_id'] ]);
                          $itemUserUser = $stmtUserUser->fetchAll(PDO::FETCH_ASSOC); 
                          $itemsUserUser = $itemUserUser[0];

                          $statusTask = "Прервана - участник удален"; $statusColor = "aboutDoingTaskUP4"; 
                          $who_idHref = $itemsUserUser['id']; $who_idNameFull = $itemsUserUser['name']." ".$itemsUserUser['lastname']; $thisuserTASK = "Взялся на задачу:";
                      }
                      ?>
                    <div class="forumOrvet_wrap">
                        <div class="item_forumForCgWord" style="margin-left: 10px;">Статус задачи:</div>
                        <div class="forumOrvet"><?php echo $thisuserTASK ?></div>
                    </div>
                    <div class="aboutDoingTaskUP <?php echo " ".$statusColor; ?>">
                        <div><?php echo $statusTask; ?></div>
                        <a class="item_a_main namesHidden" href="user-<?php echo $who_idHref; ?>"><?php echo $who_idNameFull; ?></a>
                    </div>
                <?php } ?>
                    <div class="item_forum_li">
                        <div class="from_user_Section_wrapper">
                               <?php 
                                  $sqlUserName1 = "SELECT id ,name, lastname, url_avatar FROM users WHERE id=:id";
                                  $stmtUserName1 = $pdo->prepare($sqlUserName1); 
                                  $stmtUserName1->execute([':id' => $itemsForum1['user_id'] ]);
                                  $itemUserName1 = $stmtUserName1->fetchAll(PDO::FETCH_ASSOC); 
                                  $itemsUserName1 = $itemUserName1[0];

                                  if ($itemsUserName1['url_avatar']) {
                                      $UrlImgUser = "avatarsUsers/".$itemsUserName1['url_avatar'];
                                    } else {
                                        $UrlImgUser = "avatarsUsers/itsMe.jpg";
                                    }
                                    include_once "phpScripts/formatDate.php";
                                    $dateDate = formatDate($itemsForum1['date']);
                                ?>
                            <div class="from_user_Section_foto"></div>
                            <style type="text/css">
                              .from_user_Section_foto {
                                background-image: url(<?php echo $UrlImgUser; ?>);
                              }
                            </style>
                            <div class="from_user_main_Section_info_wrap">
                                <a class="item_a_main namesHidden" href="user-<?php echo $itemsUserName1['id']; ?>"><?php echo $itemsUserName1['name']. " " .$itemsUserName1['lastname']; ?></a>
                                <div><?php echo $dateDate; ?></div>
                                <input type="hidden" name="" style="display: none;" id="commentLikesula" value="<?php echo $getURLid; ?>">
                            </div>
                            <?php if (($itemsUserName1['id'] == $_SESSION['id'])|| ($itemsverify['verify'] == 3)) { ?>
                            <div class="btn_delMainPost_wrapper">
                                <button class="forum_Com_right_btn_del" id="btnDeleteMainPost2">
                                  <i class="material-icons">close</i>
                                  <div class="forum_com_del_popup_wrap forum_Main_del_popup_wrapComment">
                                      <div class="forum_com_del_popup_arrow"></div>
                                      <div class="forum_com_del_popup_text">
                                        <?php if (empty($_GET['task'])) { ?>
                                          Вы действительно хотите удалить запись? Отменить действие будет <b>невозможно</b>
                                          <script type="text/javascript" src='static/forum/deleteMainPost.js'></script>
                                        <?php } else { ?>
                                          Совместная работа подразумевает отсутствие возможности <b>удаления</b> задач
                                        <?php } ?>
                                      </div>
                                  </div>
                              </button>
                            </div>
                           <?php } else {} ?>
                        </div>
                        <div class="wrapper_item_ml">
                          <?php if(!empty($_GET['task'])) { 

                                $sqlJoinCg = "SELECT parent_cg,cg,`text` FROM startup_task_cg
                                INNER JOIN want_cg ON startup_task_cg.cg=want_cg.id 
                                WHERE startup_task_cg.id=:id";
                                $stmtJoinCg = $pdo->prepare($sqlJoinCg); 

                                $stmtJoinCg->execute([':id' => $getURLidNoMain ]);
                                $itemJoinCg = $stmtJoinCg->fetchAll(PDO::FETCH_ASSOC);
                                ?>
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
                            <?php if ($itemsForum1['comment']) { ?>
                            <div class="item_forumForCg_wrapper">
                                <div class="item_forumForCgWord">Комментарий к сферам деятельности:</div>
                                <div class="item_forumForCgtxt txtControl"><?php echo $itemsForum1['comment']; ?></div>
                            </div>
                           <?php } ?>
                           <?php if ($itemsForum1['company'] == "По договоренности") { 
                                      $companyForum = " ".' ' . $itemsForum1['company'];
                                      $companyPersent = "";
                                  }  else { $companyForum = "<strong>".$itemsForum1['company']."</strong>";
                                            $companyPersent = "<span>%</span>"; } ?>
                            <div class="item_forum_dolya_wrapper">Предполагаемая доля компании:<?php echo $companyForum.$companyPersent; ?></div>
                            <?php } else{} ?>
                            <div class="forum_Com_right_TEXT forum_textMainBlock execMain"><?php echo $itemsForum1['text']; ?></div>
                            <div class="forum_Com_right_TEXT_FULL FULLCALSS" id="qwe">Показать полностью...</div>
                            <div class="item_UNDER_info">
                                <div class="item_inder_comments">
                                    <div class="button_under_beaty like_btn_i_Sec" style="margin-bottom: 3px;" id="btnLikeForumMain">
                                      <?php if ($_SESSION['id'] && $_SESSION['auth']) { 
                                       if ($itemForumMain) { $itemsForumMain = $itemForumMain[0];
                                             if  ($itemsForumMain['user_id'] == $_SESSION['id']) {  ?>
                                            <i class="material-icons material-icons_favorite">favorite</i>
                                        <?php }  else { echo "<i class='material-icons'>favorite</i>"; } } 
                                                    else { echo "<i class='material-icons'>favorite</i>"; } } else {echo "<i class='material-icons'>favorite</i>";} ?> 
                                    </div>
                                    <span class="section_how_likes" id="forum_howLikes_Main1"><?php echo $itemsForum1['count_likes']; ?></span>
                                </div>
                                <div class="itemContent_countSt" id="forum_scrolling_page">
                                    <i class="material-icons">remove_red_eye</i>Просмотров: <span><?php echo $itemsForum1['count_views'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div id="forum_how_ComTxt">Обсуждения<span><?php echo $com_count; ?></span></div>   
                <?php if (count($itemComment) > 4 && !empty($_SESSION['auth']) && $_SESSION['auth']) { ?>                
                <div class="forum_how_Com_wrap" id="item_forum_Com_rightBrd">
                    <div class="startup_functions_wrapper forum_commentPopup" style="margin-top: 0; width: 230px;">
                        <i class="material-icons">create</i>
                        <span>Написать комментарий</span>
                    </div>
                </div>
                <?php } else {} ?>
                <?php 
                $sqlUserFor = "SELECT id ,name, lastname, url_avatar FROM users WHERE id=:id";
                $stmtUserFor = $pdo->prepare($sqlUserFor);
                ?>
                <?php if($itemComment) { 
                 ?>
   
                <?php foreach ($itemComment as $itemsComment) {  
                    $stmtUserFor->execute([':id' => $itemsComment['user_id'] ]);
                    $itemUserFor = $stmtUserFor->fetchAll(PDO::FETCH_ASSOC);
                    $itemsUserFor = $itemUserFor[0];

                    if ($itemsUserFor['url_avatar']) {
                      $UrlImgUserFor = "avatarsUsers/". $itemsUserFor['url_avatar'];
                    } else {
                        $UrlImgUserFor = "avatarsUsers/itsMe.jpg";
                    }

                    if(!empty($_GET['idea'])) {
                      if ($itemsComment['iThink'] == 1) {
                        $ideaGetThink = "+1";
                        $ideaGetThinkColor = " "."forum_Com_iThinkTrue";
                      } elseif ($itemsComment['iThink'] == 2) {
                          $ideaGetThink = "0";
                          $ideaGetThinkColor = " "."forum_Com_iThinkPoxuy";
                      } elseif ($itemsComment['iThink'] == 3) {
                          $ideaGetThink = "-1";
                          $ideaGetThinkColor = " "."forum_Com_iThinkFalse";
                      }
                    } else {
                        $ideaGetThink = "";
                        $ideaGetThinkColor = "";
                    }
   
                ?>   
                <?php if (($itemsUserFor['id'] == $_SESSION['id'])|| ($itemsverify['verify'] == 3)) { 
                  $classDel = "classDel123"; } else {$classDel = "";} ?>
                <div class="item_forum_Com <?php echo " ".$classDel; ?>">
                    <div class="item_forum_Com_left">
                        <div class="forum_ComUserfoto forum_ComUUserImg<?php echo $itemsUserFor['id']; ?>" style="margin-left: 0;"></div>
                        <style type="text/css">
                              .forum_ComUUserImg<?php echo $itemsUserFor['id']; ?> {
                                background-image: url(<?php echo $UrlImgUserFor; ?>);
                              }
                        </style>
                        <?php if(!empty($_GET['idea'])) { ?>
                        <div class="forum_Com_iThink <?php echo $ideaGetThinkColor; ?>"><?php echo $ideaGetThink; ?></div>
                        <?php } ?>
                    </div>
                    <div class="item_forum_Com_right">
                        <div class="forum_Com_right_UP">
                            <a href="user-<?php echo $itemsUserFor['id']; ?>" class="item_a_main namesHidden"><?php echo $itemsUserFor['name']." ".$itemsUserFor['lastname']; ?></a>
                            <?php if (($itemsUserFor['id'] == $_SESSION['id'])|| ($itemsverify['verify'] == 3)) { 
                              $deleteCan = 1; ?>
                            <div class="btnFordelCom">
                                <i class="material-icons">close</i>
                                <div class="forum_com_del_popup_wrap forum_com_del_popup_wrapComment">
                                    <div class="forum_com_del_popup_arrow"></div>
                                    <div class="forum_com_del_popup_text">Вы действительно хотите удалить запись? Отменить действие будет <b>невозможно</b></div>
                                </div>
                            </div>
                            <?php } else {} ?>
                        </div>
                        <div class="forum_Com_right_TEXT forum_textMainBlock DLINACOM execMain"><?php echo $itemsComment['text']; ?></div>
                        <div class="forum_Com_right_TEXT_FULL" style="display: none;">Показать полностью...</div>
                        <div class="item_UNDER_info">
                            <div class="item_inder_comments">
                                <div class="button_under_beaty like_btn_i_Sec btn_doingLikes" style="margin-bottom: 3px;">
                                   <?php if ($_SESSION['id'] && $_SESSION['auth']) {
              $stmtComLike->execute([':user_id' => $_SESSION['id'], ':post_id' => $itemsComment['id'], ':its' => $mainLikesIts ]);
              $itemComLike = $stmtComLike->fetchAll(PDO::FETCH_ASSOC);

                                     if ($itemComLike) {  ?>
                                        <i class="material-icons material-icons_favorite">favorite</i>
                                    <?php }  else { echo "<i class='material-icons'>favorite</i>"; }} 
                                    else { echo "<i class='material-icons'>favorite</i>"; } ?> 
                                </div>
                                <span class="section_how_likes forumCom_how_likes"><?php echo $itemsComment['howLikes']; ?></span>
                            </div>
                            <input type="hidden" class="numberForumPost1" style="display: none;" value="<?php echo $itemsComment['id']; ?>">
                            <div class="info_inder_rewius_LI"><?php $dateDateSmall = formatDate($itemsComment['date']); echo $dateDateSmall; ?></div>
                            <?php if(!empty($_GET['task'])) {
                                     if ($itemsComment['iThink'] == 1) { ?>
                                  <div class="commentForumThink">Хочу попробовать!</div>
                                     <?php } elseif ($itemsComment['iThink'] == 2) {  ?>
                                   <div class="commentForumThink" style="color: #3498DB;">Я подумаю</div>   
                            <?php }  else{ echo "<div class='commentForumThink' style='display: none;'>Нейтрально</div>"; } } ?>
                        </div>
                    </div>
                </div> 
                <?php } ?>
                <script src="static/forum/forumCom.js"></script>
                <?php } else {  ?> 
                    <div class="notFound_pickImg">
                        <img src="static/img/notFound.png">
                    </div>
                <?php } ?>  
                <a href="forum_<?php echo $nameSection."_".$getURLidNoMain."-". $_GET['id']; ?>" class="newCommentJS" style="display: none;">
                  <span>Новые комментарии:</span><b></b>
                  <div>Посмотреть</div>
                </a>
                <?php if ($_SESSION['id'] && $_SESSION['auth']) { ?>
                <div class="forum_how_Com_wrap" style="margin-top: 10px;">
                    <div class="forum_underCom_callbackTxt">Вы можете оставить комментарий</div>
                    <div id="forum_underCom_callback" class="forum_commentPopup"><span>Оставить комментарий</span></div>
                </div>
                <?php } else { ?>
                <div class="goLoginComments" style="margin-top: 15px;">Чтобы оставить комментарий, необходимо представиться <a class="goLoginCommentsBtn" href="signin">авторизоваться</a><a href="signin"><img src="static/img/goLogin.png"></a></div>
                <?php } ?>
                <?php if ($blogI > 1) { ?>
                      <link rel="stylesheet" type="text/css" href="static/main/nav_posts.css">
                      <div class="nav_posts_wrapper" style="margin-top: 10px;">
                      <?php if ($pageStr > 1) { ?>
                        <a href="forum_<?php echo $nameSection; ?>_<?php echo $itemsForum1['id']; ?>-<?php echo $getURLid; ?>" class="nav_posts_word"><i class="material-icons">keyboard_backspace</i><span>В начало</span></a>
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
                          <a href="forum_<?php echo $nameSection; ?>_<?php echo $itemsForum1['id']; ?>-<?php echo $getURLid; ?>-page<?php echo $iBlog; ?>"class="nav_posts_btn" 
                            id="<?php if ($iBlog == $pageStr || (empty($pageStr) &&  $iBlog == 1)) { echo 'nav_posts_word_check'; } ?>"><?php echo $iBlog; ?></a>
                      <?php } if ($blogI > $pageStr && $blogI > 1) { ?>
                      <a href="forum_<?php echo $nameSection; ?>_<?php echo $itemsForum1['id']; ?>-<?php echo $getURLid; ?>-page<?php echo $blogI; ?>" class="nav_posts_word_end">
                        <span>В конец</span><i class="material-icons">keyboard_backspace</i>
                      </a>
                <?php } echo "</div>"; } ?> 
            </div>
        </div>
        <div id="startup_wrapper_right">
            <?php include "startupRight.php"; ?>
        </div>
    </div>

    <script src="static/startup/functionStartup.js"></script>
    <script src="static/forum/forum.js"></script>
    <?php if (!empty($_SESSION['auth']) || $_SESSION['auth'] == true) { ?> 
      <script src='static/forum/forumAuth.js'></script> 
      <script src='static/forum/forumComments.js'></script>
    <?php } ?>

    <?php if ($deleteCan > 0) { ?>
      <script type="text/javascript" src='static/forum/deleteComFodum.js'></script>
    <?php } else {} ?>

<?php include "footer.php"; ?>
<?php } } } ?>
