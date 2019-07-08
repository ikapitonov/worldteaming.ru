window.addEventListener('DOMContentLoaded', function() {

var wrap_Txt = document.querySelectorAll('.item_blog_li') || [];
    wrap_Txt = [].slice.apply(wrap_Txt);
    wrap_Txt.forEach(function (element, i) {
      var text_Txt = element.querySelector('.item_blog_wrap_text');
      if (text_Txt.scrollHeight > 165) {
        text_Txt.style.height = 165 + "px";
        var moreTxt  = element.querySelector('.forum_Com_right_TEXT_FULL');
            moreTxt.style.display = "block";
            moreTxt.addEventListener('click', function () {
              this.style.display = "none";
              text_Txt.style.height = "auto";
            });
      }     
    });
});
