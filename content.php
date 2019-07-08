<?php include "header.php";  ?>
<?php if (count($_GET) > 1 || empty($_GET)) {
    echo '<script type="text/javascript">location="index.php"</script>';
}  else {
if ( empty($_GET['startups']) && empty($_GET['people']) ) {
    echo '<script type="text/javascript">location="index.php"</script>';
}  else {


if (!empty($_GET['startups'])) {
  $getURLid = $_GET['startups'];
  $borderLEFTSt = " "."startup_menu_ITEM_border";
  $borderLEFTPe = "";
  $namePage = "Стартапы";
}
if (!empty($_GET['people'])) {
  $getURLid = $_GET['people'];
  $borderLEFTSt = "";
  $borderLEFTPe = " "."startup_menu_ITEM_border";
  $namePage = "Люди";
}

    $sqlSelUser = "SELECT id,name,lastname,url_avatar FROM users WHERE id = :id";
    $stmtSelUser = $pdo->prepare($sqlSelUser);
    $stmtSelUser->execute([':id' => $getURLid ]);
    $itemSelUser = $stmtSelUser->fetchAll(PDO::FETCH_ASSOC); 
        if (!$itemSelUser) {
           echo '<script type="text/javascript">location="index.php"</script>'; 
         }  else { 
            $itemsSelUser = $itemSelUser[0]; 


            include_once "phpScripts/formatDateWord.php"; 

$sqlSavingMans = "SELECT id FROM users_save WHERE this_user=:this_user ORDER BY id DESC";
$stmtSavingMans = $pdo->prepare($sqlSavingMans);
$stmtSavingMans->execute([':this_user' => $_SESSION['id']]);
$itemSavingMans = $stmtSavingMans->fetchAll(PDO::FETCH_ASSOC);  
    ?> 
            



<title>Контент</title>
<link rel="stylesheet" type="text/css" href="static/settingStartup/settingMain.css">
<link rel="stylesheet" type="text/css" href="static/content/content.css">
<div class="wrap_with_Fo">

<div id="startup_wrapper_2divs">
    <div id="startup_wrapper_left">
        <div id="navbar_startups_forum">
            <div id="navbar_startups_wrap_items">
              <a href="user-<?php echo $itemsSelUser['id']; ?>" id="startups_main_NAME" class="namesHidden"><?php echo $itemsSelUser['name'] . " " .$itemsSelUser['lastname']; ?></a>
              <i class="material-icons">chevron_right</i>
              <a href="" id="startups_main_UNDERNAME"><?php echo $namePage; ?></a>
            </div>
        </div>
        <div class="startup_wrap_padding">
            <?php if (!empty($_GET['startups'])) {


            $sqlSlVer = "SELECT user_id,parent_id,verify FROM startup_verify_users WHERE user_id=:user_id AND verify=:verify ORDER BY id DESC";
            $stmtSlVer = $pdo->prepare($sqlSlVer); 

            $sqlStartupUnfo = "SELECT id,date_born,name,type,area,people,views,avatar_src FROM startups WHERE id=:id";
            $stmtStartupUnfo = $pdo->prepare($sqlStartupUnfo);        
            ?>



            <!-- ИНИЦИАТОР -->
            <?php  
            $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 3 ]);
            $itemSlVer3 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC);            
              if ($itemSlVer3) { 
                  

                ?>
            <div class="setting_groupWrap"><div>Инициатор<span><?php echo count($itemSlVer3); ?></span></div></div>   
            <?php foreach ($itemSlVer3 as $itemsSlVer3) { 

            $stmtStartupUnfo->execute([ ':id' => $itemsSlVer3['parent_id']]);
            $itemStartup3 = $stmtStartupUnfo->fetchAll(PDO::FETCH_ASSOC);  
            $itemsStartup3 = $itemStartup3[0];

            if ($itemsStartup3['avatar_src']) {
              $UrlImgSt3 = "avatarsStartups/". $itemsStartup3['avatar_src'];
            } else {
                $UrlImgSt3 = "avatarsStartups/group.jpg";
            }

            $dateDateSmall3 = formatDate($itemsStartup3['date_born'],"Дата основная:"); 
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="startup-<?php echo $itemsSlVer3['parent_id']; ?>">
                        <div class="content_bigImg content_bigImgSt3<?php echo $itemsSlVer3['parent_id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgSt3<?php echo $itemsSlVer3['parent_id']; ?> {
                                background-image: url(<?php echo $UrlImgSt3; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right">
                    <div class="itemContentR_1">
                        <a href="startup-<?php echo $itemsSlVer3['parent_id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsStartup3['name']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsStartup3['type']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsStartup3['area']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall3; ?></div>
                        <div class="itemContent_countSt">
                            <i class="material-icons">remove_red_eye</i>Просмотры: <span><?php echo $itemsStartup3['views']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <?php } ?>




            <!-- Участники -->
            <?php  
            $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 2 ]);
            $itemSlVer2 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC);            
              if ($itemSlVer2) { 
                  

                ?>
            <div class="setting_groupWrap"><div>Участник<span><?php echo count($itemSlVer2); ?></span></div></div>   
            <?php foreach ($itemSlVer2 as $itemsSlVer2) { 

            $stmtStartupUnfo->execute([ ':id' => $itemsSlVer2['parent_id']]);
            $itemStartup2 = $stmtStartupUnfo->fetchAll(PDO::FETCH_ASSOC);  
            $itemsStartup2 = $itemStartup2[0];

            if ($itemsStartup2['avatar_src']) {
              $UrlImgSt2 = "avatarsStartups/". $itemsStartup2['avatar_src'];
            } else {
                $UrlImgSt2 = "avatarsStartups/group.jpg";
            }

            $dateDateSmall2 = formatDate($itemsStartup2['date_born'],"Дата основная:"); 
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="startup-<?php echo $itemsSlVer2['parent_id']; ?>">
                        <div class="content_bigImg content_bigImgSt2<?php echo $itemsSlVer2['parent_id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgSt2<?php echo $itemsSlVer2['parent_id']; ?> {
                                background-image: url(<?php echo $UrlImgSt2; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right">
                    <div class="itemContentR_1">
                        <a href="startup-<?php echo $itemsSlVer2['parent_id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsStartup2['name']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsStartup2['type']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsStartup2['area']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall2; ?></div>
                        <div class="itemContent_countSt">
                            <i class="material-icons">remove_red_eye</i>Просмотры: <span><?php echo $itemsStartup2['views']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <?php } ?>




            <!-- Заявка на участие -->
            <?php  
            if ($itemsSelUser['id'] == $_SESSION['id']) {

            $stmtSlVer->execute([ ':user_id' => $_SESSION['id'], ':verify' => 1 ]);
            $itemSlVer1 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC);            
              if ($itemSlVer1) { 
                  

                ?>
            <div class="setting_groupWrap">
              <div>Заявки на участие<span><?php echo count($itemSlVer1); ?></span></div>
              <div class="setting_groupWrapABS">Видны только вам</div>
            </div>   
            <?php foreach ($itemSlVer1 as $itemsSlVer1) { 

            $stmtStartupUnfo->execute([ ':id' => $itemsSlVer1['parent_id']]);
            $itemStartup1 = $stmtStartupUnfo->fetchAll(PDO::FETCH_ASSOC);  
            $itemsStartup1 = $itemStartup1[0];

            if ($itemsStartup1['avatar_src']) {
              $UrlImgSt1 = "avatarsStartups/". $itemsStartup1['avatar_src'];
            } else {
                $UrlImgSt1 = "avatarsStartups/group.jpg";
            }

            $dateDateSmall0 = formatDate($itemsStartup1['date_born'],"Дата основная:"); 
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="startup-<?php echo $itemsSlVer1['parent_id']; ?>">
                        <div class="content_bigImg content_bigImgSt1<?php echo $itemsSlVer1['parent_id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgSt1<?php echo $itemsSlVer1['parent_id']; ?> {
                                background-image: url(<?php echo $UrlImgSt1; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right">
                    <div class="itemContentR_1">
                        <a href="startup-<?php echo $itemsSlVer1['parent_id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsStartup1['name']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsStartup1['type']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsStartup1['area']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall0; ?></div>
                        <div class="itemContent_countSt">
                            <i class="material-icons">remove_red_eye</i>Просмотры: <span><?php echo $itemsStartup1['views']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <?php } } ?>





            <!-- Сохранен -->
            <?php  
            $stmtSlVer->execute([ ':user_id' => $getURLid, ':verify' => 0 ]);
            $itemSlVer0 = $stmtSlVer->fetchAll(PDO::FETCH_ASSOC);            
              if ($itemSlVer0) { 
                  

                ?>
            <div class="setting_groupWrap"><div>Сохраненные<span><?php echo count($itemSlVer0); ?></span></div></div>   
            <?php foreach ($itemSlVer0 as $itemsSlVer0) { 

            $stmtStartupUnfo->execute([ ':id' => $itemsSlVer0['parent_id']]);
            $itemStartup0 = $stmtStartupUnfo->fetchAll(PDO::FETCH_ASSOC);  
            $itemsStartup0 = $itemStartup0[0];

            if ($itemsStartup0['avatar_src']) {
              $UrlImgSt0 = "avatarsStartups/". $itemsStartup0['avatar_src'];
            } else {
                $UrlImgSt0 = "avatarsStartups/group.jpg";
            }

            $dateDateSmall0 = formatDate($itemsStartup0['date_born'],"Дата основная:"); 
            ?> 
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="startup-<?php echo $itemsSlVer0['parent_id']; ?>">
                        <div class="content_bigImg content_bigImgSt0<?php echo $itemsSlVer0['parent_id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgSt0<?php echo $itemsSlVer0['parent_id']; ?> {
                                background-image: url(<?php echo $UrlImgSt0; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right">
                    <div class="itemContentR_0">
                        <a href="startup-<?php echo $itemsSlVer0['parent_id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsStartup0['name']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsStartup0['type']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsStartup0['area']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmall0; ?></div>
                        <div class="itemContent_countSt">
                            <i class="material-icons">remove_red_eye</i>Просмотры: <span><?php echo $itemsStartup0['views']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <?php } ?>


            <?php if (!$itemSlVer3 && !$itemSlVer2 && !$itemSlVer1 && !$itemSlVer0 ) { ?>
              <div class="notFound_pickImg">
                  <img src="static/img/notFound.png">
              </div>
            <?php } } else{} ?>





            <!-- РАЗДЕЛ ЛЮДИ -->
            <?php if (!empty($_GET['people'])) { 
              if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) {
                echo '<script type="text/javascript">location="signin"</script>';
              } else {
              if ($itemsSelUser['id'] == $_SESSION['id']) {

                $sqlSavingUs = "SELECT id,`date`,saving_user FROM users_save WHERE this_user=:this_user ORDER BY id DESC";
                $stmtSavingUs = $pdo->prepare($sqlSavingUs);
                $stmtSavingUs->execute([':this_user' => $_SESSION['id']]);
                $itemSavingUs = $stmtSavingUs->fetchAll(PDO::FETCH_ASSOC); 
                if ($itemSavingUs) {

                  $sqlSelStaticU = "SELECT status,city FROM users_static_info WHERE id=:id";
                  $stmtSelStaticU = $pdo->prepare($sqlSelStaticU);
            ?>
            <div class="setting_groupWrap">
                <div>Сохраненные страницы пользователей<span><?php echo count($itemSavingUs); ?></span></div>
                <div class="setting_groupWrapABS">Видны только вам</div>
            </div> 
            <?php foreach ($itemSavingUs as $itemsSavingUs) { 

              $stmtSelUser->execute([':id' => $itemsSavingUs['saving_user'] ]);
              $itemHuman1 = $stmtSelUser->fetchAll(PDO::FETCH_ASSOC); 
              $itemsHuman1 = $itemHuman1[0];

              $stmtSelStaticU->execute([':id' => $itemsSavingUs['saving_user'] ]);
              $itemSelStaticU = $stmtSelStaticU->fetchAll(PDO::FETCH_ASSOC); 
              $itemsSelStaticU = $itemSelStaticU[0];

              if ($itemsHuman1['url_avatar']) {
              $UrlImgPe = "avatarsUsers/". $itemsHuman1['url_avatar'];
              } else {
                $UrlImgPe = "avatarsUsers/itsMe.jpg";
              }     

              $dateDateSmallU = formatDate($itemsSavingUs['date'],"Регистрация:");         
            ?>
            <div class="itemContent_wrapper">
                <div class="itemContent_wrapper_left">
                    <a href="user-<?php echo $itemsHuman1['id']; ?>">
                        <div class="content_bigImg content_bigImgPe<?php echo $itemsHuman1['id']; ?>"></div>
                        <style type="text/css">
                              .content_bigImgPe<?php echo $itemsHuman1['id']; ?> {
                                background-image: url(<?php echo $UrlImgPe; ?>);
                              }
                        </style>
                    </a>
                </div>
                <div class="itemContent_wrapper_right" style="margin-top: 5px;">
                    <div class="itemContentR_0">
                        <a href="user-<?php echo $itemsHuman1['id']; ?>" class="item_a_main itemContent_HREF namesHidden"><?php echo $itemsHuman1['name']." ".$itemsHuman1['lastname']; ?></a>
                        <!-- <div>действие</div> -->
                    </div>
                    <div class="itemContentR_2">
                        <span><?php echo $itemsSelStaticU['city']; ?></span>
                        <i class="material-icons tranform_icon">keyboard_backspace</i>
                        <span><?php echo $itemsSelStaticU['status']; ?></span>
                    </div>
                    <div class="itemContentR_3">
                        <div class="itemContent_countSt"><?php echo $dateDateSmallU; ?></div>                       
                    </div>
                </div>
            </div>
            



            <?php } } else { ?>
            <div class="notFound_pickImg">
                <img src="static/img/notFound.png">
            </div>
            <?php } } else { $thisLoc = $_SESSION['id']; ?>
                <script type="text/javascript">location="content-people-<?php echo $thisLoc; ?>"</script>
        <?php  } } } ?>
        </div>
    </div>



    <div id="startup_wrapper_right">
        <div class="profile_left_header_info">Сохраненное</div>
        <div class="startup_menuSetting">
            <a href="content-startups-<?php echo $_SESSION['id']; ?>" class="startup_menu_ITEM <?php echo $borderLEFTSt; ?>">Мои стартапы</a>
            <?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { ?>
            <a href="signin" class="startup_menu_ITEM">Люди</a>
            <?php } else { ?>
            <a href="content-people-<?php echo $_SESSION['id']; ?>" class="startup_menu_ITEM <?php echo $borderLEFTPe; ?>">Люди</a>
            <?php } ?>  
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<?php } } } ?>
















