<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<meta name="author" content="Zoyes Creative">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-152.png" rel="apple-touch-icon-precomposed">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta http-equiv="X-UA-Compatible" content="IE=11,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	
<?php
$loseAnim = false;
if((isset($_GET['p']))) {
    $loseAnim = true;
}?>
<?php if (is_front_page() && !$loseAnim): ?>
<body id="home">
<?php elseif (is_page("About")): ?>
<body id="subpage" class="about-wrap">
   <div id="preloader">
    	<div id="status">
         <span></span>
   	</div>
   </div>
<?php elseif (is_page("Studio")): ?>
<body id="subpage" class="studio-wrap">
   <div id="preloader">
    	<div id="status">
         <span></span>
   	</div>
   </div>
<?php elseif (is_singular("project")): ?>
<body id="subpage" class="project-wrap">
   <div id="preloader">
    	<div id="status">
         <span></span>
   	</div>
   </div>
<?php elseif (is_page("Careers")||(is_singular('job'))): ?>
<body id="subpage" class="careers-wrap">
   <div id="preloader">
      <div id="status">
         <span></span>
      </div>
   </div>
<?php else : ?>
<body>
   <div id="preloader">
    	<div id="status">
         <span></span>
   	</div>
   </div>
<?php endif; ?>
<!--Preloader-->


<!--Begin Header-->
<?php if (!is_front_page()): ?>
	<header id="header">
		<a href="<?php echo home_url( '/' ); ?>" title="Pophouse Design" class="logo">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 26.82245">
            <path d="M15.30672,1.82824A10.65561,10.65561,0,0,0,9.22432.35792H0V26.46458H4.34951V13.32243H9.22432c5.59843,0,8.43708-2.17978,8.43708-6.47874A5.71173,5.71173,0,0,0,15.30672,1.82824ZM9.76028,9.18756H4.34951V4.49284H9.76028c2.4846,0,3.40838.63714,3.40838,2.35085C13.16866,8.00274,12.76371,9.18756,9.76028,9.18756ZM33.66476.00005A12.76766,12.76766,0,0,0,24.232,3.90958a13.73606,13.73606,0,0,0-3.58471,9.50162A13.73627,13.73627,0,0,0,24.232,22.91287a12.76766,12.76766,0,0,0,9.43279,3.90953,12.81957,12.81957,0,0,0,9.45055-3.90929,13.70674,13.70674,0,0,0,3.60282-9.50191,13.70143,13.70143,0,0,0-3.60249-9.46128A12.79107,12.79107,0,0,0,33.66476.00005Zm0,22.61584a8.18193,8.18193,0,0,1-6.12712-2.65945A9.63888,9.63888,0,0,1,25.14,13.4112c0-5.2475,3.66485-9.20464,8.52476-9.20464,4.88036,0,8.56063,3.95714,8.56063,9.20464C42.22539,18.57273,38.46512,22.61589,33.66476,22.61589ZM91.67033.35792h-.17085V9.18751H79.63863V.35792H75.28912V26.46458h4.34951V13.32233H91.49948V26.46458h4.34963V.35792H91.67033ZM114.03456.00005a12.76767,12.76767,0,0,0-9.4328,3.90953,13.736,13.736,0,0,0-3.5847,9.50162,13.73617,13.73617,0,0,0,3.5847,9.50167,13.35605,13.35605,0,0,0,18.88334.00024,13.70669,13.70669,0,0,0,3.60282-9.50191,13.70138,13.70138,0,0,0-3.60249-9.46128A12.791,12.791,0,0,0,114.03456.00005Zm0,22.61584a8.18194,8.18194,0,0,1-6.12714-2.65945,9.63888,9.63888,0,0,1-2.39763-6.54524c0-5.2475,3.66485-9.20464,8.52477-9.20464,4.88036,0,8.56063,3.95714,8.56063,9.20464C122.59519,18.57273,118.83492,22.61589,114.03456,22.61589ZM148.41274.35792h-.17084V16.5961c0,3.82568-2.10287,6.01979-5.76943,6.01979-3.64376,0-5.73357-2.19411-5.73357-6.01979V.35792h-4.3496V16.73924a10.03194,10.03194,0,0,0,2.80623,7.34559,11.08194,11.08194,0,0,0,14.585.00015,10.01774,10.01774,0,0,0,2.81086-7.34574V.35792h-4.17866Zm51.41642,0H183.448V26.46458H200V22.32966H187.79745V13.32233h10.05546V9.18751H187.79745V4.49279H200V.35792ZM67.4083,1.82824A10.65567,10.65567,0,0,0,61.32589.35792H52.10157V26.46458h4.34951V13.32243h4.87481c5.59843,0,8.43708-2.17978,8.43708-6.47874A5.71175,5.71175,0,0,0,67.4083,1.82824ZM61.86185,9.18756H56.45108V4.49284h5.41077c2.48461,0,3.40837.63714,3.40837,2.35085C65.27022,8.00274,64.86528,9.18756,61.86185,9.18756Zm113.06086,3.54985a15.46037,15.46037,0,0,0-5.83116-2.61411c-.61449-.14658-1.20057-.27377-1.71766-.386-2.8624-.62124-4.29916-.93309-4.29916-2.82581,0-1.76773,1.751-2.9554,4.35713-2.9554A5.61277,5.61277,0,0,1,171.15305,5.2a5.04721,5.04721,0,0,1,1.65021,2.94651l.03547.18853.18319-.057,4.10705-1.2781.15836-.04927-.04457-.15977a8.81288,8.81288,0,0,0-3.5184-4.9285A11.15968,11.15968,0,0,0,167.3245,0a10.08126,10.08126,0,0,0-6.65326,2.13125,5.99438,5.99438,0,0,0-2.311,4.51512,5.25546,5.25546,0,0,0,2.40592,4.79228,17.52689,17.52689,0,0,0,5.524,1.961c3.97664.945,7.01832,1.92883,7.01832,5.21428,0,2.5833-2.03988,4.25245-5.19683,4.25245-3.30223,0-5.30379-1.54932-5.78828-4.48058l-.032-.19353-.18733.05829-4.25128,1.323-.15049.04681.03457.15379A8.32317,8.32317,0,0,0,161.205,24.884a12.37989,12.37989,0,0,0,7.04988,1.93835,10.26,10.26,0,0,0,6.92112-2.28008,8.09679,8.09679,0,0,0,2.62531-6.28624A6.80793,6.80793,0,0,0,174.92271,12.73741Z"/>
         </svg>
		</a>
