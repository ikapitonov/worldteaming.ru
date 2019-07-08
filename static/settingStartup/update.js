window.addEventListener('DOMContentLoaded', function() {
  
  var clear = document.querySelector('.btnSettingForm');
      clear.onclick = function () {
      	var icon = document.querySelector('.wrapper_btn_submit i');
      	    icon.classList.add('check_boxDone');
      	    setTimeout( function () {
      	    	icon.classList.remove('check_boxDone');
      	    },500);
      }  
});