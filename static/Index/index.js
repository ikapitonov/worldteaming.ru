window.onload = function() {

	var urlChange = location.href.split('index.ph')[1];
	if (urlChange != 'undefined' && urlChange != null) {
		var changer = location.href.split('index.php')[0];
		window.history.pushState({}, document.title, changer + "welcome");
	}

}