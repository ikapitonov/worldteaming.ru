<?php include "header.php"; ?>
<?php if (empty($_SESSION['auth']) || $_SESSION['auth'] == false) { 
         echo '<script type="text/javascript">location="signup"</script>';
     } else { ?>
<?php $getURLid = $_GET['id']; 
      if ( $getURLid == 0 ) {
            echo '<script type="text/javascript">location="index.php"</script>';
      } else { ?>

    <?php 
    $sqlUpdateDialogs = "UPDATE userDialogs 
                         SET reed=:reed, how_many_reed=:how_many_reed 
                         WHERE id=:id AND to_who=:to_who";
    $stmtUpdateDialogs = $pdo->prepare($sqlUpdateDialogs);
    $userNowHere = $_SESSION['id'];
    $stmtUpdateDialogs->execute([
    ':reed' => 1,
    ':how_many_reed' => 0,
    ':id' => $getURLid,
    ':to_who' => $userNowHere
    ]);
    $sqlUpdateMessage = "UPDATE userMessages 
                         SET reed_mes=:reed_mes
                         WHERE parent_id=:parent_id AND to_who_mes=:to_who_mes";
    $stmtUpdateMessage = $pdo->prepare($sqlUpdateMessage);
    $stmtUpdateMessage->execute([
    ':reed_mes' => 1,
    ':parent_id' => $getURLid,
    ':to_who_mes' => $userNowHere
    ]);
   ?>

<?php 
    $sqlIdDialog = "SELECT one_user,second_user FROM userDialogs WHERE id=:id";
    $stmtIdDialog = $pdo->prepare($sqlIdDialog);
    $stmtIdDialog->execute([':id' => $getURLid]); 
    $itemIdDialog = $stmtIdDialog->fetchAll(PDO::FETCH_ASSOC);
    $takeContentIdDialog = $itemIdDialog[0];
    if (!$takeContentIdDialog) {
        echo '<script type="text/javascript">location="index.php"</script>';     
    } else { 
        if ( $takeContentIdDialog['one_user'] != $_SESSION['id'] && $takeContentIdDialog['second_user'] != $_SESSION['id'] ) {
            echo '<script type="text/javascript">location="index.php"</script>';
        } else {

            $sqlCounter = "SELECT id_mes FROM userMessages WHERE parent_id=:parent_id";
            $stmtCounter = $pdo->prepare($sqlCounter);
            $stmtCounter->execute([':parent_id' => $getURLid]); 
            $itemCounter = $stmtCounter->fetchAll(PDO::FETCH_ASSOC);
            $itemCounter = count($itemCounter);

            $sqlMessages = "SELECT id_mes, `date`,`text`, to_who_mes, reed_mes
                            FROM userMessages 
                            WHERE parent_id=:parent_id
                            ORDER BY id_mes DESC LIMIT 50";
            $stmtMessages = $pdo->prepare($sqlMessages);
            $stmtMessages->execute([':parent_id' => $getURLid]); 
            $itemMessages = $stmtMessages->fetchAll(PDO::FETCH_ASSOC);

            if ($takeContentIdDialog['one_user'] == $_SESSION['id']) {
                $anotherUser = $takeContentIdDialog['second_user'];
            } else {
                $anotherUser = $takeContentIdDialog['one_user'];
            }
            $sqlAnotherUser = "SELECT id,name,lastname,url_avatar FROM users WHERE id=:id";
            $stmtAnotherUser = $pdo->prepare($sqlAnotherUser);
            $stmtAnotherUser->execute([':id' => $anotherUser]); 
            $itemAnotherUser = $stmtAnotherUser->fetchAll(PDO::FETCH_ASSOC);
            $itemUser = $itemAnotherUser[0];

            if ($itemUser['url_avatar']) {
                $UrlImg = "avatarsUsers/".$itemUser['url_avatar'];
            } else {
                $UrlImg = "avatarsUsers/itsMe.jpg";
            }
?>
  <title>Сообщения</title>
   <link rel="stylesheet" type="text/css" href="static/messages/messages.css">
   <link rel="stylesheet" type="text/css" href="static/main/execText.css">
   <div id="message_main_wrapper">
       <div id="message_left_side" class="message_left_right_side">
            <div id="message_left_upInfoUP"></div>
            <div id="message_left_upInfo">
                <div id="navbar_startups_forum">
                    <div id="navbar_startups_wrap_items">
                        <a href="dialogs-<?php echo $_SESSION['id']; ?>" id="startups_main_NAME">Диалоги</a>
                        <i class="material-icons">chevron_right</i>
                        <h1><a href="user-<?php echo $itemUser['id']; ?>" id="startups_main_UNDERNAME"><?php  
                        echo $itemUser['name']. " " .$itemUser['lastname'];
                        ?></a></h1>
                    </div>
                    <div id="message_another_user_foto">
                        <style type="text/css">
                            #message_another_user_foto {
                                background-image: url(<?php echo $UrlImg; ?>);
                            }
                        </style>
                    </div>
                    <div id="messages_another_user" style="display: none;"><?php echo $itemUser['id']; ?></div>
                </div>
            </div>
            <div id="message_left_textarea">
                <textarea id="message_textarea_small" placeholder="Написать сообщение"></textarea>
                <button id="Message_btnSend_small">
                    <i class="material-icons tranform_icon">keyboard_backspace</i>
                </button>
            </div>
            <div id="message_left_undexTextarea"></div>
            <div id="message_left_mainMes">
                <div id="Messanger_clearTop"></div>
                <div id="Messanger_wrapperITEMS">
                    <?php if ($itemCounter > 50) { ?>
                    <div class="wrapper_gif_loader">
                        <img src="static/img/loader.gif">
                    </div>
                    <?php } ?>
                    <ul id="Messanger_wrapperITEMS_ul">
                        <?php 
                        foreach ($itemMessages as  $itemsMessages) {
                            $timeMessages = strtotime($itemsMessages['date']);
                            $timeMessagesReady = date('h', $timeMessages). ':' .date('i', $timeMessages);
                            if ($itemsMessages['to_who_mes'] == $_SESSION['id']) {
                                $MessageSideClass = " " . "Messanger_item_Inherit_left";
                                $MessageUnderTxt = "<div class='Messanger_item_Date_not_me'>
                                                       $timeMessagesReady
                                                    </div>";
                            } else {
                                $MessageSideClass = " " . "Messanger_item_Inherit_right";
                                if ( $itemsMessages['reed_mes'] == 0 ) {
                                    $MessagesIcon = "<i class='material-icons'>done</i>";
                                } else {
                                    $MessagesIcon = "<i class='material-icons material-icons_reedIt'>check_box</i>";
                                }
                                $MessageUnderTxt = "<div class='Messanger_wrapper_Date_Post'>
                                                        <div class='Messanger_item_Date_not_me'>$timeMessagesReady</div>
                                                        <div class='Messanger_item_Post_TO'>
                                                            $MessagesIcon
                                                        </div>
                                                    </div>";
                            }
                        ?>
                        <li class="Messanger_item">
                            <div class="Messanger_item_Inherit execMain <?php echo $MessageSideClass; ?>">
                                <div class="Messanger_item_Text txtControl"><?php echo $itemsMessages['text']; ?></div>
                                <?php echo $MessageUnderTxt; ?>
                            </div>
                        </li>
                        <?php } ?>
                   </ul>
                   <ul id="Messanger_creater_wrap"></ul>
                </div>
                <div id="Messanger_clearBottom"></div>
            </div>
       </div>
       <div id="message_right_side_wrap">
            <div id="message_right_side">
                <div id="message_right_headEr">Здесь удобно писать большие сообщения</div>
                <div id="message_right_wrapper">
                    <?php include "static/main/execCommand.html"; ?>
                    <div id="textarea_blog" class="execMain"  contenteditable='true'></div>
                    <div id="message_textarea_BIG_send_wrapper">
                        <button id="Message_btnSend">Отправить</button>
                    </div>
                </div>
            </div>
       </div>
   </div>
   <div id="for_scroll_ajax" style="display: none;"><?php echo $itemCounter; ?></div>
   <script type="text/javascript" src="static/messages/messages.js"></script>
   <script type="text/javascript" src="static/main/autosize.js"></script>
        <script type="text/javascript">
            autosize(document.querySelectorAll('textarea'));
        </script>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<input type="hidden" name="" value="11">
<?php } } } } ?>
