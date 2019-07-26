<?php $userid = $_GET['id']; 
      $dialogNumber = 0;
      $sqlDialog = "SELECT `id` FROM userDialogs WHERE one_user=:one_user AND second_user=:second_user";
      $stmtDialog = $pdo->prepare($sqlDialog);
      $stmtDialog->execute([':one_user' => $userid, ':second_user' => $_SESSION['id'] ]); 
      $itemDialog = $stmtDialog->fetchAll(PDO::FETCH_ASSOC);
      $takeContent = $itemDialog[0];
      if ($takeContent['id'] > 0) {
        $dialogNumber = $takeContent['id'];
      } else {}
      $stmtDialog2 = $pdo->prepare($sqlDialog);
      $stmtDialog2->execute([':one_user' => $_SESSION['id'], ':second_user' => $userid ]); 
      $itemDialog2 = $stmtDialog2->fetchAll(PDO::FETCH_ASSOC);
      $takeContent2 = $itemDialog2[0];
      if ($takeContent2['id'] > 0) {
        $dialogNumber = $takeContent2['id'];
      } else {}


    $sqlStaticInfo = "SELECT status FROM users_static_info WHERE id = :id";
    $stmtStaticInfo = $pdo->prepare($sqlStaticInfo);
    $stmtStaticInfo->execute([':id' => $getURLid]);
    $itemStaticInfo = $stmtStaticInfo->fetchAll(PDO::FETCH_ASSOC); 
    $itemsStaticInfo = $itemStaticInfo[0];


if ($dialogNumber == 0) {
  $DialogHref = ""; 
  $DialogWord = ""; 
} else {
    $DialogHref = "messages-$dialogNumber"; 
    $DialogWord = "Открыть диалог";  
}


      ?>
<div id='PopupMessage_modal'></div>
<link rel="stylesheet" type="text/css" href="static/profile/userPopupMessage.css">
<div id='wrapperPopupMessage'>
    <div id="PopupMessage_UP">
        <div id="PopupMessage_UP_left">
            <h3>Написать сообщение</h3>
        </div>
        <div id="PopupMessage_UP_right">
            <button id='btn_closeMessageWindow'>
                <i class="material-icons">close</i>
            </button>
        </div>
    </div>
    <div id="PopupMessage_bottom">
        <div id='PopupMessage_Userinfo'>
            <div id="Message_UserFoto_wrap">
                <div id="Message_UserFoto"></div>
                <style type="text/css">
                    #Message_UserFoto {
                      background-image:   url(<?php echo $UrlImg ?>);
                    }
                </style>
            </div>
            <div id="Message_UserTxt_wrap">
                <div><a class="item_a_main" href="user-<?php echo $getURLid; ?>"><?php echo $itemTake['name'] . " " .$itemTake['lastname']; ?></a></div>
                <?php echo "<div id='dialogNumber' style='display: none'>$dialogNumber</div>";  ?>
                <div id='Message_User_online'><?php echo $online_user; ?></div>
            </div>
        </div>
        <div id="PopupMessage_write">
            <?php include 'static/main/execCommand.html' ?>
            <div id='textarea_blog' contenteditable="true"></div>
        </div>
        <div id="Message_btnSend_wrap">
            <div class="btn_send_wrapperR">
                <button id="Message_btnSend">Отправить</button>
                <div class="show_messageStatus"></div>
            </div>
            <div id="functions_href_to_topic"><a class="item_a_main" href="<?php echo $DialogHref; ?>" style="font-size: 15px;"><?php echo $DialogWord; ?></a></div>
        </div>
    </div>
        <script src="static/profile/userPopupMessage.js"></script>
</div>
