window.addEventListener('DOMContentLoaded', function() {

	var flag = document.querySelector('#flag_for_scroll');

	var url = location.href.split('-page');
		if (url[1] == 1) {
			window.history.pushState({}, document.title, url[0]);
		}
		if (url[1] > 1) {
			flag.scrollIntoView({block: "start", behavior: "instant"});
		}	

});