<?php include "header.php"; ?>
<?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { 
         echo '<script type="text/javascript">location="signup"</script>';
       } else { 

            if ($_SESSION['id'] != $_GET['id'])
              echo '<script type="text/javascript">location="index.php"</script>';
          ?>


 <?php 

      if (empty($_GET['search']) || $_GET['search'] == "undefined") {
        $string = ""; $join = ""; $like = "";
      } else {
          $string = strip_tags($_GET['search']);
          $join = "INNER JOIN users ON ((users.id=userDialogs.one_user AND users.id!=userDialogs.second_user)
                                         OR(users.id=userDialogs.second_user AND users.id!=userDialogs.one_user))";

          $like = "AND ((name LIKE '%" . $string . "%' OR lastname LIKE '%" . $string . "%')
                     OR (CONCAT(name,' ',lastname) LIKE '%" . $string . "%'))";
      }

      $sqlDialog = "SELECT userDialogs.id,one_user,second_user,userDialogs.`Date`,last_message,from_who,reed,how_many_reed
                    FROM userDialogs "." ". "$join" ." "."WHERE 
                    (one_user=:one_user OR second_user=:second_user)"." ". "$like" ." ".
                    "ORDER BY userDialogs.date DESC LIMIT 0, 20";

      $sqlDialogCounter = "SELECT userDialogs.id,one_user,second_user,userDialogs.`Date`,last_message,from_who,reed,how_many_reed
                    FROM userDialogs "." ". "$join" ." "."WHERE 
                    (one_user=:one_user OR second_user=:second_user)"." ". "$like" ." ";

          $stmtDialog = $pdo->prepare($sqlDialog);
          $stmtDialog->execute([':one_user' => $_SESSION['id'], ':second_user' => $_SESSION['id'] ]); 
          $itemDialog = $stmtDialog->fetchAll(PDO::FETCH_ASSOC); 


          $stmtDialogCounter = $pdo->prepare($sqlDialogCounter);
          $stmtDialogCounter->execute([':one_user' => $_SESSION['id'], ':second_user' => $_SESSION['id'] ]); 
          $itemDialogCounter = $stmtDialogCounter->fetchAll(PDO::FETCH_ASSOC); 
          $itemDialogCounter = count($itemDialogCounter);

          include_once "phpScripts/formatDateWord.php";

          ?>

