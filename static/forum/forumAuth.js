window.addEventListener('DOMContentLoaded', function() {


var textarea = document.querySelector('#textarea_blog');
var showTxt = document.querySelector('.show_messageStatus');
// var btnMessage_send = document.querySelector('#Message_btnSend');
var radios = document.querySelector('.popupFunc_radios_wrapper');
var radiosTask = document.querySelector('.popupFunc_radiosTask_wrapper');
var counter = 0;


var btnPopup = document.querySelectorAll('.forum_commentPopup') || [];
    btnPopup = [].slice.apply(btnPopup);
    btnPopup.forEach(function (element, i) {
      element.onclick = function () {
        var btn_onclick_do = document.querySelector('.btn_onclick_do');
            btn_onclick_do.classList.add('sendForumComment');
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

        var txtInBtn = element.querySelector('span').textContent;



        var urlIdeaPerem = location.href.split('_idea_')[1];
        if (urlIdeaPerem != 'undefined' && urlIdeaPerem != null) {
        var urlIdea = urlIdeaPerem.split('-')[0];
        if (urlIdea > 0) {
          radios.style.display = "flex";
          changeTextT(1);
          var urlNumber = urlIdea;
          document.querySelector('.sendForumComment').onclick = function () {
              if (textarea.textContent == "") {
                  showTxt.textContent = "Заполните поле";
                  showTxt.classList.add('show_messageStatusActive');
                  showTxt.style.color = "red";
                  setTimeout( function () {
                    showTxt.classList.remove('show_messageStatusActive');
                    showTxt.textContent = "";
                  } ,1000);
              } else {
                  var radiosVal = document.querySelector('input[name="btnIdea"]:checked').value;
                  ajaxCom (urlIdea,parseInt(radiosVal),1);
                }
          }
        }}
        var urlTaskPerem = location.href.split('_task_')[1];
        if (urlTaskPerem != 'undefined' && urlTaskPerem != null) {
        var urlTask = urlTaskPerem.split('-')[0];
        if (urlTask > 0) {
          changeTextT(3);
          radiosTask.style.display = "flex";
          var urlNumber = urlTask;
          document.querySelector('.sendForumComment').onclick = function () {
              if (textarea.textContent == "") {
                  showTxt.textContent = "Заполните поле";
                  showTxt.classList.add('show_messageStatusActive');
                  showTxt.style.color = "red";
                  setTimeout( function () {
                    showTxt.classList.remove('show_messageStatusActive');
                    showTxt.textContent = "";
                  } ,1000);
              } else {
                    if (document.querySelector('input[name="btnTask"]:checked') == null) {
                        ajaxCom (urlTask,4,2);
                    } else {
                        var radiosTaskVal = document.querySelector('input[name="btnTask"]:checked').value;
                        ajaxCom (urlTask,parseInt(radiosTaskVal),2);
                    }
                }
          }
        }}
        var urlDocsPerem = location.href.split('_docs_')[1];
        if (urlDocsPerem != 'undefined' && urlDocsPerem != null) {
        var urlDocs = urlDocsPerem.split('-')[0];
        if (urlDocs > 0) {
          changeTextT(2);
          var urlNumber = urlDocs;
          document.querySelector('.sendForumComment').onclick = function () {
              if (textarea.textContent == "") {
                  showTxt.textContent = "Заполните поле";
                  showTxt.classList.add('show_messageStatusActive');
                  showTxt.style.color = "red";
                  setTimeout( function () {
                    showTxt.classList.remove('show_messageStatusActive');
                    showTxt.textContent = "";
                  } ,1000);
              } else {
                  ajaxCom (urlDocs,0,3);
                }
          }
        }}




        function changeTextT (num) {
          var h3Popup, underStartup, hrefTopic; 
              h3Popup = document.querySelector('#PopupMessage_UP_left h3');
              underStartup = document.querySelector('#Message_User_online');
              hrefTopic = document.querySelector('#functions_href_to_topic a');

          if (num == 1) {
            h3Popup.textContent = "Комментарий к идеи";
            underStartup.textContent = "Что вы думаете о предложенной идеи? Оцените ее:";
            hrefTopic.innerHTML = "";
          } else {}
          if (num == 2) {
            h3Popup.textContent = "Комментарий к документу";
            underStartup.textContent = "Комментарий к документу";
            hrefTopic.innerHTML = "";
          } else {}
          if (num == 3) {
            h3Popup.textContent = "Комментарий к задаче";
            underStartup.innerHTML = "<span class='taskComRewrite'>Заинтересовала ли вас задача? Есть ли желание поучаствовать?</span>";
            hrefTopic.innerHTML = "";
          }

        }


        function ajaxCom (utl,think,selector) {
          $.ajax ({
              type: 'POST',
              url: 'phpScripts/ajax/forumSaveCom.php',
              data: { idPost:      parseInt(utl),
                      select:      think,
                      text:        textarea.innerHTML, 
                      its:         selector,
                      namePost:    "Передать комментарий для форума"
                    },
              success: function (data) {
                counter = counter + 1;
                var windowSuccess = document.querySelector('.animation_wrapperNONE');
                windowSuccess.classList.remove('animation_wrapperNONE');
                windowSuccess.classList.add('animation_wrapper');

                closeMessageWindow (); 
                textarea.innerHTML = null;
                popupMessage_modal.classList.add('PopupMessage_modalActive');
                setTimeout( function ()  {
                  windowSuccess.classList.add('animation_wrapperNONE');
                  windowSuccess.classList.remove('animation_wrapper');
                  popupMessage_modal.classList.remove('PopupMessage_modalActive');
                  // window.scrollTo(0,document.querySelector('#startup_wrapper_left').scrollHeight);
                  document.querySelector('.newCommentJS').scrollIntoView({block: "center", behavior: "smooth"});

                  var blockHref = document.querySelector('.newCommentJS');
                      blockHref.style.display = "flex";
                      blockHref.querySelector('b').innerHTML = counter;

                  var deleteimg = document.querySelector('#forum_how_ComTxt span');
                      if (deleteimg.innerHTML == 0) {
                        var deleteImgYes = document.querySelector('.notFound_pickImg');
                        deleteImgYes.outerHTML = "";
                        delete deleteImgYes;
                      }
                      deleteimg.innerHTML = counter;

                },1100);
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
            radios.style.display = "none";
            radiosTask.style.display = "none";
            btn_onclick_do.classList.remove('sendForumComment');
          }
      }    
    });  


  var likeMain = document.querySelector('#btnLikeForumMain');
  likeMain.onclick = function () {
    var icon = this.querySelector('i');
        if (icon.classList.contains('material-icons_favorite')) {
          icon.classList.remove('material-icons_favorite');
        } else { icon.classList.add('material-icons_favorite'); }  

        var urlIdeaPerem = location.href.split('_idea_')[1];
        if (urlIdeaPerem != 'undefined' && urlIdeaPerem != null) {
        var urlIdea = urlIdeaPerem.split('-')[0];
        if (urlIdea > 0) { ajaxLike (parseInt(urlIdea),1) } else {}}

        var urlDocsPerem = location.href.split('_docs_')[1];
        if (urlDocsPerem != 'undefined' && urlDocsPerem != null) {
        var urlDocs = urlDocsPerem.split('-')[0];
        if (urlDocs > 0) { ajaxLike (parseInt(urlDocs),2) } else {}}

        var urlTaskPerem = location.href.split('_task_')[1];
        if (urlTaskPerem != 'undefined' && urlTaskPerem != null) {
        var urlTask = urlTaskPerem.split('-')[0];
        if (urlTask > 0) { ajaxLike (parseInt(urlTask),3) } else {}}

        function ajaxLike (nubmer,select) {
          var how_likes = document.querySelector('#forum_howLikes_Main1');
            $.ajax ({
                type: 'POST',
                url: 'phpScripts/ajax/SectionMainLikePost.php',
                data: { 
                        nubmerPost:  nubmer, 
                        its:         select,
                        likePost:    'Лайкнуть с форума'
                      },
                success: function (data) { 
                  if ( data == 'плюс' ) {
                    how_likes.innerHTML = parseInt(how_likes.innerHTML) + 1;
                  } else {
                      how_likes.innerHTML = parseInt(how_likes.innerHTML) - 1;
                  }
                 }                 
            });
        }    
  }


});