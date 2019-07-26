window.scrollTo(0,document.body.scrollHeight);
window.addEventListener('DOMContentLoaded', function() {

  var url_user, searchIduser, parseInt_url, mainId_user;
      url_user = location.href;
      searchIduser = url_user.substring(url_user.lastIndexOf('messages-') + 1);
      parseInt_url = /\d+/;
      mainId_user = searchIduser.match(parseInt_url);

  var flag_new_date = 0;
          
	function createMessage (text,date,val,its) {

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

    // новый элемент от li_wrapper
    var item_message = document.createElement('div');
    mainItem_message.appendChild(item_message);
    item_message.classList.add('Messanger_item_Inherit');
    item_message.classList.add('Messanger_item_Inherit_right');

      // новый элемент от item_message
      var item_text = document.createElement('div');
      item_message.appendChild(item_text);
      item_text.classList.add('Messanger_item_Text');
      item_text.classList.add('txtControl');
      item_text.innerHTML = text;

      // новый элемент от item_message
      var item_wrap_date_icon = document.createElement('div');
      item_message.appendChild(item_wrap_date_icon);
      item_wrap_date_icon.classList.add('Messanger_wrapper_Date_Post');

        // новый элемент от item_wrap_date_icon
        var item_date = document.createElement('div');
        item_wrap_date_icon.appendChild(item_date);
        item_date.classList.add('Messanger_item_Date_its_me');
        item_date.textContent = date;

        // новый элемент от item_wrap_date_icon
        var item_wrap_icon = document.createElement('div');
        item_wrap_date_icon.appendChild(item_wrap_icon);
        item_wrap_icon.classList.add('Messanger_item_Post_TO');

          // новый элемент от item_wrap_icon
          var item_icon = document.createElement('i');
          item_wrap_icon.appendChild(item_icon);
          item_icon.classList.add('material-icons');
          item_icon.textContent = 'update';

          var another_user = parseInt(document.querySelector('#messages_another_user').innerHTML);  

          $.ajax ({
            type: 'POST',
            url: 'phpScripts/ajax/messageSend.php',
            data: { mes_text:      text,
                    valueT:        val,
                    to_who:        another_user, 
                    itsT:          its,
                    parent_id:     parseInt(mainId_user),
                    send_message:  'отправить сообщение с messages.php'
                },
            success: function (data) { 
              if ( data == 'Отправлено!' ) {
                item_icon.textContent = 'done';
              }
              document.body.scrollTop = document.body.scrollHeight;
              window.scrollTo(0,document.body.scrollHeight);
            }
          });    	
  }


  function getTime () {

    var date = new Date;

    function getMinuttes (result_minutes) {
      var number = date.getMinutes();
      if (number < 10) {
        result_minutes = '0' + number;
      } else {result_minutes = number;}
      return result_minutes;
    }

    result =  date.getHours() + ':' + getMinuttes();
    return result;
  }


  var btnMesSend_big, textarea_big;
      btnMesSend_big = document.querySelector('#Message_btnSend');
      textarea_big = document.querySelector('#textarea_blog');

      btnMesSend_big.onclick = function () {
      	
      	if (textarea_big.textContent == '') {}
        else {
      		createMessage (textarea_big.innerHTML, getTime(),textarea_big.textContent,1);
      		textarea_big.innerHTML = '';
      	}
      }


  var btnMesSend_small, textarea_small;
      btnMesSend_small = document.querySelector('#Message_btnSend_small');
      textarea_small = document.querySelector('#message_textarea_small');

      btnMesSend_small.onclick = function () {
      	if ($("#message_textarea_small").val().trim().length < 1) {}
      	else {
      		createMessage (textarea_small.value.trim(), getTime(),textarea_small.value,0);
      		textarea_small.value = '';
          textarea_small.style.height = 20 + "px";
      	}
      }


  textarea_small.onkeydown = function(e){

    if (e.keyCode == 13 && !e.shiftKey) {
      if ($("#message_textarea_small").val().trim().length < 1) {}
        else {
          createMessage (textarea_small.value.trim(), getTime(),textarea_small.value,0);
          textarea_small.value = '';
          textarea_small.style.height = 20 + "px";
      }
      e.preventDefault();
    }
  }


  var inProgress = false;
  var startFrom = 50;
  var flag_last_date = document.querySelector('#print_last_date').innerHTML;
  var all_items = document.querySelectorAll('.Messanger_item');
  
  if (all_items.length == 50) {
    $(window).scroll(function() {
      if ($(window).scrollTop() == 0 && inProgress == false) {

        var temp_scrolling = document.body.scrollHeight;

          $.ajax({
                  url: 'phpScripts/ajaxLoad/addMessages.php',
                  method: 'POST',
                  data: { 
                          startFrom:   startFrom,
                          url_get:     parseInt(mainId_user),
                          word:        "дай сообщения" 
                        },
                  beforeSend: function() {
                    inProgress = true;
                  }

          }).done(function(data){
                  data = jQuery.parseJSON(data);

                  if (data.length > 0) {
                    for (var i = 0; i < data.length; i++) {

                        if (i == 0) {
                          if (format_flag_date(data[i]['date']) != format_flag_date(flag_last_date)) {
                            var this_dates = date_wrapper(flag_last_date);
                              create_date_item('Messanger_wrapperITEMS_ul', this_dates);
                          }
                        }

                        var mainItem_message = document.createElement('li');
                        document.getElementById('Messanger_wrapperITEMS_ul').appendChild(mainItem_message);
                        mainItem_message.classList.add('Messanger_item');

                          var item_message = document.createElement('div');
                          mainItem_message.appendChild(item_message);
                          item_message.classList.add('Messanger_item_Inherit');
                          if (data[i]['to_who_mes'] != document.querySelector('#messages_another_user').textContent) {
                            item_message.classList.add('Messanger_item_Inherit_left');
                          } else {
                            item_message.classList.add('Messanger_item_Inherit_right');
                          }
                            var item_text = document.createElement('div');
                            item_message.appendChild(item_text);
                            item_text.classList.add('Messanger_item_Text');
                            item_text.classList.add('txtControl');
                            item_text.innerHTML = data[i]['text'];
                            if (data[i]['to_who_mes'] != document.querySelector('#messages_another_user').textContent) {
                                var item_date_not_me = document.createElement('div');
                                item_message.appendChild(item_date_not_me);
                                item_date_not_me.classList.add('Messanger_item_Date_not_me');
                                item_date_not_me.textContent = ajax_date(data[i]['date']);

                            } else {
                                var item_wrap_date_icon = document.createElement('div');
                                item_message.appendChild(item_wrap_date_icon);
                                item_wrap_date_icon.classList.add('Messanger_wrapper_Date_Post');

                                  var item_date_date = document.createElement('div');
                                  item_wrap_date_icon.appendChild(item_date_date);
                                  item_date_date.classList.add('Messanger_item_Date_not_me');
                                  item_date_date.textContent = ajax_date(data[i]['date']);

                                  var item_wrap_icon = document.createElement('div');
                                  item_wrap_date_icon.appendChild(item_wrap_icon);
                                  item_wrap_icon.classList.add('Messanger_item_Post_TO');

                                    var item_icon = document.createElement('i');
                                    item_wrap_icon.appendChild(item_icon);
                                    item_icon.classList.add('material-icons');
                                    if (data[i]['reed_mes'] == 0) {
                                      item_icon.textContent = 'done';
                                    } else {
                                      item_icon.classList.add('material-icons_reedIt');
                                      item_icon.textContent = 'check_box';
                                    }
                            }


                        // алгоритм вставки информации о нынешней дате
                        var take_date = data[i]['date'].split('-');
                            take_date = parseInt(take_date[2].split(' ')[0]);

                        var next_date = data[i + 1];
                            if (next_date != 'undefined' && next_date != null) {
                              next_date = next_date['date'].split('-');
                              next_date = parseInt(next_date[2].split(' ')[0]);
                              if (next_date != take_date) {
                                var this_date = date_wrapper(data[i]['date']);
                                    create_date_item('Messanger_wrapperITEMS_ul', this_date);
                              }
                            } else {
                              flag_last_date = data[i]['date'];
                            }


                    }
                    startFrom = startFrom + 50;
                      inProgress = false;
                    window.scrollTo(0,document.body.scrollHeight - temp_scrolling - 50);
                  } else {
                    document.querySelector('.wrapper_gif_loader').style.display = 'none';
                    var this_dater = date_wrapper(flag_last_date);
                        create_date_item('Messanger_wrapperITEMS_ul', this_dater);
                  }

              });
      }
    });
  }

  function ajax_date(date) {
    var temp_1 = date.split(':')[0].split(' ')[1];
    var temp_2 = date.split(':')[1];
    return temp_1 + ":" + temp_2;
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


  function date_wrapper (date) {
    date = date.split('-');

    var month = date[1];
    var word = "";

    if (month == 1) {
      word = "Января";
    } else if (month == 2) {
      word = "Февраля";
    } else if (month == 3) {
      word = "Марта";
    } else if (month == 4) {
      word = "Апреля";
    } else if (month == 5) {
      word = "Мая";
    } else if (month == 6) {
      word = "Июня";
    } else if (month == 7) {
      word = "Июля";
    } else if (month == 8) {
      word = "Августа";
    } else if (month == 9) {
      word = "Сентября";
    } else if (month == 10) {
      word = "Октября";
    } else if (month == 11) {
      word = "Ноября";
    } else if (month == 12) {
      word = "Декабря";
    }

    return "От" + " " + parseInt(date[2].split(' ')[0]) + " " + word;
  }


  function format_flag_date(date) {
    date = date.split('-');

    var take_date = date[2].split(' ')[0];
    return parseInt(date[0]) + parseInt(date[1]) + parseInt(take_date);
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
  
});





