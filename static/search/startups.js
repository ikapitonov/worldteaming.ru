window.addEventListener('DOMContentLoaded', function() {

  var url_all = location.href;
  var perem = url_all.split('&searchSub=');
  var stringUrl = String(perem[0]);
  var stringUrl3 = String(perem[1]);
  var stringUrl2 = stringUrl.split('?search=');
  var url1 = String(stringUrl2[0]);
  var url2 = String(stringUrl2[1]);



  var input = document.querySelector('#formSearchText .search_inputMain');
 
  if (url2.length > 0 && input.value.length > 0) {
  	window.history.pushState({}, document.title, url1 + "?search=" + url2);
  } else {
  	if (stringUrl3 == "") {}
  		  else {
 		      window.history.pushState({}, document.title, url1);
 	  }
  }


  var btn = document.querySelector('#formSearchText .labelForReset');
  var input = document.querySelector('#formSearchText .search_inputMain');
  btn.onclick = function () {
  	input.value = null;
  	window.history.pushState({}, document.title, url1);
  }
  input.oninput = function () {
  	if (input.value == "" || input.value == null) {
      window.history.pushState({}, document.title, url1);
  	}
  }


});
