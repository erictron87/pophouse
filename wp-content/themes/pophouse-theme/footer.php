<?php wp_footer(); ?>
		<script>
			
			if((top.location.pathname === '/pop/studio/') && (window.sessionStorage.getItem('Studio') != 'visited')){
			jQuery('#preloader, #status').remove();
			}
		</script>
		<script>
			//Drop visited pages in session storage to control page animations
			jQuery(document).ready(function() {
				window.sessionStorage.setItem('<?php echo get_the_title(); ?>', 'visited');
			});

			jQuery(window).on("load", function() {
			  jQuery('#status').delay(500).fadeOut(500);
			  jQuery('#preloader').delay(500).fadeOut(350);
			});

			jQuery(window).scroll(function(event) {
      var scroll = jQuery(window).scrollTop();
      var header = jQuery("header");
      if (scroll >= 1) {
           header.addClass("scrolling");
       } else {
           header.removeClass("scrolling");
       }
       if ( jQuery( "#contactWrap" ).length ) {
      if (scroll <= (jQuery('#contactWrap').offset().top - 48)) {
         header.removeClass('end');
      } else {
         header.addClass('end');
      } }
      if ( jQuery( "#waypoint" ).length ) {
      if ((scroll >= jQuery('#waypoint').offset().top - 48) && (scroll <= (jQuery('#contactWrap').offset().top - 48))) {
         header.addClass('inverted');
           
      } else {
         header.removeClass('inverted');
      } }
      if ( jQuery( "#who-we-are" ).length ) {
      if ((scroll >= jQuery('#who-we-are').offset().top - 48) && (scroll <= (jQuery('#about-banner').offset().top - 48))) {
         header.addClass('inverted2');
           
      } else {
         header.removeClass('inverted2');
      } }
      if ( jQuery( "#studio-intro" ).length ) {
      if ((scroll >= jQuery('#studio-intro').offset().top - 48) && (scroll <= (jQuery('#contactWrap').offset().top - 48))) {
         header.addClass('inverted2');
           
      } else {
         header.removeClass('inverted2');
      } }
      if ( jQuery( "#clients" ).length ) {
      if ((scroll >= jQuery('#clients').offset().top - 48) && (scroll <= (jQuery('#press').offset().top - 48))) {
         header.addClass('inverted3');
           
      } else {
         header.removeClass('inverted3');
      } }

   });

   //trigger the scroll
   jQuery(window).scroll();
		</script>
	</body>
</html>