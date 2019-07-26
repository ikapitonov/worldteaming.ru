var counter, temp, url;
	counter = parseInt(document.querySelector('.selectAll span').textContent);
	temp    = parseInt(document.querySelector('#for_temp_pushHistory').textContent);
	url     = location.href;

	if (temp > 1 && url.indexOf("?page=") == -1) {
		window.history.pushState({}, document.title, url + "?page=" + temp);
	}
	else if (temp <= 1) {
		window.history.pushState({}, document.title, url.split('?page=')[0]);
	}


window.addEventListener('DOMContentLoaded', function() {
	var count = parseInt(document.querySelector('.selectAll span').textContent);

	if (count && count > 20) {
		var input, form;
			input = document.querySelector('#page_num_post');
			form  = document.querySelector('#startup_wrapper_2divs');

		var start, end, btns;

			start = document.querySelector('#nav_posts_toStart');
			if (start != 'undefined' && start != null) {
				start.addEventListener('click', function() {
					input.value = 1;
					form.submit();
				});
			}

			end = document.querySelector('.nav_posts_word_end');
			if (end != 'undefined' && end != null) {
				end.addEventListener('click', function() {
					input.value = Math.ceil(count / 20);
					form.submit();
				});
			}

			btns = document.querySelectorAll('.nav_posts_btn');
			if (btns != 'undefined' && btns != null) {
				for (var i = 0; i < btns.length; i++) {
					btns[i].onclick = btns_submit;
				}
			}

		function btns_submit () {
			var num = parseInt(this.textContent);
			if (num) {
				input.value = num;
				form.submit();
			}
		}
	}

});