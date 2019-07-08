window.addEventListener('DOMContentLoaded', function() {
  var url_user = location.href;
  var searchIduser = url_user.substring(url_user.lastIndexOf('?id=') + 1);
  var parseInt_url = /\d+/;
  var mainId_user = searchIduser.match(parseInt_url);

  document.querySelector('#deleteAvatar_btn').onclick = function () {
  	this.querySelector('i').textContent = "update";
  }

});