window.addEventListener('DOMContentLoaded', function() {
 
  document.querySelector('#file').onchange = previewFile_blog; 

  function previewFile_blog() {
    var file    = document.querySelector('#file').files[0];
    var reader  = new FileReader();
    var previewScr = document.querySelector('#startup_wrapper_img img');

    reader.onloadend =  function () {
      previewScr.src = reader.result;

      document.querySelector('#startup_sub_foto').style.display = "block";
      document.querySelector('#needTosave').style.display = "block"
    }

    if (file) {
      reader.readAsDataURL(file);
    } else { alert(1); }
    return reader.result;
  }

});