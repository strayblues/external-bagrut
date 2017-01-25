$(function(){
  $(document).on('click', '.smooth-scroll', function(event){
      event.preventDefault();

      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 1000);
  });
});
