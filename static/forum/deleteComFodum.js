
 window.addEventListener('DOMContentLoaded', function() {


var wrap_Com = document.querySelectorAll('.classDel123') || [];
    wrap_Com = [].slice.apply(wrap_Com);
    wrap_Com.forEach(function (element, i) {
        var btnDel = element.querySelector('.btnFordelCom i');
    	btnDel.addEventListener('click',function () {
    		var input = element.querySelector('.numberForumPost1').value;
    		var inputS = document.querySelector("#commentLikesula").value;
    		var howMany = document.querySelector('#forum_how_ComTxt span');

    		var elemLeft = element.querySelector('.item_forum_Com_left');
    		var elemRight = element.querySelector('.item_forum_Com_right');

            var wordTask;

        var urlIdeaPerem = location.href.split('-')[0];
        var urlIdea = urlIdeaPerem.split('_idea_')[1];
        if (urlIdea > 0) { ajaxDelCom(parseInt(urlIdea),1); } else {}

        var urlDocsPerem = location.href.split('-')[0];
        var urlDocs = urlDocsPerem.split('_docs_')[1];
        if (urlDocs > 0) { ajaxDelCom(parseInt(urlDocs),2);  } else {}

        var urlTaskPerem = location.href.split('-')[0];
        var urlTask = urlTaskPerem.split('_task_')[1];
        if (urlTask > 0) { 
                if (element.querySelector('.commentForumThink') == null) {} else {
                var thinkT = element.querySelector('.commentForumThink').textContent; }
            if (thinkT == "Хочу попробовать!") { wordTask = 1;  } else { wordTask = ""; }
              ajaxDelCom(parseInt(urlTask),3); } else {}

        function ajaxDelCom (nubmer,select) {
            $.ajax ({
                type: 'POST',
                url: 'phpScripts/ajax/deleteComment.php',
                data: { 
                	    parent_id:   nubmer,
                        nubmerPost:  input, 
                        its:         select,
                        nubmerS:     inputS,
                        want_do:     wordTask,
                        delComment:  "Удалить комментарий"
                      },
                success: function (data) { 
                  if ( data == 1 ) {
                        		elemLeft.outerHTML = "";
							    delete elemLeft;
							    elemRight.outerHTML = "";
							    delete elemRight;
							    element.classList.add('classWhenDelete');
							    element.textContent = "Комментарий успешно удален";
							    howMany.innerHTML = parseInt(howMany.innerHTML) - 1;

                  } else {
                      alert('Что-то пошло не так');
                  }
                 }                 
            });
        }
    	},false);
    });


}); 