window.onload = function () {

	var flag = document.querySelector('#forum_scrolling_page');

	var url = location.href.split('-page');
		if (url[1] == 1) {
			window.history.pushState({}, document.title, url[0]);
		}
		if (url[1] > 1) {
			flag.scrollIntoView({block: "start", behavior: "instant"});
		}	

}