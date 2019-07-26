<?php include "header.php"; ?>
<?php
$getURLid = $_GET['id']; 

error_reporting(0);

if ($getURLid == 0 ) {
  echo '<script type="text/javascript">location="index.php"</script>';
} else {
$sqlGet = "SELECT id ,name, lastname, email, url_avatar, formStart, online FROM users WHERE id = :id";
$stmtObj = $pdo->prepare($sqlGet);
$stmtObj->execute([':id' => $getURLid]);
$item = $stmtObj->fetchAll(PDO::FETCH_ASSOC); 
$itemTake = $item[0]; 
if ($itemTake['url_avatar']) {
  $UrlImg = "avatarsUsers/".$itemTake['url_avatar'];
} else {
    $UrlImg = "avatarsUsers/itsMe.jpg";
}
if ( $_SESSION['id'] && $_SESSION['email'] ) {
    $trueUser = 'yes';
    if ($_SESSION['id'] == $getURLid && $_SESSION['email'] == $itemTake['email']) {
        $wratUser = 'me';
    } else {
        $wratUser = 'notMe';
    }
} else {
    $trueUser = 'no';
}


if ($item && $itemTake['formStart'] == 1) { ?>

    <?php  

    $sqlStaticInfo = "SELECT status, city, birthday FROM users_static_info WHERE id = :id";
    $stmtStaticInfo = $pdo->prepare($sqlStaticInfo);
    $stmtStaticInfo->execute([':id' => $getURLid]);
    $itemStaticInfo = $stmtStaticInfo->fetchAll(PDO::FETCH_ASSOC); 
    $itemsStaticInfo = $itemStaticInfo[0];

    $sqlLangs = "SELECT lang FROM users_lang WHERE id = :id";
    $stmtLangs = $pdo->prepare($sqlLangs);
    $stmtLangs->execute([':id' => $getURLid]);
    $itemLangs = $stmtLangs->fetchAll(PDO::FETCH_ASSOC); 

    $sqlTexts = "SELECT callback,about_cg FROM users_text WHERE id = :id";
    $stmtTexts = $pdo->prepare($sqlTexts);
    $stmtTexts->execute([':id' => $getURLid]);
    $itemTexts = $stmtTexts->fetchAll(PDO::FETCH_ASSOC);
    $itemsTexts = $itemTexts[0]; 

    $sqlNetwork = "SELECT network,url FROM users_network WHERE id = :id";
    $stmtNetwork = $pdo->prepare($sqlNetwork);
    $stmtNetwork->execute([':id' => $getURLid]);
    $itemNetwork = $stmtNetwork->fetchAll(PDO::FETCH_ASSOC); 

    $sqlCall = "SELECT name,contact FROM users_call WHERE id = :id";
    $stmtCall = $pdo->prepare($sqlCall);
    $stmtCall->execute([':id' => $getURLid]);
    $itemCall = $stmtCall->fetchAll(PDO::FETCH_ASSOC); 

    $sqlBlogCount = "SELECT id FROM userBlog WHERE parent_id=:parent_id";
    $stmtBlogCount = $pdo->prepare($sqlBlogCount);
    $stmtBlogCount->execute([':parent_id' => $getURLid]);
    $itemBlogCount = $stmtBlogCount->fetchAll(PDO::FETCH_ASSOC); 
    $itemBlogCount = count($itemBlogCount);
    if ($itemBlogCount / 20 <= 1) {
      $blogI = 1;
    } else {
      $blogI = $itemBlogCount / 20;
      if ((int)$blogI != $blogI) {
        $blogI = (int)$blogI + 1;
      }
    }
    $pageStr = $_GET['page'];
    if ($pageStr > 1) {
      $itemBlogCountSql = 20 * ($pageStr - 1);
    } else {
      $itemBlogCountSql = 0;
    }
    if ((20 * ($pageStr - 1)) > $itemBlogCount || $pageStr == "0") { ?>
      <script type="text/javascript">location="user-<?php echo $getURLid; ?>-page1"</script>
    <?php }
    $sqlBlog = "SELECT id,main_date,`text`,yourLike,Howlikes FROM userBlog 
                WHERE parent_id = :parent_id ORDER BY id DESC LIMIT $itemBlogCountSql,20";
    $stmtBlog = $pdo->prepare($sqlBlog);
    $stmtBlog->execute([':parent_id' => $getURLid]);
    $itemBlog = $stmtBlog->fetchAll(PDO::FETCH_ASSOC); 

    $sqlJoinCg = "SELECT parent_cg,cg,`text` FROM users_want_cg
                  INNER JOIN want_cg ON users_want_cg.cg=want_cg.id 
                  WHERE users_want_cg.id=:id";
    $stmtJoinCg = $pdo->prepare($sqlJoinCg);
    $stmtJoinCg->execute([':id' => $getURLid]);
    $itemJoinCg = $stmtJoinCg->fetchAll(PDO::FETCH_ASSOC);

    include_once "phpScripts/formatDate.php";
    include_once "phpScripts/online.php";

    $online_user = str_online($itemTake['online']);



    $sqlSlVer = "SELECT user_id FROM startup_verify_users WHERE user_id=:user_id AND verify=:verify";
    $stmtSlVer = $pdo->prepare($sqlSlVer); 

    $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 3 ]);
    $itemSlVer3 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC); 
    $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 2 ]);
    $itemSlVer2 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC); 
    $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 0 ]);
    $itemSlVer0 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC);