<title>Диалоги</title>
<link rel="stylesheet" type="text/css" href="static/dialogs/dialogs.css">
    <div id="wrapper_page_dialogs">
        <div id="wrap_dialogsScroll"></div>
        <div id='search_dialogs'>
            <div class="search_Icon1">
                <i class="material-icons">search</i>
            </div>
            <form method="GET" id="formSearchText" action="phpScripts/searchDialogs.php">
                <input type="text" autocomplete="off" name="search" class="search_inputMain" placeholder="Поиск по имени и фамилии" maxlength="80" value="<?php echo $string; ?>" >
                <div class="labelForReset">
                    <i class="material-icons">close</i>
                </div>
                <input type="submit" name="searchSub" class="search_inputBtn" value="Найти!">
            </form>
        </div>
        <div id="dialogs_items_under"></div>
        <div id="dialogs_items">
            <div id="dialogs_up_items"></div>
            <div id="for_updater"></div>
               <?php if (empty($_GET['search']) || $_GET['search'] == "undefined") {} else {   if ($itemDialog) {  ?>
          
                      <div class="wrapper_wrappCounts">
                         <div class="wrappCounts">
                             <div>Найдено диалогов:<span><?php echo  $itemDialogCounter; ?></span></div>
                         </div>
                     </div>
               <?php } else {} } ?>




                <?php  if ($itemDialog) { 

                  $sqlSelUser = "SELECT id,name,lastname,url_avatar FROM users WHERE id = :id";
                  $stmtSelUser = $pdo->prepare($sqlSelUser);

                ?>
                <?php foreach ($itemDialog as $takeContent) {  
                      $takeContentId = $takeContent['id'];
                      $takeContentHow = $takeContent['how_many_reed'];
                      if ( $takeContent['reed'] == 0 && $takeContent['from_who'] != $_SESSION['id'] ) { // не прочитано мной
                        $backColordialogs = 'main_dialog_item_not_reed' . " " . 'main_dialog_item';
                        $HowNotReed = "<div class='item_dialog_NOREED'><span>$takeContentHow</span></div>";
                      } else {
                        $backColordialogs = 'main_dialog_item';
                        $HowNotReed = '';
                      }
                      if ( $takeContent['reed'] == 0 && $takeContent['from_who'] == $_SESSION['id'] ) {
                        $txt_backColor_not_meReed = 'dialogs_MESSAGE' . " " . 'dialogs_MESSAGE_text_not_reed';
                      } else {
                        $txt_backColor_not_meReed = 'dialogs_MESSAGE';
                      }
                      if ( $takeContent['from_who'] == $_SESSION['id'] ) {
                        $dialogs_is_me = "<div class='dialogs_MESSAGE_me'>Вы:</div>";
                      } else {
                        $dialogs_is_me = '';
                      }

                      

                      if ($takeContent['one_user'] == $_SESSION['id']) {
                          $anotherUser = $takeContent['second_user'];
                      } else {
                          $anotherUser = $takeContent['one_user'];
                      }


                      $stmtSelUser->execute([ ':id' => $anotherUser ]);
                      $itemSelUser = $stmtSelUser->fetchAll(PDO::FETCH_ASSOC);
                      $itemsSelUser = $itemSelUser[0];  


                      if ($itemsSelUser['url_avatar']) {
                        $UrlImgPe = "avatarsUsers/". $itemsSelUser['url_avatar'];
                      } else {
                        $UrlImgPe = "avatarsUsers/itsMe.jpg";
                      } 

                      $dateDateSmall = formatDate($takeContent['Date'],"");      
                ?> 

            <a href="messages-<?php echo $takeContentId; ?>" class="<?php echo $backColordialogs; ?>">
                <div class="div_item_dialog">
                    <div class="item_dialog_fotoUser">
                        <div class="item_dialog_FOTO forum_ComUUserImg<?php echo $itemsSelUser['id']; ?>"></div>
                        <style type="text/css">
                              .forum_ComUUserImg<?php echo $itemsSelUser['id']; ?> {
                                background-image: url(<?php echo $UrlImgPe; ?>);
                              }
                        </style>
                    </div>
                    <div class="item_dialog_info">
                        <div class="item_dialog_wrapInfo">
                            <div class="dialogs_NAME"><?php echo $itemsSelUser['name']." ".$itemsSelUser['lastname']; ?></div>
                            <div class="dialogs_DATE"><?php echo $dateDateSmall; ?></div>
                        </div>
                        <div class="item_dialog_infoMesHow">
                            <div class="<?php echo $txt_backColor_not_meReed; ?>">
                                <?php echo $dialogs_is_me; ?>
                                <div class="dialogs_MESSAGE_text"><?php echo $takeContent['last_message']; ?></div>
                            </div>
                            <?php echo $HowNotReed; ?>
                        </div>
                    </div>
                </div>
            </a>
            <?php } } else { ?>
                <div class="notFound_pickImg" style="margin-top: 10vh;">
                    <img src="static/img/notFound.png">
                </div>
            <?php } ?>
            <div id="append_ajax"></div>
            <?php if ($itemDialogCounter > 20) { ?>
            <div class="wrapper_gif_loader">
                <img src="static/img/loader.gif">
            </div>
            <?php } ?>
            <div class="clearFooter"></div>
            <div class="dialogsFooter"></div>
            <div class="dialogsFooterShadow"></div>
        </div>
        <!-- <div>здесь будут фильтры</div> -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/dialogs/dialogs.js"></script>
</div>
</body>
</html>    

<?php } ?>