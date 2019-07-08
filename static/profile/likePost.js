window.addEventListener('DOMContentLoaded', function() {
	var url_user = location.href;
  var mainId_user = url_user.split('-')[1];

  function like_Post_blog () {
    var item_of_blog = document.querySelectorAll('.item_blog_li') || [];
    item_of_blog= [].slice.apply(item_of_blog);
    item_of_blog.forEach(function (element, i) {
      var user_blog_likes = element.querySelector('.item_blog_btn_likes');
      var BDnum_of_Post = element.querySelector('.itemNumber');
      var how_likes = element.querySelector('.item_blog_likes_wrap span');
      user_blog_likes.onclick = function () {
        var iconFavorite = user_blog_likes.querySelector('i');
            iconFavorite.classList.toggle('material-icons_favorite');
    	  $.ajax ({
          type: 'POST',
          url: 'phpScripts/ajax/userLikePost.php',
          data: { intPost:     BDnum_of_Post.textContent,
                  to_who:      parseInt(mainId_user), 
                  likePost:    'лайкнуть'
                },
          success: function (data) { 
            console.log(data);
            if (data == 1) {
              how_likes.innerHTML = parseInt(how_likes.innerHTML) + 1;
            } else {
                how_likes.innerHTML = parseInt(how_likes.innerHTML) - 1;
            }
           }
        });
      }
    });
  }like_Post_blog ();
});