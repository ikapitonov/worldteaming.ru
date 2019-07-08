<link rel="stylesheet" type="text/css" href="static/main/execText.css">
<link rel="stylesheet" type="text/css" href="static/profile/userPopupMessage.css">
<div id='PopupMessage_modal'></div>
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
                      background-image:   url();
                    }
                </style>
            </div>
            <div id="Message_UserTxt_wrap">
                <div><a class="item_a_main namesHidden"></a></div>
                <div id='Message_User_online'></div>
            </div>
        </div>
        <div id="PopupMessage_write">
            <?php include 'static/main/execCommand.html' ?>
            <div id='textarea_blog' class="execMain" contenteditable="true"></div>
        </div>
        <div id="Message_btnSend_wrap">
            <div class="btn_send_wrapperR">
                <button id="Message_btnSend">Отправить</button>
                <div class="show_messageStatus"></div>
            </div>
            <div id="functions_href_to_topic"><a class="item_a_main" href="" style="font-size: 15px;"></a></div>
        </div>
    </div>
</div>
