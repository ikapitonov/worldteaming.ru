window.addEventListener('DOMContentLoaded', function() {

var item_of_sec = document.querySelectorAll('.item_forum_li') || [];
    item_of_sec= [].slice.apply(item_of_sec);
    item_of_sec.forEach(function (element, i) {

      var how_likes = element.querySelector('.section_how_likes');
    	var btnLike = element.querySelector('.button_under_beaty');
    	    btnLike.onclick = function () {
    	    	var input = element.querySelector('.numberSecPost1').value;
    	    	var icon = this.querySelector('i');
            if (icon.classList.contains('material-icons_favorite')) {
              icon.classList.remove('material-icons_favorite');
            } else { icon.classList.add('material-icons_favorite'); }

			      var urlIdeaPerem = location.href.split('_idea')[1];
			      if (urlIdeaPerem != 'undefined' && urlIdeaPerem != null) {
			      var urlIdea = urlIdeaPerem.split('-')[1];
			      if (urlIdea > 0) { ajaxLike (parseInt(input), 1); }}

			      var urlDocsPerem = location.href.split('_docs')[1];
			      if (urlDocsPerem != 'undefined' && urlDocsPerem != null) {
			      var urlDocs = urlDocsPerem.split('-')[1];
			      if (urlDocs > 0) { ajaxLike (parseInt(input), 2); }}

			      var urlTaskPerem = location.href.split('_task')[1];
			      if (urlTaskPerem != 'undefined' && urlTaskPerem != null) {
			      var urlTask = urlTaskPerem.split('-')[1];
			      if (urlTask > 0) { ajaxLike (parseInt(input), 3); }}


				        function ajaxLike (nubmer,select) {
				            $.ajax ({
				                type: 'POST',
				                url: 'phpScripts/ajax/SectionMainLikePost.php',
				                data: { 
				                        nubmerPost:  nubmer, 
				                        its:         select,
				                        likePost:    'Лайкнуть с форума'
				                      },
				                success: function (data) { 
				                  if ( data == 'плюс' ) {
				                    how_likes.innerHTML = parseInt(how_likes.innerHTML) + 1;
				                  } else {
				                      how_likes.innerHTML = parseInt(how_likes.innerHTML) - 1;
				                  }
				                 }                 
				            });
				        } 

    	    }
    });

});