if ($itemTake['url_avatar']) { 
    $avatarUSRC = "avatarsUsers/".$itemTake['url_avatar'];
} else {
    $avatarUSRC = "avatarsUsers/itsMe.jpg";
} 



include_once('phpScripts/functionsAvatar.php');
if(isset($_FILES['file'])) {
     $check = can_upload($_FILES['file'],"user", $getURLid);   
  if($check === true){

    $sqlCheckA = "SELECT id,url_avatar FROM users WHERE id=:id";
    $stmtCheckA = $pdo->prepare($sqlCheckA);
    $stmtCheckA->execute([':id' => $_SESSION['id'] ]);
    $itemCheckA = $stmtCheckA->fetchAll(PDO::FETCH_ASSOC); 
    $itemsCheckA = $itemCheckA[0];
      if ( iconv_strlen($itemsCheckA['url_avatar']) > 6) {
        $sqlCkechAvatar = "UPDATE users SET  url_avatar=:url_avatar WHERE id=:id";
        $stmtCkechAvatar = $pdo->prepare($sqlCkechAvatar);
        $stmtCkechAvatar->execute([ ':url_avatar' => null ,':id' => $_SESSION['id'] ]);

        unlink("avatarsUsers/".$itemsCheckA['url_avatar']);
      } else {}

    

    $AvatarName = make_upload($_FILES['file'],"user", $getURLid);


    $sqlUrlUp = "UPDATE users SET url_avatar=:url_avatar WHERE id=:id";
    $stmtUrlUp = $pdo->prepare($sqlUrlUp);
    $itemstmtUrlUp = $stmtUrlUp->execute([ ':url_avatar' => $AvatarName, ':id' => $_SESSION['id'] ]);
    if ($itemstmtUrlUp) {
      $avatarUSRC = "avatarsUsers/".$AvatarName;
    }
  } else{
   // выводим сообщение об ошибкео
  }
}
                
?>

<?php if (!empty($_GET['page'])) { ?>
  <script type="text/javascript" src="static/profile/scrollPosts.js"></script>
<?php } ?>

    <title><?php echo $itemTake['name'] . " " .$itemTake['lastname']; ?></title>
    <link rel="stylesheet" type="text/css" href="static/profile/profile.css">
