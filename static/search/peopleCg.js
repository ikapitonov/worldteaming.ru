window.addEventListener('DOMContentLoaded', function() {

var wrap_categories = document.querySelectorAll('.userStart_categoriesMains_wth_btn') || [];
    wrap_categories= [].slice.apply(wrap_categories);
    wrap_categories.forEach(function (element, i) {
     var btn_open_mini, list_categoties_mini, icon_tranform, checkbox_big, checkbox_small;
         btn_open_mini        = element.querySelector('.btn_open_mini_categories');
         list_categoties_mini = element.querySelector('.categories_mini_close');
         icon_tranform        = element.querySelector('.btn_open_mini_categories i');
         checkbox_big         = element.querySelector('.CGMAIN');
         checkbox_small       = element.querySelectorAll('.categories_mini_close input');
     btn_open_mini.addEventListener('click', function () {

      list_categoties_mini.classList.toggle('categories_mini_open');
      icon_tranform.classList.toggle('icon_tranform');

     });
     checkbox_big.onchange = function() {
        if (checkbox_big.checked == true ) {
        } else {
          var checkbox_small_all = element.querySelectorAll('.categories_mini_close input');
          for (var i = 0; i < checkbox_small_all.length; i++) {
            checkbox_small_all[i].checked = false;
          }     
        }          
      }
      for (var i = 0; i < checkbox_small.length; i++) {
        checkbox_small[i].onchange = function () {
          var checkbox_small_len = list_categoties_mini.querySelectorAll('input');
          for (var i = 0; i < checkbox_small_len.length; i++) {
            if (checkbox_small_len[i].checked == true) {
              checkbox_big.checked = true;
            } else {}
          }
        }
      }
      
     
    });


  var item_cg = document.querySelectorAll('.userStart_categoriesMains_wth_btn') || [];
		  item_cg = [].slice.apply(item_cg);
		  item_cg.forEach(function (element, i) {
		    var itemB = element.querySelector('.CGMAIN');
		    var itemOpen = element.querySelector('.categories_mini_close');
		    var icon_tran = element.querySelector('.btn_open_mini_categories i');
		    if (itemB.checked) {
		    	var itemS = element.querySelectorAll('.categories_mini_close input');
		    	for (var i = 0; i < itemS.length; i++) {
		    		if (itemS[i].checked) {
		    			itemOpen.classList.add('categories_mini_open');
              icon_tran.classList.add('icon_tranform');
		    		}
		    	}

		    }
		  });


});