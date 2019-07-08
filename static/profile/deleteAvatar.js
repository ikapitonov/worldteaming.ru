window.addEventListener('DOMContentLoaded', function() {

  var url_user = location.href;
  var mainId_user = url_user.split('-')[1];

var btn_del = document.querySelector('#deleteMy_avatar');
    btn_del.addEventListener('click', function () {
      if (this.querySelector('span').textContent == "Удалить фото") {
          var srcImg = document.querySelector('#profile_right_img_wrap img');
          var icon = this.querySelector('i');
          var text = this.querySelector('span');
          var anotherbtn = document.querySelector('#btnAddImg');
          $.ajax ({
              type: 'POST',
              url: 'phpScripts/ajax/deleteAvatar.php',
              data: { 
                      src:           srcImg.src,
                      id:            parseInt(mainId_user),
                      delUserImg:    "Удалить аватарку"
                    },
              success: function (data) {
                if (data == 1) {
                  srcImg.src = "avatarsUsers/itsMe.jpg";
                  text.textContent = "Удалено!";
                  icon.textContent = "done";
                  icon.classList.add('startup_functions_wrapperColorColor');
                  anotherbtn.querySelector('span').textContent = "Добавить фото";
                  setTimeout( function () {
                    btn_del.outerHTML = "";
                    delete btn_del;
                  } ,800);
                }
              }
          });
      }
    });

});