<?php else: ?>
	<header id="header">
   <a href="#landing" title="Pophouse Design" class="logo scroll">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 26.82245">
         <path d="M15.30672,1.82824A10.65561,10.65561,0,0,0,9.22432.35792H0V26.46458H4.34951V13.32243H9.22432c5.59843,0,8.43708-2.17978,8.43708-6.47874A5.71173,5.71173,0,0,0,15.30672,1.82824ZM9.76028,9.18756H4.34951V4.49284H9.76028c2.4846,0,3.40838.63714,3.40838,2.35085C13.16866,8.00274,12.76371,9.18756,9.76028,9.18756ZM33.66476.00005A12.76766,12.76766,0,0,0,24.232,3.90958a13.73606,13.73606,0,0,0-3.58471,9.50162A13.73627,13.73627,0,0,0,24.232,22.91287a12.76766,12.76766,0,0,0,9.43279,3.90953,12.81957,12.81957,0,0,0,9.45055-3.90929,13.70674,13.70674,0,0,0,3.60282-9.50191,13.70143,13.70143,0,0,0-3.60249-9.46128A12.79107,12.79107,0,0,0,33.66476.00005Zm0,22.61584a8.18193,8.18193,0,0,1-6.12712-2.65945A9.63888,9.63888,0,0,1,25.14,13.4112c0-5.2475,3.66485-9.20464,8.52476-9.20464,4.88036,0,8.56063,3.95714,8.56063,9.20464C42.22539,18.57273,38.46512,22.61589,33.66476,22.61589ZM91.67033.35792h-.17085V9.18751H79.63863V.35792H75.28912V26.46458h4.34951V13.32233H91.49948V26.46458h4.34963V.35792H91.67033ZM114.03456.00005a12.76767,12.76767,0,0,0-9.4328,3.90953,13.736,13.736,0,0,0-3.5847,9.50162,13.73617,13.73617,0,0,0,3.5847,9.50167,13.35605,13.35605,0,0,0,18.88334.00024,13.70669,13.70669,0,0,0,3.60282-9.50191,13.70138,13.70138,0,0,0-3.60249-9.46128A12.791,12.791,0,0,0,114.03456.00005Zm0,22.61584a8.18194,8.18194,0,0,1-6.12714-2.65945,9.63888,9.63888,0,0,1-2.39763-6.54524c0-5.2475,3.66485-9.20464,8.52477-9.20464,4.88036,0,8.56063,3.95714,8.56063,9.20464C122.59519,18.57273,118.83492,22.61589,114.03456,22.61589ZM148.41274.35792h-.17084V16.5961c0,3.82568-2.10287,6.01979-5.76943,6.01979-3.64376,0-5.73357-2.19411-5.73357-6.01979V.35792h-4.3496V16.73924a10.03194,10.03194,0,0,0,2.80623,7.34559,11.08194,11.08194,0,0,0,14.585.00015,10.01774,10.01774,0,0,0,2.81086-7.34574V.35792h-4.17866Zm51.41642,0H183.448V26.46458H200V22.32966H187.79745V13.32233h10.05546V9.18751H187.79745V4.49279H200V.35792ZM67.4083,1.82824A10.65567,10.65567,0,0,0,61.32589.35792H52.10157V26.46458h4.34951V13.32243h4.87481c5.59843,0,8.43708-2.17978,8.43708-6.47874A5.71175,5.71175,0,0,0,67.4083,1.82824ZM61.86185,9.18756H56.45108V4.49284h5.41077c2.48461,0,3.40837.63714,3.40837,2.35085C65.27022,8.00274,64.86528,9.18756,61.86185,9.18756Zm113.06086,3.54985a15.46037,15.46037,0,0,0-5.83116-2.61411c-.61449-.14658-1.20057-.27377-1.71766-.386-2.8624-.62124-4.29916-.93309-4.29916-2.82581,0-1.76773,1.751-2.9554,4.35713-2.9554A5.61277,5.61277,0,0,1,171.15305,5.2a5.04721,5.04721,0,0,1,1.65021,2.94651l.03547.18853.18319-.057,4.10705-1.2781.15836-.04927-.04457-.15977a8.81288,8.81288,0,0,0-3.5184-4.9285A11.15968,11.15968,0,0,0,167.3245,0a10.08126,10.08126,0,0,0-6.65326,2.13125,5.99438,5.99438,0,0,0-2.311,4.51512,5.25546,5.25546,0,0,0,2.40592,4.79228,17.52689,17.52689,0,0,0,5.524,1.961c3.97664.945,7.01832,1.92883,7.01832,5.21428,0,2.5833-2.03988,4.25245-5.19683,4.25245-3.30223,0-5.30379-1.54932-5.78828-4.48058l-.032-.19353-.18733.05829-4.25128,1.323-.15049.04681.03457.15379A8.32317,8.32317,0,0,0,161.205,24.884a12.37989,12.37989,0,0,0,7.04988,1.93835,10.26,10.26,0,0,0,6.92112-2.28008,8.09679,8.09679,0,0,0,2.62531-6.28624A6.80793,6.80793,0,0,0,174.92271,12.73741Z"/>
      </svg>
   </a>
