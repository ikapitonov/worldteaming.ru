window.addEventListener('DOMContentLoaded', function() {

  var url_user = location.href;
  var mainId_user = url_user.split('-')[1];

  var userName = document.querySelector('.item_h1_main').textContent;
  var imgSrc = document.querySelector('#userImgId').src;

	function createItemBlog (date,text) {
	  var mainItem_Li = document.createElement('li');
    document.getElementById('append_chind_ul_creater').appendChild(mainItem_Li);
    mainItem_Li.classList.add('item_blog_li_creater');
    var mainItem = document.querySelectorAll('.item_blog_li_creater');

    // новый элемент от li_wrapper
    var item_blog_wrap_up = document.createElement('div');
    mainItem[mainItem.length - 1].appendChild(item_blog_wrap_up);
    item_blog_wrap_up.classList.add('item_blog_wrap_up');

      // новый элемент от item_blog_wrap_up
      var item_blog_wrap_info = document.createElement('div');
      item_blog_wrap_up.appendChild(item_blog_wrap_info);
      item_blog_wrap_info.classList.add('item_blog_wrap_info');

        // новый элемент от item_blog_wrap_info
        var item_blog_wrap_foto = document.createElement('div');
        item_blog_wrap_info.appendChild(item_blog_wrap_foto);
        item_blog_wrap_foto.classList.add('item_blog_wrap_foto');

          // новый элемент от item_blog_wrap_foto
          var item_blog_foto = document.createElement('div');
          item_blog_wrap_foto.appendChild(item_blog_foto);
          item_blog_foto.classList.add('item_blog_foto');
          item_blog_foto.style.backgroundImage = "url(" + imgSrc + ")";

        // новый элемент от item_blog_wrap_info
        var item_blog_info_wrapper = document.createElement('div');
        item_blog_wrap_info.appendChild(item_blog_info_wrapper);
        item_blog_info_wrapper.classList.add('item_blog_info_wrapper');

          // новый элемент от item_blog_info_wrapper
          var div_name = document.createElement('div');
          item_blog_info_wrapper.appendChild(div_name);

            // новый элемент от div_name
            var href_name = document.createElement('a');
            div_name.appendChild(href_name);
            href_name.textContent = userName;
            href_name.classList.add('item_a_main');
            href_name.href = "user.php?id="+parseInt(mainId_user);

          // новый элемент от item_blog_wrap_info
          var div_hidden = document.createElement('div');
          item_blog_info_wrapper.appendChild(div_hidden);
          div_hidden.style.display = "none";

          // новый элемент от item_blog_info_wrapper
          var item_blog_date_public = document.createElement('div');
          item_blog_info_wrapper.appendChild(item_blog_date_public);
          item_blog_date_public.classList.add('item_blog_date_public');
          item_blog_date_public.textContent = date;

      // новый элемент от item_blog_wrap_up
      var item_blog_do_item = document.createElement('div');
      item_blog_wrap_up.appendChild(item_blog_do_item);
      item_blog_do_item.classList.add('item_blog_do_item');

        // новый элемент от item_blog_do_item
        var btnDel = document.createElement('button');
        item_blog_do_item.appendChild(btnDel);
        btnDel.classList.add('forum_Com_right_btn_del');

          // новый элемент от btnDel
          var iconDel = document.createElement('i');
          btnDel.appendChild(iconDel);
          iconDel.classList.add('material-icons');
          iconDel.textContent = "close";

          // новый элемент от btnDel
          var delTitle = document.createElement('div');
          btnDel.appendChild(delTitle);
          delTitle.classList.add('forum_com_del_popup_wrap');
          delTitle.classList.add('forum_Main_del_popup_wrapComment');
          delTitle.innerHTML = "<div class='forum_com_del_popup_arrow'></div><div class='forum_com_del_popup_text'>Вы действительно хотите удалить запись? Отменить действие будет <b>невозможно</b></div>"


    // новый элемент от li_wrapper
    var item_blog_wrap_text = document.createElement('div');
    mainItem[mainItem.length - 1].appendChild(item_blog_wrap_text);
    item_blog_wrap_text.classList.add('item_blog_wrap_text');
    item_blog_wrap_text.innerHTML = text;

    // новый элемент от li_wrapper
    var item_blog_under_wrap = document.createElement('div');
    mainItem[mainItem.length - 1].appendChild(item_blog_under_wrap);
    item_blog_under_wrap.classList.add('item_blog_under_wrap');

      // новый элемент от item_blog_under_wrap
      var item_blog_likes_wrap = document.createElement('div');
      item_blog_under_wrap.appendChild(item_blog_likes_wrap);
      item_blog_likes_wrap.classList.add('item_blog_likes_wrap');

        // новый элемент от item_blog_likes_wrap
        var item_blog_btn_likes = document.createElement('button');
        item_blog_likes_wrap.appendChild(item_blog_btn_likes);
        item_blog_btn_likes.classList.add('item_blog_btn_likes');

          // новый элемент от item_blog_btn_likes
          var material_like = document.createElement('i');
          item_blog_btn_likes.appendChild(material_like);
          material_like.classList.add('material-icons');
          material_like.textContent = "favorite";

        // новый элемент от item_blog_likes_wrap
        var span_likes = document.createElement('span');
        item_blog_likes_wrap.appendChild(span_likes);
        span_likes.textContent = 0;

    var how_length  = document.querySelector('#blog_chetchik span');
        if (how_length.textContent == "") {
           var imgNot = document.querySelector('.notFound_pickImg');
                imgNot.outerHTML = "";
                delete imgNot;
        } else {
            how_length.innerHTML  = parseInt(how_length.innerHTML) + 1;
        }
     	

          // ajax записать в бд
          $.ajax ({
            type: 'POST',
            url: 'phpScripts/ajax/userSavePost.php',
              data: { TxtBlog:  text, 
                      parent_id: parseInt(mainId_user),
                      newPost: 'создать'
                    },
            success: function (data) {}
      });
  }


  function getTime () {
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

    function getMinuttes (result_minutes) {
      var number = date.getMinutes();
      if (number < 10) {
        result_minutes = '0' + number;
      } else {result_minutes = number;}
      return result_minutes;
    }

    result = 'Опубликовано' + ' ' + date.getDate() + ' ' + month[date.getMonth()] + ' в ' + date.getHours() + ':' + getMinuttes();
    return result;
  }

  document.querySelector('#Message_btnSend').addEventListener('click', function() {
    var textarea_blog = document.querySelector('#textarea_blog');
    if (textarea_blog.textContent == "") {

    } else {
      createItemBlog(getTime(),textarea_blog.innerHTML);
      textarea_blog.innerHTML = "";
    }
  });

    

});