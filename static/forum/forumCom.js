window.addEventListener('DOMContentLoaded', function() {
var wrap_Com = document.querySelectorAll('.item_forum_Com') || [];
    wrap_Com = [].slice.apply(wrap_Com);
    wrap_Com.forEach(function (element, i) {
      var text_Com = element.querySelector('.forum_Com_right_TEXT');
      if (text_Com.scrollHeight > 162) {
        text_Com.style.height = 162 + "px";
        var moreTxt  = element.querySelector('.forum_Com_right_TEXT_FULL');
            moreTxt.style.display = "block";
            moreTxt.addEventListener('click', function () {
              this.style.display = "none";
              text_Com.style.height = "auto";
            });
      }     
    });
    


});