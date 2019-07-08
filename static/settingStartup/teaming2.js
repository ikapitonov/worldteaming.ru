window.addEventListener('DOMContentLoaded', function() {

  var url_user = location.href;
  var searchIduser = url_user.substring(url_user.lastIndexOf('teaming-') + 1);
  var parseInt_url = /\d+/;
  var mainId_user = searchIduser.match(parseInt_url);

var item_plus = document.querySelectorAll('.item_setting_Main2') || [];
    item_plus = [].slice.apply(item_plus);
    item_plus.forEach(function (element, i) {
    	element.querySelector('.settingDoing_first').addEventListener('click', function () {   

            var this_user = element.querySelector('.id_this_user_2').textContent;   
            var provekra = element.querySelector('.class_this_user_2').textContent;  
            var mainItem = element;    
            var aboutTask = element.querySelector('.this_user_about_task').innerHTML;
            var takeName  = element.querySelector('.forum_Com_right_UP a');
            var takeTask  = element.querySelector('.taskNumberItem2').textContent;
            var takeTaskHref  = element.querySelector('.tasHrefTaskItem2').href;
            var taskDo    = element.querySelector('.this_user_about_task').textContent;

            var openbar = this.parentNode.querySelector('.settingDoingOnclick_wrap');
                openbar.classList.toggle('settingDoingOnclick_wrapOpen');

            var iconS = this.querySelector('i');
                iconS.classList.toggle('transform180');

          this.parentNode.querySelector('.btnDELELE_setting').addEventListener('click', function () {
          	    openbar.classList.remove('settingDoingOnclick_wrapOpen');
          	    iconS.classList.remove('transform180');
          	    openStandart ();
          	    openC ("red",element);
                console.log(taskDo);
          	var textarea, btnMain, showTxt;
                textarea = document.querySelector('#textarea_blog');
                btnMain  = document.querySelector('#Message_btnSend');
                showTxt = document.querySelector('.show_messageStatus');

                btnMain.onclick = function () {
                	if (this.textContent == "Удалить") {
                		if (textarea.textContent == "") {
                        showTxt.textContent = "Заполните все поля";
			                  showTxt.classList.add('show_messageStatusActive');
			                  showTxt.style.color = "red";
			                  setTimeout( function () {
			                    showTxt.classList.remove('show_messageStatusActive');
			                    showTxt.textContent = "";
			                  } ,1000);
                		} else {
                      if (provekra == 2) {
                			   $.ajax ({
                              type: 'POST',
                              url: 'phpScripts/ajax/teamingDel2.php',
                              data: { 
                                      text:        textarea.innerHTML,
                                      numId:       parseInt(this_user),
                                      parent_ID:   parseInt(mainId_user),
                                      delComment:  "Удалить участника"
                                    },
                              success: function (data) {
                                if (data == 1) {
                                    var itemMainAppend1 = mainItem.querySelector('.item_forum_Com_left');
                                    var itemMainAppend2 = mainItem.querySelector('.item_forum_Com_right');
                                              itemMainAppend1.outerHTML = "";
                                              delete itemMainAppend1;
                                              itemMainAppend2.outerHTML = "";
                                              delete itemMainAppend2;  

                                    var userDel = "<div>Участник" + " <a class='item_a_main' href="+takeName.href+">"+takeName.textContent + "</a> " + "успешно <b>удален</b></div>";
                                    var aboutTaskReady;
                                    if (aboutTask == 1) {
                                       aboutTaskReady = "";
                                    } else {
                                       aboutTaskReady = "";
                                    }

                                    mainItem.className = "elemClassWhenDelete";
                                    mainItem.innerHTML = userDel + aboutTaskReady;

                                    var sectionTit = document.querySelector('#setting_groupWrap0');
                                        sectionTit.querySelector('small').textContent = "( -1 )";
                                        sectionTit.querySelector('a').textContent = "Обновить страницу";
                                     

                                    var popupMessage_modal, popupMessage, htmlFixed, btn_closeMessageWindow, windowSuccess;
                                        popupMessage_modal = document.querySelector('#PopupMessage_modal');
                                        popupMessage = document.querySelector('#wrapperPopupMessage');
                                        htmlFixed = document.querySelector('html');
                                        windowSuccess = document.querySelector('.animation_wrapperNONE');

                                    windowSuccess.classList.remove('animation_wrapperNONE');
                                    windowSuccess.classList.add('animation_wrapper');
                                    popupMessage.classList.remove('wrapperPopupMessageActive');
                                    htmlFixed.style.overflow = 'auto';
                                    setTimeout( function ()  {
                                        windowSuccess.classList.add('animation_wrapperNONE');
                                        windowSuccess.classList.remove('animation_wrapper');
                                        popupMessage_modal.classList.remove('PopupMessage_modalActive');
                                      },1100);

                                } else {
                                  alert("Что-то пошло не так :(");
                                }
                              } 
                          });
                      }
                		}
                	}
                }

          },false);

          this.parentNode.querySelector('.btnAddInic').addEventListener('click', function () {
          	    openbar.classList.remove('settingDoingOnclick_wrapOpen');
          	    iconS.classList.remove('transform180');
          	    openStandart ();
          	    openC ("blue",element,taskDo);
                console.log(taskDo);
          	var textarea, btnMain, showTxt;
                textarea = document.querySelector('#textarea_blog');
                btnMain  = document.querySelector('#Message_btnSend');
                showTxt = document.querySelector('.show_messageStatus');

            var radiosVal = document.querySelector('input[name="task"]:checked').value;
            var radiosValTrue;

                btnMain.onclick = function () {
                	if (this.textContent == "Добавить" ) {
                    if (taskDo == 1) {
                        radiosValTrue = document.querySelector('input[name="task"]:checked').value;
                    } else {
                        radiosValTrue = 2;
                    }
                		var inputVal  = document.querySelector('#popupWindow_wrap_Inic_wrap input').value;
                		if (radiosValTrue == 3 || inputVal == "") {
			                	showTxt.textContent = "Заполните все поля";
			                  showTxt.classList.add('show_messageStatusActive');
			                  showTxt.style.color = "red";
			                  setTimeout( function () {
			                    showTxt.classList.remove('show_messageStatusActive');
			                    showTxt.textContent = "";
			                  } ,1000);
			                  if (radiosValTrue == 3) {
			                  	var changeC = document.querySelector("#taskdoingqw");
			                    var colorStock = changeC.style.color;
			                  	    changeC.style.color = "red";
			                  	setTimeout( function () {
			                  		changeC.style.color = colorStock;
			                  	} ,1000);   
			                  }
                        if (inputVal == "") {
                        	var changeCO = document.querySelector("#aboutinictext");
			                    var colorStockO = changeCO.style.color;
			                  	    changeCO.style.color = "red";
			                  	setTimeout( function () {
			                  		changeCO.style.color = colorStockO;
			                  	} ,1000);
                        }

                	  } else {
                      if (provekra == 2) {
                	  	  $.ajax ({
                              type: 'POST',
                              url: 'phpScripts/ajax/teamingTo3.php',
                              data: { 
                                      tittle:      inputVal,
                                      radio:       radiosValTrue,
                                      text:        textarea.innerHTML,
                                      numId:       parseInt(this_user),
                                      parent_ID:   parseInt(mainId_user),
                                      addMan:      "Сделать инициатором"
                                    },
                              success: function (data) {
                                  var itemMainAppend1 = mainItem.querySelector('.item_forum_Com_left');
                                  var itemMainAppend2 = mainItem.querySelector('.item_forum_Com_right');
                                              itemMainAppend1.outerHTML = "";
                                              delete itemMainAppend1;
                                              itemMainAppend2.outerHTML = "";
                                              delete itemMainAppend2;  

                                    var userDel = "<div>Участник" + " <a class='item_a_main' href="+takeName.href+">"+takeName.textContent + "</a> " + "переведен в <b>Инициаторы</b></div>";
                                    var aboutTaskReady;
                                    if (aboutTask == 1) {
                                       aboutTaskReady = "";
                                    } else {
                                       aboutTaskReady = "";
                                    }
                                    mainItem.className = "elemClassWhenInsert";
                                    mainItem.innerHTML = userDel + aboutTaskReady;

                                    var sectionTit = document.querySelector('#setting_groupWrap1');
                                        sectionTit.querySelector('small').textContent = "( +1 )";
                                        sectionTit.querySelector('a').textContent = "Обновить страницу";
                                     

                                    var popupMessage_modal, popupMessage, htmlFixed, btn_closeMessageWindow, windowSuccess;
                                        popupMessage_modal = document.querySelector('#PopupMessage_modal');
                                        popupMessage = document.querySelector('#wrapperPopupMessage');
                                        htmlFixed = document.querySelector('html');
                                        windowSuccess = document.querySelector('.animation_wrapperNONE');

                                    windowSuccess.classList.remove('animation_wrapperNONE');
                                    windowSuccess.classList.add('animation_wrapper');
                                    popupMessage.classList.remove('wrapperPopupMessageActive');
                                    htmlFixed.style.overflow = 'auto';
                                    setTimeout( function ()  {
                                        windowSuccess.classList.add('animation_wrapperNONE');
                                        windowSuccess.classList.remove('animation_wrapper');
                                        popupMessage_modal.classList.remove('PopupMessage_modalActive');
                                      },1100);
                              }
                        });
                      }
                	  }
                	}  
                }
          });






         function openStandart () {
         	var textarea;
                textarea = document.querySelector('#textarea_blog');
             var popupMessage_modal, popupMessage, htmlFixed, btn_closeMessageWindow;
		            popupMessage_modal = document.querySelector('#PopupMessage_modal');
		            popupMessage = document.querySelector('#wrapperPopupMessage');
		            htmlFixed = document.querySelector('html');
		            btn_closeMessageWindow = document.querySelector('#btn_closeMessageWindow');
		            //показываем элементы
		            popupMessage_modal.classList.add('PopupMessage_modalActive');
		            popupMessage.classList.add('wrapperPopupMessageActive');
		            htmlFixed.style.overflow = 'hidden';

		            textarea.focus();





		      popupMessage_modal.onclick = closeMessageWindow;
          btn_closeMessageWindow.onclick = closeMessageWindow;
	          function closeMessageWindow () {  
		            popupMessage_modal.classList.remove('PopupMessage_modalActive');
		            popupMessage.classList.remove('wrapperPopupMessageActive');
		            htmlFixed.style.overflow = 'auto';
	          }
         }


         function openC (its,parent,task) {
            var userName, tittle, hrefUser, textAb, iconC, upC, btnC, inputs, main,navBar;
                userName = parent.querySelector('.forum_Com_right_UP a').textContent;
                hrefUser = parent.querySelector('.forum_Com_right_UP a').href;
                tittle   = document.querySelector('#PopupMessage_UP_left h3');
                textAb   = document.querySelector('#popupWindow_wrapAbout');
                iconC    = document.querySelector('#btn_closeMessageWindow');
                upC      = document.querySelector('#PopupMessage_UP');
                btnC     = document.querySelector('#Message_btnSend');
                inputs   = document.querySelector('#popupWindow_wrap_Inic');
                main     = document.querySelector('#wrapperPopupMessage');
                navBar   = document.querySelector('#popupWindow_Inic_taskWrap');

            if (its == "red") {
               tittle.textContent = "Удаление участника";
               textAb.innerHTML = "<b>Удаляя</b> участника - <a href="+ "'" + hrefUser + "'" + ">"+ userName +"</a>, система оставит запись на основной странице стартапа. <b>Подробно</b> опишите причины удаления, дабы не терять доверие команды.";
               iconC.style.backgroundColor = "#DA1F1F";
               upC.style.backgroundColor   = "#DA1F1F";
               btnC.style.backgroundColor  = "#DA1F1F";
               btnC.textContent = "Удалить";
               inputs.style.display = "none";
               main.style.width = 560 + "px";

            } else {
                 tittle.textContent = 'Перевести в "Инициаторы"';
		             textAb.innerHTML = "Переводя участника в <b>инициаторы</b>, вы даете ему возможность управления стартапом. Расскажите об этом человеке:";
		             iconC.style.backgroundColor = "#3498DB";
		             upC.style.backgroundColor   = "#3498DB";
		             btnC.style.backgroundColor  = "#3498DB";
		             btnC.textContent = "Добавить";
		             inputs.style.display = "flex";
		             main.style.width = 700 + "px";
                 if (task == 1) {
                  navBar.style.display = "block";
                 } else {
                    navBar.style.display = "none;";
                 }
            }
         }



      });
    });  

});









