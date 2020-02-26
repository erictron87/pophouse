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

   $(window).on("load", function() {
      $('#status').delay(500).fadeOut(500);
      $('#preloader').delay(500).fadeOut(750, function(){
        if(getQueryVariable('p') === "projects"){
          document.querySelector("#workWrap").scrollIntoView({
                behavior: "smooth"
            });
        }
      });
   });
   $(document).ready(function() {
    console.log(getQueryVariable('p'));
    if(getQueryVariable('p')){
      $("body").attr("id", "noanimate").css({'max-height': 'unset', 'overflow': 'auto'});
      $("#landing .text").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("#landing #moreWrap").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
      $("header #navBtn").css({'animation': 'unset', 'opacity': '1', 'visibility': 'visible'});
    }else{
      var selection = document.querySelector('#moreWrap') !== null;
    if (selection) {
      const animated = document.querySelector('#moreWrap');
      animated.onanimationend = () => {
        console.log('Animation ended');
        $('#home').css({'max-height': 'unset', 'overflow': 'auto'});
        $('.studio-wrap').css({'max-height': 'unset', 'overflow': 'auto'});
      };
    }
  }

   });


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
      var header = $("header");
      $(window).scroll(function() {
           var scroll = $(window).scrollTop();
               if (scroll >= 1) {
                   header.addClass("scrolling");
               } else {
                   header.removeClass("scrolling");
               }
           });
      });
   })).trigger('resize');

   $(window).scroll(function(event) {
      var scroll = $(window).scrollTop();
      if (scroll <= ($('#contactWrap').offset().top - 48)) {
         $('header').removeClass('end');
      } else {
         $('header').addClass('end');
      }
      if ((scroll >= $('#waypoint').offset().top - 48) && (scroll <= ($('#contactWrap').offset().top - 48))) {
         $('header').addClass('inverted');
           console.log('Waypoint reached');
      } else {
         $('header').removeClass('inverted');
      }
      if ((scroll >= $('#who-we-are').offset().top - 48) && (scroll <= ($('#about-banner').offset().top - 48))) {
         $('header').addClass('inverted2');
           console.log('Waypoint reached');
      } else {
         $('header').removeClass('inverted2');
      }
      if ((scroll >= $('#clients').offset().top - 48) && (scroll <= ($('#press').offset().top - 48))) {
         $('header').addClass('inverted3');
           console.log('Waypoint reached');
      } else {
         $('header').removeClass('inverted3');
      }

   });

   //trigger the scroll
   $(window).scroll();


   /**ACCORDION**/

   $('.band-item .acc-link').click(function(){
      $(this).next().slideToggle(300);
      $('.cont').not($(this).next()).slideUp(300);
      $(this).toggleClass('active');
      $('.band-item .acc-link').not($(this)).removeClass('active');
   });

})(jQuery);
