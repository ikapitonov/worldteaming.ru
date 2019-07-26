window.addEventListener('DOMContentLoaded', function() {

	var this_url = location.href.split('messages-')[1];
  var flag_new_date = 0;

	function creater(text, date) {

    var ticket_date = document.querySelectorAll('.date_ticker_wrap');
      ticket_date = ticket_date[0].innerText;
      ticket_date = parseInt(ticket_date.replace(/\D+/g,""));
  
    if (getMonth_Day(1) != ticket_date && flag_new_date == 0) {
        create_date_item('Messanger_creater_wrap', 0);
        flag_new_date = 1;
    }

			var mainItem_message = document.createElement('li');
			document.getElementById('Messanger_creater_wrap').appendChild(mainItem_message);
			mainItem_message.classList.add('Messanger_item');
      mainItem_message.classList.add('Messanger_item_load_new');

				var item_message = document.createElement('div');
				mainItem_message.appendChild(item_message);
				item_message.classList.add('Messanger_item_Inherit');
				item_message.classList.add('Messanger_item_Inherit_left');

					var item_text = document.createElement('div');
					item_message.appendChild(item_text);
					item_text.classList.add('Messanger_item_Text');
					item_text.classList.add('txtControl');
					item_text.innerHTML = text;

						var item_date_not_me = document.createElement('div');
						item_message.appendChild(item_date_not_me);
						item_date_not_me.classList.add('Messanger_item_Date_not_me');
						item_date_not_me.textContent = date;

        var new_mess = document.createElement('div');
        mainItem_message.appendChild(new_mess);
        new_mess.classList.add('messages_loading_new');

          var new_mess_icon = document.createElement('i');
          new_mess.appendChild(new_mess_icon);
          new_mess_icon.textContent = "fiber_new";
          new_mess_icon.classList.add('material-icons-outlined');

          setTimeout(function () {
              new_mess_icon.style.transition = 1 + 's';
              new_mess_icon.style.opacity = 0;
              setTimeout(function () {
                  new_mess_icon.outerHTML = "";
                  delete new_mess_icon;
              },1000);
          },1000);

	}

	setInterval(function() {	
			$.ajax({
          url: 'phpScripts/ajaxLoad/new_messages.php',
          method: 'POST',
          data: { 
          				url:  parseInt(this_url),
                  word: "новые" 
               	}
	    }).done(function(data){
	    	if (data != 0) {				
	    		data = jQuery.parseJSON(data);

	    		var icon = document.querySelectorAll('.Messanger_item_Inherit_right .material-icons');
	    			if (icon != 'undefined' && icon != null) {
		    				for (var j = 0; j < icon.length; j++) {
		    					icon[j].innerHTML = "check_box";
		    					icon[j].classList.add('material-icons_reedIt');
		    				}
	    			}

          var jsonArr = new Array(data.length);

	    		for (var i = 0; i < data.length; i++) {
	    			creater(data[i]['text'], ajax_date(data[i]['date']));

            jsonArr[i] = data[i]['id_mes'];
	    		}
          window.scrollTo(0,document.body.scrollHeight);

            //  ajax сообщение прочитано 
            setTimeout(function () {

                $.ajax({
                    url: 'phpScripts/ajax/message_reed.php',
                    method: 'POST',
                    data: {
                              json:   JSON.stringify(jsonArr),
                              dialog: this_url,
                              word:   "Прочитано"
                          },
                    dataType: 'json',
                }).done(function(mes_update){
                    console.log(mes_update);
                });

            }, 1000);
	    	} 
	    });
	}, 2000);


	function ajax_date(date) {
		var temp_1 = date.split(':')[0].split(' ')[1];
		var temp_2 = date.split(':')[1];
		return temp_1 + ":" + temp_2;
  }


  function create_date_item(where, time) {

  	var date_ticker_wrap = document.createElement('li');
  	document.getElementById(where).appendChild(date_ticker_wrap);
    date_ticker_wrap.classList.add('date_ticker_wrap');

      var date_ticker_line = document.createElement('div');
      date_ticker_wrap.appendChild(date_ticker_line);
      date_ticker_line.classList.add('date_ticker_line');

      var date_ticker_item = document.createElement('div');
      date_ticker_wrap.appendChild(date_ticker_item);
      date_ticker_item.classList.add('date_ticker_item');
      if (time == 0) {
        date_ticker_item.innerHTML = getMonth_Day(0);
      } else {
        date_ticker_item.innerHTML = time;
      }

  }


  function getMonth_Day (day) {
    var date = new Date;

    var month =new Array(12);
    month[0]="Января";
    month[1]="Февраля";
    month[2]="Марта";
    month[3]="Апреля";
    month[4]="Мая";
    month[5]="Июня";
    month[6]="Июля";
    month[7]="Августа";
    month[8]="Сентября";
    month[9]="Октября";
    month[10]="Ноября";
    month[11]="Декабря";

    if (day == 1) {
      return date.getDate();
    }
    result = 'От' + ' ' + parseInt(date.getDate()) + ' ' + month[date.getMonth()];
    return result;
  }

});