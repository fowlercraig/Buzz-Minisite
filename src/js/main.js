$(document).ready(function() {

  function formstone(){
    $('.background').background();
    $('.carousel').carousel();
    $('.swap').swap();
    if(window.location.hash) {
      $('.swap').click();
    }
  }

  formstone();

});