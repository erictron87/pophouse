<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php
   $thisPage="Careers";
   $pageTitle = "Careers - Pophouse";
   $pageDescription = "Pophouse is a team of interior, industrial and environmental graphic designers and strategists focused on positively impacting people through design.";
?>


<!--Begin Content-->
   <section id="frame"></section>
   <div id="waypoint" class="subScroll"></div>
   <section id="studio-intro" class="careers sub-intro">
      <article class="contain splits col-3">
         <div class="split split-1">
            <h6>Careers</h6>
         </div>
         <div class="split split-2">
            <p class="heading position"><?php echo get_the_title(); ?></p>
            <p><?php echo get_field('description'); ?></p>
            <p>To apply for this position, please submit your application to <a href="mailto:careers@pophouse.design">careers@pophouse.design</a>.</p>
         </div>
      </article>
   </section>
   <section id="posting-info">
      <article class="contain splits col-3">
         <div class="split split-1"></div>
         <div class="split split-2 accordion">
            <div class="band-item">
               <span class="acc-link">
                  <span class="num">01</span>
                  <span class="title">Responsibilities</span>
                  <span class="icon">+</span>
               </span>
               <div class="cont resp">
                  <ul>
                     <?php $respon = get_field('responsibilities'); 
                        foreach($respon as $res){
                           echo '<li>'.$res['responsibility'].'</li>';
                        }
                     ?>
                  </ul>
               </div>
            </div>
            <div class="band-item">
               <span class="acc-link">
                  <span class="num">02</span>
                  <span class="title">Soft Skills</span>
                  <span class="icon">+</span>
               </span>
               <div class="cont skills">
                  <ul>
                     <?php $skills = get_field('soft_skills'); 
                        foreach($skills as $skill){
                           echo '<li>'.$skill['skill'].'</li>';
                        }
                     ?>
                  </ul>
               </div>
            </div>
            <div class="band-item">
               <span class="acc-link">
                  <span class="num">03</span>
                  <span class="title">Qualifications</span>
                  <span class="icon">+</span>
               </span>
               <div class="cont qual">
                  <ul>
                     <?php $quals = get_field('qualifications'); 
                        foreach($quals as $qual){
                           echo '<li>'.$qual['qualification'].'</li>';
                        }
                     ?>
                  </ul>
               </div>
            </div>
         </div>
      </article>
   </section>
<?php endwhile; ?>

   <?php else: ?>

      <!-- article -->
      <article>

         <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

      </article>
      <!-- /article -->

   <?php endif; ?>   
<?php include get_template_directory().'/page-templates/contact-module.php'; ?>


   

<?php get_footer(); ?>
