window.addEventListener('DOMContentLoaded', function() {

  var url_user = location.href;
  var searchIduser = url_user.substring(url_user.lastIndexOf('insert-') + 1);
  var parseInt_url = /\d+/;
  var mainId_user = searchIduser.match(parseInt_url);

var wrap_Txt = document.querySelectorAll('.item_forum_Com') || [];
    wrap_Txt = [].slice.apply(wrap_Txt);
    wrap_Txt.forEach(function (element, i) {
      var text_Txt = element.querySelector('.forum_Com_right_TEXT');
      if (text_Txt.scrollHeight > 162) {
        text_Txt.style.height = 162 + "px";
        var moreTxt  = element.querySelector('.forum_Com_right_TEXT_FULL');
            moreTxt.style.display = "block";
            moreTxt.addEventListener('click', function () {
              this.style.display = "none";
              text_Txt.style.height = "auto";
            });
      }     
});


var item_plus = document.querySelectorAll('.item_forum_Com') || [];
    item_plus = [].slice.apply(item_plus);
    item_plus.forEach(function (element, i) {

    	element.querySelector('.forum_item_under_right').addEventListener('click', function () {
        var nubmerMain = element.querySelector('.nubmerOfWants').textContent;
        console.log(nubmerMain);
        thisBtn = this;
        if (this.textContent == "Отказать") {
            $.ajax ({
                      type: 'POST',
                      url: 'phpScripts/ajax/insertDelete.php',
                      data: { 
                              numId:       parseInt(nubmerMain),
                              parent_ID:   parseInt(mainId_user),
                              delComment:  "Удалить заявку"
                            },
                      success: function (data) {
                        if (data == 1) {
                            var btnAdd, bdnFalse;
                              btnAdd = element.querySelector('.forum_item_under_left_1');
                              bdnFalse = element.querySelector('.forum_item_under_right');
                            thisBtn.textContent = "Отказано!";
                            element.classList.add('addPeopleClass');
                            btnAdd.style.display = "none";
                            bdnFalse.classList.add('btnFalsePeople');
                        }
                      } 
              });
        } else {}
      });





      var counter = 0;
      element.querySelector('.forum_item_under_left_2').addEventListener('click', function () {
        var textarea, userName, backImage, showTxt, hrefDialog,idHtml,status;
            textarea = document.querySelector('#textarea_blog');
            userName = element.querySelector('.item_a_main');
            backImage = element.querySelector('.backImageUrl');
            showTxt = document.querySelector('.show_messageStatus');
            hrefDialog = document.querySelector('#functions_href_to_topic a');
            idHtml = element.querySelector('.idAnotherUser').textContent;
            status = element.querySelector('.statusUserJS').textContent;

        var popupMessage_modal, popupMessage, htmlFixed, btn_closeMessageWindow;
        // btnMessage_send.classList.add('classForSendForumCom');
            popupMessage_modal = document.querySelector('#PopupMessage_modal');
            popupMessage = document.querySelector('#wrapperPopupMessage');
            htmlFixed = document.querySelector('html');
            btn_closeMessageWindow = document.querySelector('#btn_closeMessageWindow');
            //показываем элементы
            popupMessage_modal.classList.add('PopupMessage_modalActive');
            popupMessage.classList.add('wrapperPopupMessageActive');
            htmlFixed.style.overflow = 'hidden';

            textarea.focus();

        var userHref, userImg, userStatus;
            userHref = document.querySelector("#Message_UserTxt_wrap a");
            userImg = document.querySelector('#Message_UserFoto');
            userStatus = document.querySelector('#Message_User_online');
            userHref.textContent = userName.textContent;
            userHref.href        = userName.href;
            userImg.style.backgroundImage = "url(" + backImage.textContent+ ")";
            userStatus.textContent = status;

            document.querySelector('#Message_btnSend').onclick = function () {
              if (textarea.textContent == "") {
                  showTxt.textContent = "Заполните все поля";
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
                            userAn:      idHtml,  
                            messageWord: 'отправить сообщение'
                        },
                        success: function (data) {
                          if (data.textContent != "") {
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
            }



          popupMessage_modal.onclick = closeMessageWindow;
          btn_closeMessageWindow.onclick = closeMessageWindow;
          function closeMessageWindow () {  
            popupMessage_modal.classList.remove('PopupMessage_modalActive');
            popupMessage.classList.remove('wrapperPopupMessageActive');
            htmlFixed.style.overflow = 'auto';
            showTxt.textContent = "";
            showTxt.classList.remove('show_messageStatusActive');
            hrefDialog.textContent = "";
            hrefDialog.href = "";
          }
      })
    });


});


