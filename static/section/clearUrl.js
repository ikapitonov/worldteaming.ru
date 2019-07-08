window.addEventListener('DOMContentLoaded', function() {

	var url = location.href.split('-page');
		if (url[1] == 1) {
			window.history.pushState({}, document.title, url[0]);
		}		

});