<div class="wrap_with_Fo">
    <div id="profile_main_wrapper">
        <div id="profile_left_side">
            <div id="navbar_startups_forum">
                <div id="navbar_startups_wrap_items">
                    <a href="" id="startups_main_UNDERNAME"><h1 class="item_h1_main"><?php echo $itemTake['name'] . " " .$itemTake['lastname']; ?></h1></a>
                </div>
                <div class="selectAll"><?php echo $online_user; ?></div>
            </div>
            <div class="profile_left_info_wrap">
               <div class="profile_i_want_wrap">
                  <div class="for_task_print_wrapper">
                      <div class="cg_MAIN_print">Статус</div>
                      <i class="material-icons tranform_icon_profile">keyboard_backspace</i>
                      <div class="cg_small_WRAPPER_DIV">
                          <div class="cg_smallITEM"><?php echo $itemsStaticInfo['status']; ?></div>
                      </div>
                  </div>
               </div>
                <div class="profile_i_want_wrap">
                    <div class="setting_groupWrap"><h2>Желаeмые сферы деятельности:</h2></div>
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

                        <?php if ($itemsTexts['about_cg']) { ?>
                        <div class="profile_left_info_comment_word">Комментарий к сферам деятельности:</div>    
                        <div class="txtCommentUser txtControl"><?php echo $itemsTexts['about_cg']; ?></div>
                        <?php } else {} ?>
                </div>
                <div class="profile_left_startaps_wrap">
                    <div class="setting_groupWrap" style="margin-top: 20px;"><h2>Стартапы:</h2><a href="content-startups-<?php echo $getURLid; ?>" class="toStarupHref">Смотреть</a></div>
                    <div class="profile_left_startaps_table">
                        <a href="content-startups-<?php echo $getURLid; ?>" class="profile_left_startaps_item">
                            <h3>Интересные:</h3>
                            <div><?php echo count($itemSlVer0); ?></div>
                        </a>
                        <a href="content-startups-<?php echo $getURLid; ?>" class="profile_left_startaps_item">
                            <h3>Участик:</h3>
                            <div><?php echo count($itemSlVer2); ?></div>
                        </a>
                        <a href="content-startups-<?php echo $getURLid; ?>" class="profile_left_startaps_item">
                            <h3>Инициатор:</h3>
                            <div><?php echo count($itemSlVer3); ?></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="profile_left_info_wrap">
                <div class="profile_under_default_info">
                    <div class="profile_default_infoS_wrap">
                        <div class="setting_groupWrap" style="margin-top: 0; margin-bottom: 10px;"><h2>Фактическая информация:</h2></div>
                        <div class="profile_default_infoS_static">Дата рождения:</div>
                        <ul class="profile_default_infoS_dinamic_wrapper">
                            <li class="profile_default_infoS_dinamic_item"><?php echo $itemsStaticInfo['birthday']; ?></li>
                        </ul>
                        <hr class="fancy-line">
                        <div class="profile_default_infoS_static">Город:</div>
                        <ul class="profile_default_infoS_dinamic_wrapper">
                            <li class="profile_default_infoS_dinamic_item"><?php echo $itemsStaticInfo['city']; ?></li>
                        </ul>
                        <hr class="fancy-line">
                        <div class="profile_default_infoS_static">Языки:</div>
                        <ul class="profile_default_infoS_dinamic_wrapper">
                            <?php foreach ($itemLangs as $itemsLangs) {
                              echo "<li class='profile_default_infoS_dinamic_item'>";
                              echo $itemsLangs['lang'];
                              echo "</li>";
                            } ?>
                        </ul>
                        <hr class="fancy-line">
                    </div>
                    <?php if ($itemCall) { ?>
                    <div class="profile_default_infoS_wrap">
                        <div class="setting_groupWrap" style="margin-top: 0; margin-bottom: 10px;"><h2>Средства связи:</h2></div>
                        <?php foreach ($itemCall as $itemsCall): ?>
                        <div class="profile_default_infoS_static"><?php echo  $itemsCall['name']; ?></div>
                        <ul class="profile_default_infoS_dinamic_wrapper">
                            <li class="profile_default_infoS_dinamic_item"><?php echo $itemsCall['contact']; ?></li>
                        </ul>
                        <hr class="fancy-line">
                        <?php endforeach; ?>
                    </div>
                    <?php } else {} ?>
                </div>
                <div class="profile_left_info_items_full">
                    <div class="setting_groupWrap"><h2>C какими предложениями обращаться:</h2></div>
                    <div class="profile_left_info_comment txtControl"><?php echo $itemsTexts['callback']; ?></div>
                </div>
                <?php if ($itemNetwork) { ?>
                  <div class="profile_left_info_items_full">
                  <div class="setting_groupWrap" style="margin-top: 10px;"><h2>Ссылки на социальные сети:</h2></div>
                  <ul class="profile_networks_list">
                <?php  foreach ($itemNetwork as $itemsNetwork) { ?>
                    <li>
                        <i class="material-icons">reply</i>
                        <a class="namesHidden" href="<?php echo $itemsNetwork['url'];?>"><?php echo $itemsNetwork['network']; ?></a>
                    </li>
                <?php } ?>       
                    </ul>
                </div>
                <?php  } else {} ?>
            </div>
            <div class="profile_left_header_info">Портфолио</div>
        </div>
        <div id="profile_right_side">
            <div id="profile_right_img_wrap">
                <div id="functions_user_wrap">
                    <div class="setting_groupWrap" style="margin-left: 0; margin-right: 0; margin-bottom: 10px; margin-top: 0;"><h3>Функции:</h3></div>
                    <?php if ($trueUser == 'yes') {
                     if ($wratUser == 'me') { ?>
                      <a href="edit-<?php echo $_SESSION['id']; ?>" class="startup_functions_wrapper startup_functionsCALL">
                         <i class="material-icons">settings</i>
                         <span>Редактировать</span>
                     </a>
                      <form method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="file" style="display: none;">
                        <label for="file" class="startup_functions_wrapper startup_functionsCALL" id="btnAddImg">
                            <i class="material-icons">photo_camera</i>
                            <span><?php if ($itemTake['url_avatar']) { echo "Обновить фото"; } else { echo "Добавить фото"; }  ?></span>
                        </label>
                        <input type="submit" name="submit" id="submit_img" style="display: none;" value="Сохранить">
                        <span id="needTosave" style="display: none;">Необходимо сохранить</span>
                      </form>
                      <?php if ($itemTake['url_avatar']) { ?>
                          <div class="startup_functions_wrapper startup_functionsCALL" id="deleteMy_avatar">
                             <i class="material-icons">delete_outline</i>
                             <span>Удалить фото</span>
                         </div>
                         <script type="text/javascript" src="static/profile/deleteAvatar.js"></script>
                      <?php } else {} ?>
                      <script type="text/javascript" src="static/profile/prewiewAvatar.js"></script>
                    <?php } else { ?>  
                    <div class="startup_functions_wrapper" id="btn_message_popup">
                         <i class="material-icons">mail_outline</i>
                         <span>Написать</span>
                     </div>
                    <?php 
                      $sqlSaving = "SELECT id FROM users_save WHERE this_user=:this_user AND saving_user=:saving_user";
                      $stmtSaving = $pdo->prepare($sqlSaving);
                      $stmtSaving->execute([ ':this_user' => $_SESSION['id'], ':saving_user' => $getURLid]);
                      $itemSaving = $stmtSaving->fetchAll(PDO::FETCH_ASSOC); 
                      if ($itemSaving) {
                    ?>
                    <div class="startup_functions_wrapper" id="startup_insertMe">
                        <i class="material-icons startup_functions_wrapperColor startup_functions_wrapperColorColor">done</i>
                        <span>Сохранено</span>
                        <button id="startup_delete_Saving" class="startup_btn_del_any" style="display: flex;">
                            <i class="material-icons">delete_outline</i>
                        </button>
                        <script src="static/profile/profileSaving.js"></script>
                    </div>
                    <?php } else { ?>
                      <div class="startup_functions_wrapper" id="startup_insertMe">
                          <i class="material-icons startup_functions_wrapperColor">done</i>
                          <span>Сохранить</span>
                          <button id="startup_delete_Saving" class="startup_btn_del_any" style="display: none;">
                              <i class="material-icons">delete_outline</i>
                          </button>
                      </div>
                      <script src="static/profile/profileSaving.js"></script>
                    <?php } } } else { ?>
                    <div class="goLoginBlock" style="width: 180px;">Для использования <b>функционала</b> данного ресурса необходимо представиться<a href="signin" class="goLoginBTN">Авторизоваться</a><a href="signin"><center><img style="padding-top: 10px;" src="static/img/goLogin.png"></center></a></div>
                    <?php } ?>
                </div>
                    <img id="userImgId" src="<?php echo $avatarUSRC; ?>">
            </div>
            <div class="profile_left_header_info" id="flag_for_scroll">Блокнот</div>
            <div id="profile_right_blog_wrap">
                <div id="profile_right_blog_main">
                    <?php if ($trueUser == 'yes' && $wratUser == 'me' && $_SESSION['auth'] == true ) { ?>
                    <?php include "static/main/execCommand.html"; ?>
                    <link rel="stylesheet" type="text/css" href="static/main/execText.css">
                    <div id="textarea_blog" class="execMain" contenteditable='true'></div>
                    <div id="message_textarea_BIG_send_wrapper">
                        <button id="Message_btnSend">Отправить</button>
                    </div>
                    <script type="text/javascript" src="static/profile/profileBlog.js"></script>
                    <hr class="fancy-line">
                    <?php } else {} ?>
                    <?php if ($itemBlog) { ?>
                    <div id="blog_chetchik">Записей:<span><?php echo $itemBlogCount; ?></span></div>
                  <?php } else {} ?>
                    <div id="blog_item_wrapper">
                        <ul id="append_chind_ul_creater"></ul>
                        <ul id="append_chind_ul">
                          <?php if ($itemBlog) { ?>
                            <script type="text/javascript" src="static/profile/profileTxt.js"></script>
                            <?php foreach ($itemBlog as $itemsBlog) { 
                            $dateDate = formatDate($itemsBlog['main_date']);   ?>
                            <li class="item_blog_li">
                                <div class="item_blog_wrap_up">
                                    <div class='item_blog_wrap_info'>
                                        <div class="item_blog_wrap_foto">
                                            <div class="item_blog_foto"></div>
                                            <style type="text/css">
                                              .item_blog_foto {
                                                  background-image:   url(<?php echo $UrlImg ?>);
                                              }
                                            </style>
                                        </div>
                                        <div class="item_blog_info_wrapper">
                                            <div><a class="item_a_main" href="user-<?php echo $getURLid; ?>"><?php echo $itemTake['name'] . " " .$itemTake['lastname']; ?></a></div>
                                            <div class='itemNumber' style='display: none'><?php echo $itemsBlog['id']; ?></div>
                                            <div class='item_blog_date_public'><?php echo $dateDate; ?></div>
                                        </div>
                                    </div>
                                    <?php if ($getURLid == $_SESSION['id']) { ?>
                                    <div class="item_blog_do_item">
                                        <button class="forum_Com_right_btn_del">
                                            <i class="material-icons">close</i>
                                            <div class="forum_com_del_popup_wrap forum_Main_del_popup_wrapComment">
                                                <div class="forum_com_del_popup_arrow"></div>
                                                <div class="forum_com_del_popup_text">
                                                    Вы действительно хотите удалить запись? Отменить действие будет <b>невозможно</b>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <script type="text/javascript" src="static/profile/userDeletePostBlog.js"></script>
                                    <?php } else {} ?>
                                </div>
                                <div class="item_blog_wrap_text txtControl execMain"><?php echo $itemsBlog['text']; ?></div>
                                <div class="forum_Com_right_TEXT_FULL" style="display: none;">Показать полностью...</div>
                                <div class="item_blog_under_wrap">
                                    <div class="item_blog_likes_wrap">
                                      <?php if  ($trueUser == 'yes' && $_SESSION['auth'] == true) {

                                        $sqlNotMe = "SELECT numBlog FROM userLikesAnother WHERE id = :id AND numBlog = :numBlog";
                                        $stmtNotMe = $pdo->prepare($sqlNotMe);
                                        $stmtNotMe->execute([':id' => $_SESSION['id'], 'numBlog' => $itemsBlog['id']]);
                                        $itemNotMe = $stmtNotMe->fetchAll(PDO::FETCH_ASSOC);
                                        if ($itemNotMe) {
                                          $LikeColor = " ". "material-icons_favorite";
                                        } else {
                                            $LikeColor = "";
                                        }
                                      ?>
                                        <script type="text/javascript" src="static/profile/likePost.js"></script>
                                        <button class="item_blog_btn_likes">
                                              <i class="material-icons <?php echo $LikeColor; ?>">favorite</i>
                                        </button>
                                        <?php } else { ?>
                                          <button class="item_blog_btn_likes">
                                              <i class="material-icons">favorite</i>
                                          </button>
                                        <?php } ?>
                                        <span><?php echo $itemsBlog['Howlikes']; ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php } }?>
                        </ul>
                    </div>
                    <?php if (!$itemBlog) {  ?>
                    <div class="notFound_pickImg">
                        <img src="static/img/notFound.png">
                    </div>
                    <div id="blog_chetchik"><span></span></div>
                    <?php } ?>
                    <?php if ($blogI > 1) { ?>
                      <link rel="stylesheet" type="text/css" href="static/main/nav_posts.css">
                      <div class="nav_posts_wrapper" style="margin-top: 5px;">
                      <?php if ($pageStr > 1) { ?>
                        <a href="user-<?php echo $getURLid; ?>-page1" class="nav_posts_word"><i class="material-icons">keyboard_backspace</i><span>В начало</span></a>
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
                        <a href="user-<?php echo $getURLid; ?>-page<?php echo $iBlog; ?>"class="nav_posts_btn" 
                          id="<?php if ($iBlog == $pageStr || (empty($pageStr) &&  $iBlog == 1)) { echo 'nav_posts_word_check'; } ?>"><?php echo $iBlog; ?></a>
                    <?php } if ($blogI > $pageStr && $blogI > 1) { ?>
                    <a href="user-<?php echo $getURLid; ?>-page<?php echo $blogI; ?>" class="nav_posts_word_end">
                      <span>В конец</span><i class="material-icons">keyboard_backspace</i>
                    </a>
                    <?php } echo "</div>"; } ?>
                </div>
            </div>
        </div>
    </div>
<?php if ($wratUser == 'notMe') {
        include "static/profile/popupMessage.php";
          }  ?>

<?php include "footer.php"; ?>
<?php } else { ?>
    <style type="text/css">       
      .not_foundSandU {
        width: 300px;
        position: relative;
        top: 70px;
        margin: 0 auto;
      }
      .not_foundSandU img {
        width: 300px;
        display: block;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
      }
    </style>
    <div class="not_foundSandU">
        <img src="static/img/notFound.png">
    </div>
    </body>
    </html>
<?php } } ?>







