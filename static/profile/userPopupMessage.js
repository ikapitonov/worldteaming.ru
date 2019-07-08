window.addEventListener('DOMContentLoaded', function() {
  var textarea, usernamePage, dialogNumber;
      textarea = document.querySelector('#textarea_blog');
        usernamePage = document.querySelector('#userUP_nameH1 h1');
        dialogNumber = parseInt(document.querySelector('#dialogNumber').textContent);

	var url_user = location.href;
  var mainId_user = url_user.split('-')[1];

  var showTxt = document.querySelector('.show_messageStatus');
  var hrefDialog = document.querySelector('#functions_href_to_topic a');
  var counter = 0;

	document.querySelector('#btn_message_popup').addEventListener('click', function (){
		var popupMessage_modal, popupMessage, htmlFixed, btn_closeMessageWindow, btnMessage_send;
		popupMessage_modal = document.querySelector('#PopupMessage_modal');
		popupMessage = document.querySelector('#wrapperPopupMessage');
		htmlFixed = document.querySelector('html');
		btn_closeMessageWindow = document.querySelector('#btn_closeMessageWindow');
		//показываем элементы
		popupMessage_modal.classList.add('PopupMessage_modalActive');
		popupMessage.classList.add('wrapperPopupMessageActive');
		htmlFixed.style.overflow = 'hidden';

		textarea.focus();
    btnMessage_send = document.querySelector('#Message_btnSend');
    btnMessage_send.addEventListener('click', function() {

    	if ( textarea.textContent === "" ) {
    		showTxt.textContent = "Напишите сообщение";
        showTxt.classList.add('show_messageStatusActive');
        showTxt.style.color = "red";
        setTimeout( function () {
          showTxt.classList.remove('show_messageStatusActive');
          showTxt.textContent = "";
        } ,1000);
    	} else {
        showTxt.classList.remove('show_messageStatusActive');
    		$.ajax ({
          type: 'POST',
          url: 'phpScripts/ajax/messageFromInsert.php',
          data: { 
              message:     textarea.innerHTML,
              messageTxt:  textarea.textContent,
              userAn:      parseInt(mainId_user),  
              messageWord: 'отправить сообщение'
          },
          success: function (data) { 
            if (data.textContent != "") {
              console.log(data);
              textarea.innerHTML = "";
              showTxt.innerHTML = "<i class='material-icons'>check_box</i>Отправлено!";
              showTxt.classList.add('show_messageStatusActive');
              showTxt.style.color = "#080D22";
              hrefDialog.textContent = "Открыть диалог";
              hrefDialog.href = "messages-" + data;

              counter = counter + 1;
              if (counter > 1) {
                showTxt.innerHTML = showTxt.innerHTML + "<span>(" + counter + ")</span>";
                if (counter > 4) {
                  document.location.href = "messages-" + data;
                }
              }
            } else {
                alert("Что-то пошло не так :(");
            }
           }
        });
    	}
    });

		// убираем элементы
		popupMessage_modal.onclick = closeMessageWindow;
		btn_closeMessageWindow.onclick = closeMessageWindow;
		function closeMessageWindow () {	
		  popupMessage_modal.classList.remove('PopupMessage_modalActive');
		  popupMessage.classList.remove('wrapperPopupMessageActive');
		  htmlFixed.style.overflow = 'auto';
	  }
	},false);
});