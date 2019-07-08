window.addEventListener('DOMContentLoaded', function() {
  
  var url_user = location.href;
  var mainId_user = url_user.split('-')[1];

  document.querySelector('#startup_insertMe').addEventListener('click',function(){
    if (this.querySelector('span').textContent == "Сохранить") {
			var icon = this.querySelector('.startup_functions_wrapperColor');
		  var text = this.querySelector('span');
		  var objBtn = this;
		  icon.textContent = "update";
			$.ajax ({
		          type: 'POST',
		          url: 'phpScripts/ajax/startupSaveDelPage.php',
		          data: { idStartup:   parseInt(mainId_user),
		                  doing:    "Сохранить стартап"
		                },
		          success: function (data) { 
		          	if (data == "Сохранено!") {
		          		  text.textContent = "Страница сохранена";
		          		  icon.textContent = "done";
		          		  icon.classList.add('startup_functions_wrapperColorColor');
		          		  document.querySelector('#startup_delete_Saving').style.display = "flex";
		          	} else {
		          		  
		          	}
		          }
		  }); 
    }         
  },false);

  document.querySelector('#startup_delete_Saving').addEventListener('click',function(){
  	var perem = this.parentNode;
  	if (perem.querySelector('span').textContent == "Страница сохранена") {
  		var text = perem.querySelector('span');
  		var icon = perem.querySelector('.startup_functions_wrapperColor');
  		icon.textContent = "update";
  		$.ajax ({
		          type: 'POST',
		          url: 'phpScripts/ajax/startupSaveDelPage.php',
		          data: { idStartup:   parseInt(mainId_user),
		                  doing:    "Удалить сохраненный стартап"
		                },
		          success: function (data) { 
		          	if (data == "Удалено!") {
		          		  icon.classList.remove('startup_functions_wrapperColorColor');
		          		  text.textContent = "Сохранить";
		          		  icon.textContent = "star_border";
		          		  document.querySelector('#startup_delete_Saving').style.display = "none";
		          	} else {
		          		  console.log(2);
		          	}
		          }
		  });
  	}
  },false);

});
