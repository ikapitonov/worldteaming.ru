<link rel="stylesheet" type="text/css" href="static/startup/popupFunc.css">
<link rel="stylesheet" type="text/css" href="static/main/execText.css">
<div id='PopupMessage_modal'></div>
<div id='wrapperPopupMessage'>
    <div id="PopupMessage_UP">
        <div id="PopupMessage_UP_left">
            <h3>Предложить идею</h3>
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
                <style type="text/css">
                    #Message_UserFoto {
                        background-image: url(<?php echo $Avatarka; ?>);
                    }
                </style>
                <div id="Message_UserFoto"></div>
            </div>
            <div id="Message_UserTxt_wrap">
                <div><a class="item_a_main namesHidden" href=''><?php echo $itemsStartup['name']; ?></a></div>
                <div id='dialogNumber' style='display: none'></div>
                <div id='Message_User_online'></div>
            </div>
        </div>
        <div id="PopupMessage_write">
            <div class="popupFunc_radios_wrapper" style="display: none;">
                <input type="radio" name="btnIdea" value="2" id="FbtnIdeaRadio2"checked>
                <input type="radio" name="btnIdea" value="1" id="FbtnIdeaRadio1">
                <input type="radio" name="btnIdea" value="3" id="FbtnIdeaRadio3">
                <label for="FbtnIdeaRadio1" class="btnIdea_Label btnIdea_Label1">Мне нравится</label>
                <label for="FbtnIdeaRadio2" class="btnIdea_Label btnIdea_Label2">Нейтрально</label>
                <label for="FbtnIdeaRadio3" class="btnIdea_Label btnIdea_Label3">Мне не нравится</label>
            </div>
            <div class="popupFunc_radiosTask_wrapper" style="display: none;">
                <input type="radio" name="btnTask" value="1" id="FbtnTaskRadio1">
                <input type="radio" name="btnTask" value="2" id="FbtnTaskRadio2">
                <input type="radio" name="btnTask" value="3" id="FbtnTaskRadio3">
                <label for="FbtnTaskRadio1" class="btnTask_Label btnTask_Label1">Хочу попробовать!</label>
                <label for="FbtnTaskRadio2" class="btnTask_Label btnTask_Label2">Я подумаю</label>
                <label for="FbtnTaskRadio3" class="btnTask_Label btnTask_Label3">Нейтрально</label>
            </div>
            <input type="text" placeholder="Заголовок" maxlength="80" id="tittlePOPUP" style="display: none;">
            <?php include 'static/main/execCommand.html'; ?>
            <div id='textarea_blog' class="execMain" contenteditable="true"></div>
        </div>
        <div id="Message_btnSend_wrap">
            <div class="btn_send_wrapperR">
                <button class="btn_onclick_do">Отправить</button>
                <div class="show_messageStatus"></div>
            </div>
            <div id="functions_href_to_topic"><a href=""></a></div>
        </div>
    </div>
</div>
<?php include 'phpScripts/animationSmall.php'; ?>


