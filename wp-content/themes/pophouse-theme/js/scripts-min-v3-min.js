!function(e){function o(e){for(var o=window.location.search.substring(1).split("&"),t=0;t<o.length;t++){var a=o[t].split("=");if(a[0]==e)return a[1]}return!1}e(window).on("load",function(){e("#status").delay(500).fadeOut(500),e("#preloader").delay(500).fadeOut(750,function(){"projects"===o("p")&&document.querySelector("#workWrap").scrollIntoView({behavior:"smooth"})})}),e(document).ready(function(){console.log(o("p")),o("p")?(e("body").attr("id","noanimate").css({"max-height":"unset",overflow:"auto"}),e("#landing .text").css({animation:"unset",opacity:"1"}),e("#landing #moreWrap").css({animation:"unset",opacity:"1"}),e("header #navBtn").css({animation:"unset",opacity:"1"})):null!==document.querySelector("#moreWrap")&&(document.querySelector("#moreWrap").onanimationend=(()=>{console.log("Animation ended"),e("#home").css({"max-height":"unset",overflow:"auto"}),e(".about-wrap").css({"max-height":"unset",overflow:"auto"})}))}),e("a.scroll").click(function(){return e("html, body").animate({scrollTop:e(e.attr(this,"href")).offset().top-0},750),!1}),e(".projectLink").on("click",function(o){o.preventDefault(),e("nav").removeClass("open"),e("#navBtn").removeClass("active"),e(".logo").removeClass("active"),e("html, body").animate({scrollTop:e(e.attr(this,"href")).offset().top},750)}),e("#navBtn").on("click",function(o){o.preventDefault(),e("nav").toggleClass("open"),e("#navBtn").toggleClass("active"),e(".logo").toggleClass("active")}),e("#navBg").on("click",function(o){o.preventDefault(),e("nav").removeClass("open"),e("#navBtn").removeClass("active"),e(".logo").removeClass("active")}),e(document).keydown(function(o){27==o.keyCode&&(e("nav").removeClass("open"),e("#navBtn").removeClass("active"),e(".logo").removeClass("active"))}),e(window).scroll(function(o){var t=e(window).scrollTop();0===t?e("header").removeClass("scrolling"):e("header").addClass("scrolling"),t<=e("#contactWrap").offset().top-48?e("header").removeClass("end"):e("header").addClass("end"),t>=e("#waypoint").offset().top-48&&t<=e("#contactWrap").offset().top-48?(e("header").addClass("inverted"),console.log("Waypoint reached")):e("header").removeClass("inverted"),t>=e("#who-we-are").offset().top-48&&t<=e("#services").offset().top-48?(e("header").addClass("inverted2"),console.log("Waypoint reached")):e("header").removeClass("inverted2"),t>=e("#clients").offset().top-48&&t<=e("#press").offset().top-48?(e("header").addClass("inverted3"),console.log("Waypoint reached")):e("header").removeClass("inverted3")}),e(window).scroll(),e(".band-item .acc-link").click(function(){e(this).next().slideToggle(300),e(".cont").not(e(this).next()).slideUp(300),e(this).toggleClass("active"),e(".band-item .acc-link").not(e(this)).removeClass("active")})}(jQuery);