window.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#btn_white_blog_save').onclick = function () {
    	var textarea_blog = document.querySelector('#textarea_blog');
      var blog_fotos_wrap_st = document.querySelectorAll('.blog_fotos_wrap_stock');
    	if (textarea_blog.innerHTML == 0) {
    	}
    	else {

    	    var li_wrapper_blog = document.createElement('li');
          document.getElementById('ul_blog').appendChild(li_wrapper_blog);
          li_wrapper_blog.classList.add('li_wrapper_blog');
          var li = document.querySelectorAll('.li_wrapper_blog');


          // новый элемент от <li>
          var info_user = document.createElement('div');
          li[li.length - 1].appendChild(info_user);
          info_user.classList.add('info_user');

          // новый элемент (родительский для остальных)
          var user_img_blog = document.createElement('div');
          info_user.appendChild(user_img_blog);
          user_img_blog.classList.add('user_img_blog');
          // новый элемент 
          var img_user_blog = document.createElement('img');
          user_img_blog.appendChild(img_user_blog);
          img_user_blog.classList.add('img_user_blog');

          // новый элемент (родительский для остальных)
          var user_name_date = document.createElement('div');
          info_user.appendChild(user_name_date);
          user_name_date.classList.add('user_name_date');
          // новый элемент 
          var user_name_blog = document.createElement('div');
          user_name_date.appendChild(user_name_blog);
          user_name_blog.classList.add('user_name_blog');
          user_name_blog.textContent = 'Имя Фамилия';
          // новый элемент
          var user_date_blog = document.createElement('div');
          user_name_date.appendChild(user_date_blog);
          user_date_blog.classList.add('user_date_blog');
          user_date_blog.textContent = getTime();

          // новый элемент (родительский для остальных)
          var user_setting_blog = document.createElement('div');
          info_user.appendChild(user_setting_blog);
          user_setting_blog.classList.add('user_setting_blog');
          // новый элемент 
          var btn_user_blog_delete = document.createElement('button');
          user_setting_blog.appendChild(btn_user_blog_delete);
          btn_user_blog_delete.classList.add('btn_user_blog_delete');
          // новый элемент (от кнопки)
          var btn_user_blog_delete_icon = document.createElement('i');
          btn_user_blog_delete.appendChild(btn_user_blog_delete_icon);
          btn_user_blog_delete_icon.classList.add('material-icons');
          btn_user_blog_delete_icon.textContent = 'delete_forever';
          // новый элемент (дополнтельно)
          var btn_user_blog_edit = document.createElement('button');
          user_setting_blog.appendChild(btn_user_blog_edit);
          btn_user_blog_edit.classList.add('btn_user_blog_edit');
          // новый элемент (от кнопки)
          var btn_user_blog_edit_icon = document.createElement('i');
          btn_user_blog_edit.appendChild(btn_user_blog_edit_icon);
          btn_user_blog_edit_icon.classList.add('material-icons');
          btn_user_blog_edit_icon.textContent = 'edit';


          // новый элемент от <li>
          var wrap_user_txt = document.createElement('div');
          li[li.length - 1].appendChild(wrap_user_txt);
          wrap_user_txt.classList.add('wrap_user_txt');
          // новый элемент
          var user_txt_blog = document.createElement('div');
          wrap_user_txt.appendChild(user_txt_blog);
          user_txt_blog.classList.add('user_txt_blog');
          user_txt_blog.contentEditable = false;

          var textarea_value_blog = textarea_blog.innerHTML;
          user_txt_blog.innerHTML = textarea_value_blog;

          if(user_txt_blog.scrollHeight > 0){
            user_txt_blog.style.height = user_txt_blog.scrollHeight +  "px";
            if (user_txt_blog.scrollHeight > 250) {
              user_txt_blog.style.height = 250 + 'px';
              user_txt_blog.style.overflow = 'scroll';
            }
           }
          // новый элемент
          var user_txt_blog_btns_wrap = document.createElement('div');
          wrap_user_txt.appendChild(user_txt_blog_btns_wrap);
          user_txt_blog_btns_wrap.classList.add('user_txt_blog_btns_wrap');
          // новый элемент 
          var btn_user_blog_txt_save = document.createElement('button');
          user_txt_blog_btns_wrap.appendChild(btn_user_blog_txt_save);
          btn_user_blog_txt_save.classList.add('btn_user_blog_txt_save');
          btn_user_blog_txt_save.textContent = 'Сохранить';
          // новый элемент (дополнтельно)
          var btn_user_blog_txt_noEdit = document.createElement('button');
          user_txt_blog_btns_wrap.appendChild(btn_user_blog_txt_noEdit);
          btn_user_blog_txt_noEdit.classList.add('btn_user_blog_txt_noEdit');
          btn_user_blog_txt_noEdit.textContent = 'Отмена';


          // новый элемент от <li>
          var user_blog_likes_rewius = document.createElement('div');
          li[li.length - 1].appendChild(user_blog_likes_rewius);
          user_blog_likes_rewius.classList.add('user_blog_likes_rewius');

          // новый элемент (родительский для остальных)
          var user_blog_likes = document.createElement('div');
          user_blog_likes_rewius.appendChild(user_blog_likes);
          user_blog_likes.classList.add('user_blog_likes');


              // новый элемент (дополнтельно)
              var user_likes = document.createElement('button');
              user_blog_likes.appendChild(user_likes);
              user_likes.classList.add('user_likes');

              // новый элемент (от кнопки)
              var user_likes_icon = document.createElement('i');
              user_likes.appendChild(user_likes_icon);
              user_likes_icon.classList.add('material-icons');
              user_likes_icon.textContent = 'favorite';

              // новый элемент
              var how_many_likes = document.createElement('span');
              user_blog_likes.appendChild(how_many_likes);
              how_many_likes.classList.add('how_many_likes');
              var i_likes = 0;
              how_many_likes.textContent = i_likes;


          // новый элемент (родительский для остальных)
          var user_blog_rewius = document.createElement('div');
          user_blog_likes_rewius.appendChild(user_blog_rewius);
          user_blog_rewius.classList.add('user_blog_likes');
          // новый элемент (дополнтельно)
          var user_rewius = document.createElement('button');
          user_blog_rewius.appendChild(user_rewius);
          user_rewius.classList.add('user_rewius');
          // новый элемент (от кнопки)
          var user_rewius_icon = document.createElement('i');
          user_rewius.appendChild(user_rewius_icon);
          user_rewius_icon.classList.add('material-icons');
          user_rewius_icon.textContent = 'remove_red_eye';
          // новый элемент
          var how_many_rewius = document.createElement('span');
          user_blog_rewius.appendChild(how_many_rewius);
          how_many_rewius.classList.add('how_many_rewius');
          how_many_rewius.textContent = '/Цифра/';


         textarea_blog.innerHTML = '';
         textarea_blog.style.height = 70 + 'px';

        var url_user = location.href;
        var mainId_user = url_user.split('-')[1];


          // ajax записать в бд
          $.ajax ({
            type: 'POST',
            url: 'phpScripts/ajax/userSavePost.php',
              data: { TxtBlog:  textarea_value_blog, 
                      date: user_date_blog.textContent,
                      parent_id: parseInt(mainId_user),
                      newPost: 'создать'
                    },
            success: function (data) { console.log(data); }
          });
 

       	}
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
   
});

var textarea_resize = document.querySelectorAll('.textarea_resize_class');
for (var i = 0; i < textarea_resize.length; i++) {
  textarea_resize[i].addEventListener('input', function () {
    if(this.scrollTop > 0 || this.scrollHeight <= 250){
      this.style.height = this.scrollHeight +  "px";
      if (this.scrollHeight > 250) {
        this.style.height = 250 + 'px';
        this.style.overflow = 'auto';
        this.scrollTop = 9999;
      }
    }
  });
} 




