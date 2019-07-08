window.addEventListener('DOMContentLoaded', function() {


  var text_Txt = document.querySelector('.forum_textMainBlock');
  if (text_Txt.scrollHeight > 162 ) {
    text_Txt.style.height = 162 + "px";
    var moreTxt  = document.querySelector('#qwe');
        moreTxt.classList.remove('FULLCALSS');
        moreTxt.addEventListener('click', function () {
          this.classList.add('FULLCALSS');
          text_Txt.style.height = "auto";
        });
  }     
  });














