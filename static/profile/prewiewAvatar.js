window.addEventListener('DOMContentLoaded', function() {


document.querySelector('#file').onchange = previewFile_blog; 

function previewFile_blog() {
  var file    = document.querySelector('#file').files[0];
  var reader  = new FileReader();
  var previewScr = document.querySelector('#profile_right_img_wrap img');

  reader.onloadend =  function () {
    previewScr.src = reader.result;

    document.querySelector('#submit_img').style.display = "block";
    document.querySelector('#needTosave').style.display = "block";
  }

  if (file) {
    reader.readAsDataURL(file);
  } else { alert(1); }
  return reader.result;
}


});






