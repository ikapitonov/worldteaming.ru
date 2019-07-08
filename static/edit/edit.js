window.addEventListener('DOMContentLoaded', function() {
  
  var clear = document.querySelector('.btnSettingForm');
      clear.onclick = function () {
      	var icon = document.querySelector('.wrapper_btn_reset i');
      	    icon.classList.add('check_boxDone');
      	    setTimeout( function () {
      	    	icon.classList.remove('check_boxDone');
      	    },500);
      } 


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


  var input1 = document.querySelectorAll('.newPasswordJS input');
      for (var i = 0; i < input1.length; i++) {
      	input1[i].onblur = passInput;
      }
      // for (var i = 0; i < input1.length; i++) {
      // 	input1[i].oninput = passVerify;
      // }

      function passInput () {
        var word = this.parentNode.querySelector('.changePassJs');
      	if (this.value.length > 0) {
      		word.textContent = "Не менее 6 символов";
      		word.style.color = "#f65314";
      	}
      	if (this.value.length > 5) {
      		word.textContent = "Лучше более 8 символов";
      		word.style.color = "#285473";
      		this.oninput = function () {
      			if (this.value.length > 8) {
      		    word.textContent = "";
      	    }
      		}
      	} 
      	if (this.value.length > 8) {
      		word.textContent = "";
      	}
      }


      // function passVerify () {
      //   var inp1 = document.querySelector('#passwordNewJs');
      //   var inp2 = document.querySelector('#passwordNewTwoJs');
      //   var inp1Txt = inp1.parentNode.querySelector('.changePassJs');
      //   var inp2Txt = inp2.parentNode.querySelector('.changePassJs');

      //   if (this.value.length > 5) {
      //   	if (inp1.value.length > 5 && inp2.value.length > 5) {
      //   		if (inp1.value.length == inp2.value.length) {
		    //     		if (inp1.value >= inp2.value || inp2.value >= inp1.value) {
		    //     			inp1Txt.textContent = "";
		    //     			inp2Txt.textContent = "Пароли совпадают";
		    //     			inp2Txt.style.color = "#7cBB00";
		    //     		} else {
		    //     			  inp1Txt.textContent = "";
		    //     			  inp2Txt.textContent = "Пароли не совпадают";
		    //     			  inp2Txt.style.color = "#f65314";
		    //     		}
		    //     }
      //   	}
      //   }
      // }

});