<?php endif; ?>
   <button id="navBtn">
      <h5>Menu</h5>
      <span class="shape"></span>
   </button>
	  <nav>
		<div id="navBg"></div>
		<div id="navWrap">
			<ul id="mainNav">
				<li>
					<?php echo (is_page('Home')) ? '<a class="smooth projectLink" href="#workWrap">Projects</a>' : '<a class="active" href="'.get_permalink( get_page_by_title( 'Home' ) ).'#workWrap">Projects</a>'; ?>
				</li>
				<li>
					<a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>" <?php echo (is_page('About')) ? ' class="active"' : ''; ?>>About</a>
				</li>
				<li>
					<a href="<?php echo get_permalink( get_page_by_title( 'Studio' ) ); ?>" <?php echo (is_page('Studio')) ? ' class="active"' : ''; ?>>Studio</a>
				</li>
				<li>
					<?php echo (is_page('Studio')) ? '<a class="smooth" href="#careers" id="careersLink">Careers</a>' : '<a href="'.get_permalink( get_page_by_title( 'Studio' ) ).'#careers" id="careersLink">Careers</a>'; ?>
				</li>
				<li>
					<a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>" <?php echo (is_page('Contact')) ? ' class="active"' : ''; ?>>Contact</a>
				</li>
			</ul>
			<ul class="social">
				<li><a href="https://www.instagram.com/pophousedesign" target="_blank">ig</a></li>
				<li><a href="https://www.facebook.com/pophousedetroit/" target="_blank">fb</a></li>
				<li><a href="https://www.pinterest.com/pophousedetroit/" target="_blank">p</a></li>
				<li><a href="https://www.linkedin.com/company/dpop-/" target="_blank">in</a></li>
			</ul>
		</div>
	</nav>

</header>