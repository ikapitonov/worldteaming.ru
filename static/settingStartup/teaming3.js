window.addEventListener('DOMContentLoaded', function() {

  var url_user = location.href;
  var searchIduser = url_user.substring(url_user.lastIndexOf('teaming-') + 1);
  var parseInt_url = /\d+/;
  var mainId_user = searchIduser.match(parseInt_url);

var item_plus1 = document.querySelectorAll('.item_setting_Main3') || [];
    item_plus1 = [].slice.apply(item_plus1);
    item_plus1.forEach(function (element, i) {
    	element.querySelector('.changeAbYou_onclick span').addEventListener('click', function () {

          var this_user3 = element.querySelector('.nubmer_this_user3').textContent;

          var textCh, iconCh, youCh, youChanger;
              textCh = element.querySelector('.valueYouDoingSt');
              youCh  = element.querySelector('.itsYOU');
              iconCh = element.querySelector('.changeAbYou_onclick i');  
              youChanger = element.querySelector('.changeAboutInic a');       

           var popup = element.querySelector('.changeAbYou_wrap');
               popup.classList.toggle('changeAbYou_wrapSee');

           var input, txtIn;
               txtIn  = popup.parentNode.querySelector('.valueYouDoingSt');
               input  = popup.querySelector('input');
               input.value = txtIn.textContent;
 
          var popup_yes = popup.querySelector('.changeAbYou_yes');

              popup_yes.addEventListener('click', function () {
                if (input.value == "" || input.value == txtIn.textContent) {
                  console.log(0);
                } else {
                    $.ajax ({
                        type: 'POST',
                        url: 'phpScripts/ajax/teaming3.php',
                        data: { 
                                text:        input.value,
                                numId:       parseInt(this_user3),
                                parent_ID:   parseInt(mainId_user),
                                comment:     "Комментирую деятельность"
                              },
                        success: function (data) {
                          popup.classList.remove('changeAbYou_wrapSee');
                          textCh.textContent = input.value;
                          iconCh.classList.add('changeAbYou_onclickActive');
                          youChanger.href = youCh.href;
                          youChanger.textContent = youCh.textContent;
                          setTimeout(function () {
                            iconCh.classList.remove('changeAbYou_onclickActive');
                          } ,500);
                        }
                    });
                }
              });





           var popup_no  = popup.querySelector('.changeAbYou_no');
               popup_no.addEventListener('click', function () {
               	this.parentNode.parentNode.classList.remove('changeAbYou_wrapSee');
               });

      });
    }); 
	
}); 