window.addEventListener('DOMContentLoaded', function() {
  var tittle_popup = document.querySelector('#tittlePOPUP');
      tittle_popup.style.display = "none"; 

  var textarea = document.querySelector('#textarea_blog');

	var url_user = location.href;
  var mainId_user = url_user.split('-')[1];




  // функция вызова popup_write
  var btn_popup = document.querySelectorAll('.startup_functionsCALL');
  for (var i = 0; i < btn_popup.length; i++) {
  	btn_popup[i].onclick = showPopup;
  }
  function showPopup () {
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

    function changeText (num) {
    	var h3Popup, underStartup, hrefTopic; 
    	    h3Popup = document.querySelector('#PopupMessage_UP_left h3');
    	    underStartup = document.querySelector('#Message_User_online');
    	    hrefTopic = document.querySelector('#functions_href_to_topic a');

    	if (num == 1) {
    		h3Popup.textContent = "Предложить идею";
    		underStartup.textContent = "Предлагая идею, вы помогаете проекту стать лучше!";
    		hrefTopic.innerHTML = 'Раздел:<strong>"Идеи и предложения"</strong>';
        hrefTopic.href = "section_idea-"+ parseInt(mainId_user);
    	} else {}
    	if (num == 2) {
        h3Popup.textContent = "Участие в стартапе";
    		underStartup.textContent = "Почему вы хотите учавствовать? Чем вас заинтересовал данный стартап? Чем бы вы хотели заниматься?";
    		hrefTopic.innerHTML = "";
        hrefTopic.href = "";
    	} else {}
      if (num == 3) {
        h3Popup.textContent = "Добавить документ";
        underStartup.textContent = "Здесь вы можете прикрепить нужную информацию, к сожалению, пока что только ссылкой (например, на облако)";
        hrefTopic.innerHTML = 'Раздел:<strong>"Документы"</strong>';
        hrefTopic.href = "section_docs-"+ parseInt(mainId_user);
      }

    }
    var btn_send = document.querySelector('.btn_onclick_do'); 
    var tittle = document.querySelector('#tittlePOPUP');
    var showTxt = document.querySelector('.show_messageStatus');

    if (this.querySelector('span').textContent == "Предложить идею") {
    	changeText(1);
      tittle_popup.style.display = "block";
      btn_send.onclick = function () {
        if (tittle.value != "" && textarea.textContent != "") {
          AjaxForum(1);
        } else {
            showTxt.textContent = "Заполните все поля";
            showTxt.classList.add('show_messageStatusActive');
            showTxt.style.color = "red";
            setTimeout( function () {
              showTxt.classList.remove('show_messageStatusActive');
              showTxt.textContent = "";
            } ,1000);
        }
        // AjaxForum(1);
      }   
    } else {}
    if (this.querySelector('span').textContent === "Хочу учавствовать!") {
      tittle_popup.style.display = "none";
    	changeText(2);
      btn_send.onclick = function () {
        if (textarea.textContent != "") {
          AjaxForum(2);
        } else {
            showTxt.textContent = "Заполните поле";
            showTxt.classList.add('show_messageStatusActive');
            showTxt.style.color = "red";
            setTimeout( function () {
              showTxt.classList.remove('show_messageStatusActive');
              showTxt.textContent = "";
            } ,1000);
        }
      } 
    }
    if (this.querySelector('span').textContent == "Добавить документ") {
      changeText(3);
      tittle_popup.style.display = "block";
      btn_send.onclick = function () {
        if (tittle.value != "" && textarea.textContent != "") {
          AjaxForum(3);
        } else {
            showTxt.textContent = "Заполните все поля";
            showTxt.classList.add('show_messageStatusActive');
            showTxt.style.color = "red";
            setTimeout( function () {
              showTxt.classList.remove('show_messageStatusActive');
              showTxt.textContent = "";
            } ,1000);
        }
      } 
    }

    
    function AjaxForum(selector) {
      var windowSuccess = document.querySelector('.animation_wrapperNONE');
        $.ajax ({
            type: 'POST',
            url: 'phpScripts/ajax/startupFuncAjax.php',
            data: { idStartup:   parseInt(mainId_user),
                    its:         selector,
                    text:        textarea.innerHTML, 
                    tittle:      tittle.value,
                    namePost:    "Передать данные для форума"
                  },
          success: function (data) { 
            if (data.length < 19) {
              closeWindowAnim ();
                setTimeout( function ()  {
                    if (selector == 1) {
                      document.location.href = "forum_idea_" + data + "-" + parseInt(mainId_user);
                    } else {
                      document.location.href = "forum_docs_" + data + "-" + parseInt(mainId_user);
                    }
                },1100);

            } else if (data == "Отправлено!WantWantWant") {
                
                closeWindowAnim ();
                setTimeout( function ()  {
                    windowSuccess.classList.add('animation_wrapperNONE');
                    windowSuccess.classList.remove('animation_wrapper');
                    popupMessage_modal.classList.remove('PopupMessage_modalActive');
                    clearField();
                },1100);

                var closeBtn = document.querySelector('#startup_insertMe');
                    closeBtn.outerHTML = "";
                    delete closeBtn;
                var btn_changeAfter = document.querySelector("#startup_btn_WANT");
                    btn_changeAfter.querySelector('span').textContent = "Заявка на участие отправлена";
                    btn_changeAfter.querySelector('i').classList.add('startup_functions_wrapperColorColor');
                    btn_changeAfter.classList.remove('startup_functionsCALL');

                var urlSection = location.href.split('section')[1];
                  if (urlSection != undefined) {
                    var btn_changeAft = document.querySelector('#WANT2SEC');
                        btn_changeAft.querySelector('span').textContent = "Заявка на участие отправлена";
                        btn_changeAft.querySelector('i').classList.add('startup_functions_wrapperColorColor');
                        btn_changeAft.classList.remove('startup_functionsCALL');
                        btn_changeAft.style.width =  310 + "px";
                  } else {}

            } else {
                showTxt.textContent = "Что-то пошло не так";
                showTxt.classList.add('show_messageStatusActive');
                showTxt.style.color = "red";
                setTimeout( function () {
                  showTxt.classList.remove('show_messageStatusActive');
                  showTxt.textContent = "";
                 } ,1000);
                clearField();
            }
           }
        });
    }


    popupMessage_modal.onclick = closeMessageWindow;
		btn_closeMessageWindow.onclick = closeMessageWindow;
		function closeMessageWindow () {	
		  popupMessage_modal.classList.remove('PopupMessage_modalActive');
		  popupMessage.classList.remove('wrapperPopupMessageActive');
		  htmlFixed.style.overflow = 'auto';
      showTxt.textContent = "";
      showTxt.classList.remove('show_messageStatusActive');
      document.querySelector('#tittlePOPUP').style.display = "none";
	  }


    function closeWindowAnim () {  
      var windowSuccess = document.querySelector('.animation_wrapperNONE');
          windowSuccess.classList.remove('animation_wrapperNONE');
          windowSuccess.classList.add('animation_wrapper');

      popupMessage.classList.remove('wrapperPopupMessageActive');
      htmlFixed.style.overflow = 'auto';
      showTxt.textContent = "";
      showTxt.classList.remove('show_messageStatusActive');
      document.querySelector('#tittlePOPUP').style.display = "none";
    }


    function clearField() {
      textarea.innerHTML = "";
      tittle.value = "";
    }
  }

});