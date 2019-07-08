window.addEventListener('DOMContentLoaded', function() {

var item_of_sec = document.querySelectorAll('.item_forum_Com') || [];
    item_of_sec= [].slice.apply(item_of_sec);
    item_of_sec.forEach(function (element, i) {

    	var btnLike = element.querySelector('.btn_doingLikes');
    	    btnLike.onclick = function () {
    	    	var how_likes = element.querySelector('.forumCom_how_likes');
    	    	var input = element.querySelector('.numberForumPost1').value;
    	    	var icon = this.querySelector('i');
            if (icon.classList.contains('material-icons_favorite')) {
              icon.classList.remove('material-icons_favorite');
            } else { icon.classList.add('material-icons_favorite'); } 

			      var urlIdeaPerem = location.href.split('_idea_')[1];
			      if (urlIdeaPerem != 'undefined' && urlIdeaPerem != null) {
			      var urlIdea = urlIdeaPerem.split('-')[0];
			      if (urlIdea > 0) { ajaxLike (parseInt(input), 1, urlIdea) } else {}}

			      var urlDocsPerem = location.href.split('_docs_')[1];
			      if (urlDocsPerem != 'undefined' && urlDocsPerem != null) {
			      var urlDocs = urlDocsPerem.split('-')[0];
			      if (urlDocs > 0) { ajaxLike (parseInt(input), 2, urlDocs) } else {} }

			      var urlTaskPerem = location.href.split('_task_')[1];
			      if (urlTaskPerem != 'undefined' && urlTaskPerem != null) {
			      var urlTask = urlTaskPerem.split('-')[0];
			      if (urlTask > 0) { ajaxLike (parseInt(input), 3, urlTask) } else {}}


				        function ajaxLike (nubmer,select,url) {
				            $.ajax ({
				                type: 'POST',
				                url: 'phpScripts/ajax/forumComLikes.php',
				                data: { 
				                        nubmerPost:  nubmer, 
				                        its:         select,
				                        parent_id:   url,
				                        likePost:    'Лайкнуть комментарий форума'
				                      },
				                success: function (data) { 
				                  if ( data == 1 ) {
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