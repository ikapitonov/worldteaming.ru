window.addEventListener('DOMContentLoaded', function() {

	function create_popup(dialog, text, name, lastname, user_id, avatar) {

		var new_mess_wrapper = document.createElement('div');
    document.body.appendChild(new_mess_wrapper);
    new_mess_wrapper.classList.add('new_mess_wrapper');
    new_mess_wrapper.classList.add('new_mess_animation');
    var this_wrap = document.querySelector('.new_mess_wrapper');

	    var new_mess_h1 = document.createElement('div');
	    this_wrap.appendChild(new_mess_h1);
	    new_mess_h1.classList.add('new_mess_h1');

				var new_mess_span = document.createElement('span');
	    	new_mess_h1.appendChild(new_mess_span);
	    	new_mess_span.textContent = "Новое сообщение!";

	    	var btn_closeNew_Mess = document.createElement('button');
	    	new_mess_h1.appendChild(btn_closeNew_Mess);
	    	btn_closeNew_Mess.classList.add('btn_closeNew_Mess');

	    		var new_mess_icon = document.createElement('i');
	    		btn_closeNew_Mess.appendChild(new_mess_icon);
	    		new_mess_icon.classList.add('material-icons');
	    		new_mess_icon.textContent = "close";


	    var new_mess_info = document.createElement('div');
	    this_wrap.appendChild(new_mess_info);
	    new_mess_info.classList.add('new_mess_info');

	    	var new_mess_foto = document.createElement('div');
		    new_mess_info.appendChild(new_mess_foto);
		    new_mess_foto.classList.add('new_mess_foto');
		    if (avatar == null) {
		    		var imgStock = "avatarsUsers/itsMe.jpg";
						new_mess_foto.style.backgroundImage = "url(" + imgStock + ")";
				} else {
						new_mess_foto.style.backgroundImage = "url(" + "avatarsUsers/" + avatar + ")";
				}

		    var new_mess_user = document.createElement('div');
		    new_mess_info.appendChild(new_mess_user);
		    new_mess_user.classList.add('new_mess_user');

		    	var new_mess_href = document.createElement('a');
			    new_mess_user.appendChild(new_mess_href);
			    new_mess_href.textContent = name + " " + lastname;
			    new_mess_href.href = "user-" + user_id;

			    var new_mess_text = document.createElement('p');
			    new_mess_user.appendChild(new_mess_text);
			    new_mess_text.innerHTML = text;


			btn_closeNew_Mess.addEventListener('click', function () {
				this_wrap.style.display = 'none';
			});

			new_mess_href.addEventListener('click', function () {
				this_wrap.style.display = 'none';
				document.location.href = "user-1";
			});

			this_wrap.addEventListener('click', function () {
				setTimeout(function () {
					if (this_wrap.style.display != 'none') {
						
						document.location.href = "messages-" + dialog;
					}
				},10);
			});

			 setTimeout(function () {
				 	this_wrap.style.transition = 1 + 's';
				 	this_wrap.style.opacity = 0;
				 	setTimeout(function () {
				 			this_wrap.outerHTML = "";
	        				delete this_wrap;
				 	},1000);
			 },3000);

	}

	setInterval(function() {	
			$.ajax({
          url: 'phpScripts/ajaxLoad/newMess_ajax.php',
          method: 'POST',
          data: { 
                  word: "проверь" 
               	}
	    }).done(function(data){
	    	if (data != 0) {				
	    		data = jQuery.parseJSON(data);

	    		var this_url = location.href;
	    			this_url = this_url.split("messages-")[1];
	    		if (((this_url == 'undefined') || (this_url != 'undefined' && this_url != data['id']))) {

						$.ajax({
				    		type: 'POST',
				    		url: 'phpScripts/ajaxLoad/returnUser.php',
				    		async: false, 
				    		data: { 
										id:    data['from_who'],
										word:  "дай юзера" 
											},
						    success: function (user_info) {
  								user_info = JSON.parse(user_info)[0];

  								create_popup(data['id'], data['last_message'], user_info['name'], user_info['lastname'], user_info['id'], user_info['url_avatar']);
  							}
  					});

  					if (data['how_many_reed'] == 1) {
  						var count_dialog = document.querySelector('.nH_count_dialogsNR');
  								if (count_dialog == 'undefined' || count_dialog == null) {
  										count_dialog = document.createElement('div');
									    document.querySelector('#header_dialogs_btn').appendChild(count_dialog);
									    count_dialog.classList.add("nH_count_dialogsNR");
									    count_dialog.textContent = 0;
  								}

  								count_dialog.textContent = parseInt(count_dialog.textContent) + 1;
  								count_dialog.classList.add('animation_jump');
  								setTimeout(function () {
  									count_dialog.classList.remove('animation_jump');
  								},3000);
  					} else {
  						var counter_dialog = document.querySelector('.nH_count_dialogsNR');
  						counter_dialog.classList.add('animation_jump');
  							setTimeout(function () {
  								counter_dialog.classList.remove('animation_jump');
  						},3000);
  					}
  				}
	    	}

	    });
	}, 6000);

});