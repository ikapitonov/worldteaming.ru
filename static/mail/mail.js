window.addEventListener('DOMContentLoaded', function() {

  var form = document.querySelector('.changer_mail_wrap');

  document.querySelector('.btn_change_click').addEventListener('click' , function () {
  	form.classList.toggle('changer_mail_wrapNONE');

  	document.querySelector('.errorChange').textContent = "";
  	document.querySelector('.errorChange').style.display = "none";
  });



});