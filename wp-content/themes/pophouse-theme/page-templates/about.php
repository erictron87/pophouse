<?php /* Template Name: About Page Template */ get_header(); ?>
<?php
   $thisPage="About";
   $pageTitle = "About - Pophouse";
   $pageDescription = "Pophouse is a team of interior, industrial and environmental graphic designers and strategists focused on positively impacting people through design.";
?>


<!--Begin Content-->
   <section id="frame"></section>
   <div id="waypoint" class="subScroll"></div>
   <section id="who-we-are" class="sub-intro">
      <article class="splits col-2 contain">
         <div class="split split-lt">
            <h6>Who We Are</h6>
            <p class="heading"><?php echo get_field('subheading'); ?></p>
         </div>
         <div class="split split-rt">
            <?php echo get_field('description'); ?>
         </div>
      </article>
   </section>
   <?php $banner = get_field('banner_image');
      $bannerImg = wp_get_attachment_image_src($banner, 'hero');
    ?>
   <figure id="about-banner" style="background-image: url(<?php echo $bannerImg[0]; ?>);"></figure>

   <?php $services = get_field('services'); ?>
   <section id="services">
      <article class="contain splits col-3 intro">
         <div class="split split-1">
            <h6>Our Services</h6>
         </div>
         <div class="split split-2">
            <p class="heading"><?php echo $services['description']; ?></p>
         </div>
      </article>
      <article class="contain service-list">
         <div class="band-item">
            <span class="acc-link">
               <span class="num">01</span>
               <span class="title"><?php echo $services['service_1']['title']; ?></span>
               <span class="icon">+</span>
            </span>
            <div class="cont">
               <div class="splits col-3">
                  <div class="split split-2">
                     <p><?php echo $services['service_1']['description']; ?></p>
                     <?php if($services['service_1']['column_headings']){
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_1']['list_heading_1'].'</li>';
                        foreach($services['service_1']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        echo '</ul>';
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_1']['column_2_heading'].'</li>';

                        foreach($services['service_1']['column_2_list'] as $listIt2){
                           echo '<li>'.$listIt2['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } else{
                        echo '<ul>';
                        foreach($services['service_1']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } ?>
                  </div>
                  <div class="split split-1 icon-wrap">
                     <img src="<?php echo wp_get_attachment_image_src($services['service_1']['icon'], full)[0]; ?>" alt="Pophouse | Detroit Interior Design Firm" class="icon" />
                  </div>
               </div>
            </div>
         </div>
         <div class="band-item">
            <span class="acc-link">
               <span class="num">02</span>
               <span class="title"><?php echo $services['service_2']['title']; ?></span>
               <span class="icon">+</span>
            </span>
            <div class="cont">
               <div class="splits col-3">
                  <div class="split split-2">
                     <p><?php echo $services['service_2']['description']; ?></p>
                     <?php if($services['service_2']['column_headings']){
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_2']['list_heading_1'].'</li>';
                        foreach($services['service_2']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        
                        echo '<li>Leadership Interviews</li>';
                        echo '<li>Observations</li>';
                        echo '<li>Surveys</li>';
                        echo '</ul>';
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_2']['column_2_heading'].'</li>';

                        foreach($services['service_2']['column_2_list'] as $listIt2){
                           echo '<li>'.$listIt2['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } else{
                        echo '<ul>';
                        foreach($services['service_2']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } ?>
                  </div>
                  <div class="split split-1 icon-wrap">
                     <img src="<?php echo wp_get_attachment_image_src($services['service_2']['icon'], full)[0]; ?>" alt="Pophouse | Detroit Interior Design Firm" class="icon" />
                  </div>
               </div>
            </div>
         </div>
         <div class="band-item">
            <span class="acc-link">
               <span class="num">03</span>
               <span class="title"><?php echo $services['service_3']['title']; ?></span>
               <span class="icon">+</span>
            </span>
            <div class="cont">
               <div class="splits col-3">
                  <div class="split split-2">
                     <p><?php echo $services['service_3']['description']; ?></p>
                     <?php if($services['service_3']['column_headings']){
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_3']['list_heading_1'].'</li>';
                        foreach($services['service_3']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        
                        echo '<li>Leadership Interviews</li>';
                        echo '<li>Observations</li>';
                        echo '<li>Surveys</li>';
                        echo '</ul>';
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_3']['column_2_heading'].'</li>';

                        foreach($services['service_3']['column_2_list'] as $listIt2){
                           echo '<li>'.$listIt2['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } else{
                        echo '<ul>';
                        foreach($services['service_3']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } ?>
                  </div>
                  <div class="split split-1 icon-wrap">
                     <img src="<?php echo wp_get_attachment_image_src($services['service_3']['icon'], full)[0]; ?>" alt="Pophouse | Detroit Interior Design Firm" class="icon" />
                  </div>
               </div>
            </div>
         </div>
         <div class="band-item">
            <span class="acc-link">
               <span class="num">04</span>
               <span class="title"><?php echo $services['service_4']['title']; ?></span>
               <span class="icon">+</span>
            </span>
            <div class="cont">
               <div class="splits col-3">
                  <div class="split split-2">
                     <p><?php echo $services['service_4']['description']; ?></p>
                     <?php if($services['service_4']['column_headings']){
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_4']['list_heading_1'].'</li>';
                        foreach($services['service_4']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        
                        echo '</ul>';
                        echo '<ul class="half">';
                        echo '<li>'.$services['service_4']['column_2_heading'].'</li>';

                        foreach($services['service_4']['column_2_list'] as $listIt2){
                           echo '<li>'.$listIt2['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } else{
                        echo '<ul>';
                        foreach($services['service_4']['column_1_list'] as $listIt1){
                           echo '<li>'.$listIt1['list_item'].'</li>';   
                        }
                        echo '</ul>';
                     } ?>
                  </div>
                  <div class="split split-1 icon-wrap">
                     <img src="<?php echo wp_get_attachment_image_src($services['service_4']['icon'], full)[0]; ?>" alt="Pophouse | Detroit Interior Design Firm" class="icon" />
                  </div>
               </div>
            </div>
         </div>
         
      </article>
   </section>
   <?php $clients = get_field('clients'); ?>
   <section id="clients">
      <article class="contain splits col-3">
         <div class="split split-1">
            <h6>Our Clients</h6>
         </div>
         <div class="split split-2 accordion">
            <p class="heading"><?php echo $clients['subheading']; ?></p>
            <p><?php echo $clients['description']; ?></p>
         </div>
      </article>

      <article class="contain client list">
         <ul>
         <?php if(is_array($clients['client_list'])){
            foreach($clients['client_list'] as $client){
                  echo '<li>'.$client['client_name'].'</li>';
            }
         } ?>
            
         </ul>
      </article>
   </section>
   <?php $press = get_field('recent_press'); 

   $pressImg = wp_get_attachment_image_src($press['image'], 'full');
      
   ?>
   <section id="press">
      <article class="contain splits col-2">
         <div class="split split-lt">
            <figure style="background-image: url(<?php echo $pressImg[0]; ?>);"></figure>
         </div>
         <div class="split split-rt">
            <h6>Recent Press</h6>
            <ul class="posts">
               <?php 
               if(is_array($press['articles'])){
                  foreach($press['articles'] as $article){
                     echo '<li>';
                     echo '<a href="'.$article['url'].'" target="_blank">';
                     echo '<span class="title">'.$article['name'].'</span>';
                     echo '<span class="meta">';
                     echo '<span>'.$article['publication'].'</span>';
                     echo '<span>'.$article['publication_date'].'</span>';
                     echo '</span>';
                     echo '</a>';
                     echo '</li>';
                  }
               } ?>
               
            </ul>
         </div>
      </article>
   </section>
   
<?php include get_template_directory().'/page-templates/contact-module.php'; ?>
<?php get_footer(); ?>

