window.addEventListener('DOMContentLoaded', function() {

	var url_user = location.href;
	var mainId_user = url_user.split('-')[1];

var postBlog = document.querySelectorAll('.item_blog_li') || [];
    postBlog= [].slice.apply(postBlog);
    postBlog.forEach(function (element, i) {
    	var btn_delete = element.querySelector('.forum_Com_right_btn_del i');
    	    btn_delete.onclick = function () {
    	    	var cont1,cont2,cont3,howMany;
    	    	    cont1 = element.querySelector('.item_blog_wrap_up');
    	    	    cont2 = element.querySelector('.item_blog_wrap_text');
    	    	    cont3 = element.querySelector('.item_blog_under_wrap');

    	    	var input = element.querySelector('.itemNumber').textContent;
    	    	  $.ajax ({
	                type: 'POST',
	                url: 'phpScripts/ajax/deletePostUserBlog.php',
	                data: { 
	                        nubmerPost:  parseInt(input), 
	                        url:         parseInt(mainId_user),
	                        DelPostUser: 'Удалить пост блога'
	                      },
	                success: function (data) { 
	                  if (data == 1) {
	                  	    cont1.outerHTML = "";
												  delete cont1;
												  cont2.outerHTML = "";
												  delete cont2;
												  cont3.outerHTML = "";
												  delete cont3;
												  element.classList.add('classWhenDelete');
												  element.textContent = "Запись успешно удалена";
	                  } else {
	                  	  alert("Что-то пошло не так :(");
	                  }
	                 }                 
				      });
    	    }
    });


});
