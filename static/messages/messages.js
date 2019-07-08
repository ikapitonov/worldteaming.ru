window.scrollTo(0,document.body.scrollHeight);
window.addEventListener('DOMContentLoaded', function() {

  var url_user, searchIduser, parseInt_url, mainId_user;
      url_user = location.href;
      searchIduser = url_user.substring(url_user.lastIndexOf('messages-') + 1);
      parseInt_url = /\d+/;
      mainId_user = searchIduser.match(parseInt_url);
          

	function createMessage (text,date,val,its) {
	  var mainItem_message = document.createElement('li');
    document.getElementById('Messanger_creater_wrap').appendChild(mainItem_message);
    mainItem_message.classList.add('Messanger_item');
    var li_wrapper = document.querySelectorAll('.Messanger_item');

    // новый элемент от li_wrapper
    var item_message = document.createElement('div');
    li_wrapper[li_wrapper.length - 1].appendChild(item_message);
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
                console.log(data);
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
      	if (textarea_small.value == '') {}
      	else {
      		createMessage (textarea_small.value, getTime(),textarea_small.value,0);
      		textarea_small.value = '';
          textarea_small.style.height = 20 + "px";
      	}
      }


  var inProgress = false;
  var startFrom = 50;

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

                      var mainItem_message = document.createElement('li');
                      document.getElementById('Messanger_wrapperITEMS_ul').appendChild(mainItem_message);
                      mainItem_message.classList.add('Messanger_item');
                      var li_wrapper = document.querySelectorAll('.Messanger_item');  

                        var item_message = document.createElement('div');
                        li_wrapper[li_wrapper.length - 1].appendChild(item_message);
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
                  }
                  startFrom = startFrom + 50;
                  if (startFrom > 0) {
                    inProgress = false;
                  }
                  window.scrollTo(0,document.body.scrollHeight - temp_scrolling - 50);
                } else {
                  document.querySelector('.wrapper_gif_loader').style.display = 'none';
                }

            });
    }
  });

  function ajax_date(date) {
    var temp_1 = date.split(':')[0].split(' ')[1];
    var temp_2 = date.split(':')[1];
    return temp_1 + ":" + temp_2;
  }
  
});