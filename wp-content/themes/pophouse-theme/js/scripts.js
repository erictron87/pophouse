(function($) {


function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
   /**PRELOADER**/

   
   $(document).ready(function() {
    hash = window.location.hash;
    console.log(hash);
    $(document).on('click', 'a[href^="#"]', function (event) {
      event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
    if(window.sessionStorage.getItem('Home') == 'visited'){
      if((top.location.pathname === '/pop/')){
        $('body').prepend('<div id="preloader"><div id="status"><span></span></div></div>');  
        $("header #navBtn").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
        $("body").css({'max-height': 'unset', 'overflow': 'auto'});              
        $("body").css({'max-height': 'unset', 'overflow': 'auto'});
        $("#landing .text").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
        $("#landing #moreWrap").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
        $("header #navBtn").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
        }
    } 
  if(hash){
    if(hash == "#workWrap" && !(window.sessionStorage.getItem('Home') == 'visited')){
        $('body').prepend('<div id="preloader"><div id="status"><span></span></div></div>');
      }
      $("body").css({'max-height': 'unset', 'overflow': 'auto'});
      $("#landing .text").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("#landing #moreWrap").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("header #navBtn").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      /*$('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 500);*/

    } 
    if(window.sessionStorage.getItem('Studio') == 'visited') {
      if((top.location.pathname === '/pop/studio/')){
      $("body").css({'max-height': 'unset', 'overflow': 'auto'});
      $("#about-intro .text").css({'animation': 'unset', 'opacity': '0', 'visibility': 'hidden'});
      $("#about-intro .text6").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("#about-intro #moreWrap").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("header #navBtn").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      }
    }
    
      var selection = document.querySelector('#moreWrap') !== null;
    if (selection) {

      const animated = document.querySelector('#moreWrap');

      animated.addEventListener('animationend', function() {
        console.log('Animation ended');
        $('#home').css({'max-height': 'unset', 'overflow': 'auto'});
        $('.studio-wrap').css({'max-height': 'unset', 'overflow': 'auto'});
      });
      
    }
  

   });

$(document).ready(function() {
   /**SMOOTH ANCHORS**/

   $('a.scroll').click(function(){
      var headerHeight = 0;
      $('html, body').animate({
         scrollTop: ($( $.attr(this, 'href') ).offset().top - headerHeight)
      }, 750);
      return false;
   });


   /**NAV**/
   $('.projectLink').on('click', function(e){
      e.preventDefault();
      $("nav").removeClass('open');
      $('#navBtn').removeClass("active");
      $('.logo').removeClass("active");
      $('html, body').animate({
         scrollTop: ($( $.attr(this, 'href') ).offset().top)
      }, 750);
   });

   $('#navBtn').on('click', function(e){
      e.preventDefault();
      $("nav").toggleClass('open');
      $('#navBtn').toggleClass("active");
      $('.logo').toggleClass("active");
   });

   $('#navBg').on('click', function(e){
      e.preventDefault();
      $("nav").removeClass('open');
      $('#navBtn').removeClass("active");
      $('.logo').removeClass("active");
   });

   $('#careersLink').on('click', function(e){
      $("nav").removeClass('open');
      $('#navBtn').removeClass("active");
      $('.logo').removeClass("active");
   });
});
   $(document).keydown(function(e){
      if(e.keyCode == 27) {
         $("nav").removeClass('open');
         $('#navBtn').removeClass("active");
         $('.logo').removeClass("active");
      }
   });

   $(window).on('resize',(function() {
      var headerHeight;
      $(function() {
      
      $(window).scroll(function() {
           var scroll = $(window).scrollTop();
               
           });
      });
   })).trigger('resize');

   


   /**ACCORDION**/
$(document).ready(function() {
   $('.band-item .acc-link').click(function(){
      $(this).next().slideToggle(300);
      $('.band-item .cont').not($(this).next()).slideUp(300);
      $(this).toggleClass('active');
      $('.band-item .acc-link').not($(this)).removeClass('active');
   });
});


})(jQuery);
