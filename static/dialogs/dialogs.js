window.addEventListener('DOMContentLoaded', function() {


	var url_user = location.href;
	var url_user_temp = url_user.split('-');
	var url_user_rubb = url_user.split('&search=');
	var mainId_user, search_word;
		if (url_user_rubb != 'undefined' && url_user_rubb != null) {
			mainId_user = parseInt(url_user_rubb[0].split('-')[1]);
			search_word = url_user_rubb[1];
		} else {
			mainId_user = parseInt(url_user_temp[0]);
			search_word = "";
		}

  var imgStock = "avatarsUsers/itsMe.jpg";

  document.querySelector('.labelForReset').addEventListener('click', function () {
  	this.parentNode.querySelector('.search_inputMain').value = "";
  })

	var inProgress = false;
	var startFrom = 20;

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress && mainId_user != 'indefined') {

		        $.ajax({
		            url: 'phpScripts/ajaxLoad/addDialogs.php',
		            method: 'POST',
		            async: false, 
		            data: { 
		            		startFrom:   startFrom,
		            		word_search: search_word,
		            		word:   	 "дай диалоги" 
		            			},
		            beforeSend: function() {
		            	inProgress = true;
		            },
		            success: function (data) {

			            data = JSON.parse(data);

			            if (data.length > 0) {
			            	for (var i = 0; i < data.length; i++) {

			            		var mainItem_a = document.createElement('a');
	       							document.getElementById('append_ajax').appendChild(mainItem_a);
	       							mainItem_a.classList.add('main_dialog_item');
	       							if (data[i]['reed'] == 0 && data[i]['from_who'] != mainId_user)
	       								mainItem_a.classList.add('main_dialog_item_not_reed');
	       							mainItem_a.href = "messages-" + data[i].id;
	       							var mainItem = document.querySelectorAll('.main_dialog_item');

	       							var item_blog_wrap = document.createElement('div');
	    								mainItem[mainItem.length - 1].appendChild(item_blog_wrap);
	    								item_blog_wrap.classList.add('div_item_dialog');

		    								var item_dialog_fotoUser = document.createElement('div');
		    								item_blog_wrap.appendChild(item_dialog_fotoUser);
		    								item_dialog_fotoUser.classList.add('item_dialog_fotoUser');

		    								var flag;
		    								if (data[i]['second_user'] == mainId_user) {
		    									flag = data[i]['one_user'];
		    								}
		    								else {
		    									flag = data[i]['second_user'];
		    								}


		    									var item_dialog_FOTO = document.createElement('div');
		    									item_dialog_fotoUser.appendChild(item_dialog_FOTO);
		    									item_dialog_FOTO.classList.add('item_dialog_FOTO');

		    								var item_dialog_info = document.createElement('div');
		    								item_blog_wrap.appendChild(item_dialog_info);
		    								item_dialog_info.classList.add('item_dialog_info');

		    									var item_dialog_wrapInfo = document.createElement('div');
		    									item_dialog_info.appendChild(item_dialog_wrapInfo);
		    									item_dialog_wrapInfo.classList.add('item_dialog_wrapInfo');

		    										var dialogs_NAME = document.createElement('div');
		    										item_dialog_wrapInfo.appendChild(dialogs_NAME);
		    										dialogs_NAME.classList.add('dialogs_NAME');

		    									  $.ajax({
				    									type: 'POST',
				    									url: 'phpScripts/ajaxLoad/returnUser.php',
				    									async: false, 
				    									data: { 
											            		id:    flag,
											            		word:  "дай юзера" 
											            	},
						    							success: function (user_info) {
						    								user_info = JSON.parse(user_info)[0];
						    								dialogs_NAME.textContent = user_info['name'] + " " + user_info['lastname'];
						    								if (user_info['url_avatar'] == null) {
						    									item_dialog_FOTO.style.backgroundImage = "url(" + imgStock + ")";
						    								} else {
						    									item_dialog_FOTO.style.backgroundImage = "url(" + "avatarsUsers/" + user_info['url_avatar'] + ")";
						    								}
						    							}
			            					});


		    										var dialogs_DATE = document.createElement('div');
		    										item_dialog_wrapInfo.appendChild(dialogs_DATE);
		    										dialogs_DATE.classList.add('dialogs_DATE');
		    										dialogs_DATE.textContent = beauty_date(data[i].Date);
		    										

		    									var item_dialog_infoMesHow = document.createElement('div');
		    									item_dialog_info.appendChild(item_dialog_infoMesHow);
		    									item_dialog_infoMesHow.classList.add('item_dialog_infoMesHow');

		    										var dialogs_MESSAGE = document.createElement('div');
		    										item_dialog_infoMesHow.appendChild(dialogs_MESSAGE);
		    										dialogs_MESSAGE.classList.add('dialogs_MESSAGE');
		    										if (data[i]['reed'] == 0 && data[i]['from_who'] == mainId_user)
		    											dialogs_MESSAGE.classList.add('dialogs_MESSAGE_text_not_reed');
		    										if (data[i]['from_who'] == mainId_user)
		    											dialogs_MESSAGE.innerHTML = "<div class='dialogs_MESSAGE_me'>Вы:</div>";

			    										var dialogs_MESSAGE_text = document.createElement('div');
			    										dialogs_MESSAGE.appendChild(dialogs_MESSAGE_text);
			    										dialogs_MESSAGE_text.classList.add('dialogs_MESSAGE_text');
			    										dialogs_MESSAGE_text.innerHTML = data[i]['last_message'];

														if (data[i]['reed'] == 0 && data[i]['from_who'] != mainId_user) {
															var item_dialog_NOREED = document.createElement('div');
		    											item_dialog_infoMesHow.appendChild(item_dialog_NOREED);
		    											item_dialog_NOREED.classList.add('item_dialog_NOREED');
		    											item_dialog_NOREED.innerHTML = "<span>" + data[i]['how_many_reed'] + "</span>";
		    										}
			            	}

				            inProgress = false;
				            startFrom += 20;
			        	} else {
			        		var loader = document.querySelector('.wrapper_gif_loader');
			        		if (loader != 'undefined' && loader != null) {
			        			loader.style.display = 'none';
			        		}
			        	}
			        }
		      	});
        }
    });

		function beauty_date(date) {

				var tmpMonth = date.split('-')[1];
				var tmpDay = date.split('-')[2].split(' ')[0];
				var tmpTime = date.split(' ')[1].split(':');

				return getTrueDay(tmpDay) + " " + getTrueMonth(tmpMonth) + " в " + tmpTime[0] + ":" + tmpTime[1];

				function getTrueDay (day) {
					if (day.charAt(0) == '0')
						return day.substr(1);
					return day;
				}

				function getTrueMonth (month) {
				  if (month == 1) {
				  	return "января";
				  } else if (month == 2) {
				  	return "февраля";
				  } else if (month == 3) {
				  	return "марта";
				  } else if (month == 4) {
				  	return "апреля";
				  } else if (month == 5) {
				  	return "мая";
				  } else if (month == 6) {
				  	return "июня";
				  } else if (month == 7) {
				  	return "июля";
				  } else if (month == 8) {
				  	return "августа";
				  } else if ($month == 9) {
				  	return "сентября";
				  } else if (month == 10) {
				  	return "октября";
				  } else if (month == 11) {
				  	return "ноября";
				  } else if (month == 12) {
				  	return "декабря";
				  } 
				}
		}

});