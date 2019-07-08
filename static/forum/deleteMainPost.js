window.addEventListener('DOMContentLoaded', function() {

document.querySelector('#btnDeleteMainPost2 i').onclick = function () {

    var urlIdeaPerem = location.href.split('-')[0];
        var urlIdea = urlIdeaPerem.split('_idea_')[1];
    if (urlIdea > 0) { ajaxDelCom(parseInt(urlIdea),1) } else {}

    var urlDocsPerem = location.href.split('-')[0];
        var urlDocs = urlDocsPerem.split('_docs_')[1];
    if (urlDocs > 0) { ajaxDelCom(parseInt(urlDocs),2) } else {}

    	function ajaxDelCom (nubmer,select) {
    		var content = document.querySelector('#startup_wrapper_left .startup_wrap_padding');
    		var tittleUp  = document.querySelector('#startups_main_UNDERNAMENum');
        $.ajax ({
            type: 'POST',
            url: 'phpScripts/ajax/deleteMainForum.php',
            data: { 
            	      numPost:     nubmer, 
            	      its:         select,
                    delPost:  "Удалить пост раздела"
                  },
            success: function (data) {
            	if ( data == 1 ) {
                tittleUp.textContent = "Удалено";
                tittleUp.href = "";
                content.outerHTML = "";
								delete content;
            	}
            }
        });
      }

}



});