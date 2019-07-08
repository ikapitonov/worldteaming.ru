<link rel="stylesheet" type="text/css" href="static/main/execText.css">
<link rel="stylesheet" type="text/css" href="static/settingStartup/popupWindow.css">
<div id='PopupMessage_modal' class=""></div>
<div id='wrapperPopupMessage' class="">
    <div id="PopupMessage_UP">
        <div id="PopupMessage_UP_left">
            <h3></h3>
        </div>
        <div id="PopupMessage_UP_right">
            <button id='btn_closeMessageWindow'>
                <i class="material-icons">close</i>
            </button>
        </div>
    </div>
    <div id="PopupMessage_bottom">
        <div class="txtControl" id="popupWindow_wrapAbout"></div>
        <div id="popupWindow_wrap_Inic">
        	<div id="popupWindow_wrap_Inic_wrap">
        		<div id="aboutinictext">Краткая информация:</div>
	        	<input type="text" placeholder="Обязательное поле" maxlength="25">
	            <small class="changeAbYou_small">Не более 25 символов</small>
            </div>
            <div id="popupWindow_Inic_taskWrap" style="display: none;">
            	<div id="taskdoingqw">Выполнена ли задача?</div>
            	<div class="taskquestion_wrapper">
            		<input type="radio" name="task" value="1" id="taskquestion1">
            		<input type="radio" name="task" value="2" id="taskquestion2">
            		<input type="radio" name="task" value="3" id="taskquestion3" checked>
            		<label for="taskquestion1" class="taskquestionLab1">Да!</label>
            		<label for="taskquestion2" class="taskquestionLab2">Еще нет</label>
            		<label for="taskquestion3" class="unActiveLabel" style="display: none;"></label>
            	</div>
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
<?php include 'phpScripts/animationSmall.php'; ?>