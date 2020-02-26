<?php /* Template Name: Home Page Template */ get_header(); ?>
<?php
   $thisPage="Home";
   $pageTitle = "Home - Pophouse";
   $pageDescription = "Pophouse is a team of interior, industrial and environmental graphic designers and strategists focused on positively impacting people through design.";
?>
<!--Begin Content-->
   <section id="frame"></section>
   <section id="landing">
      <h1>
         <span class="text text1">We Design</span>
         <span class="text text2">Thoughtfully</span>
         <span class="text text3">Assembled<br class="visible-sm" /> Spaces</span>
      </h1>
      <div id="moreWrap">
         <a href="#waypoint" class="scroll hidden-mob">
            <span>Come Inside</span>
            <span class="line"></span>
         </a>
         <a href="#intro" class="scroll visible-mob">
            <span>Come Inside</span>
            <span class="line"></span>
         </a>
      </div>
   </section>
   <section id="intro" class="splits col-2">
      <div class="split split-lt">
         <figure><img src="<?php echo wp_get_attachment_image_src(get_field('about')['image'], 'hero')[0]; ?>" alt="Pophouse | Detroit Interior Design Firm" /></figure>
      </div>
      <div class="split split-rt">
         <div class="band"></div>
         <span id="waypoint" class="line"></span>
         <div class="cont">
            <p><?php echo get_field('about')['description']; ?></p>
            <a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>" class="btn">
               <span class="shape"></span>
               <span>Learn More</span>
            </a>
         </div>
      </div>
   </section>
   
   <section id="workWrap" class="contain">
      <h2 class="line"><span>Featured Projects</span></h2>
      <?php $featuredProjects = get_field('featured_projects');
      foreach($featuredProjects as $project){
            $featuredIds[] = $project['project'];
            $link = get_the_permalink($project['project']); 
            $img = wp_get_attachment_image_src($project['thumbnail'], 'featured-project-thumbnail');
            echo '<div class="project splits col-3 '.$project['thumbnail_position'].'">';
            if($project['thumbnail_position'] == 'img-rt'){
               echo '<div class="split split-1">';
               echo '<div class="cont">';
               echo '<a href="'.$link.'">';
               echo '<h3>'.$project['title'].'</h3>';
               echo '<span class="title">'.get_the_title($project['project']).'</span>';
               echo '</a>';
               echo '<a href="'.$link.'" class="view btn">View Project</a>';
               echo '</div>';
               echo '</div>';
               echo '<div class="split split-2 featImg">';
               echo '<a href="'.$link.'" class="figure"><img src="'.$img[0].'" alt="Pophouse | Detroit Interior Design Firm" /></a>';
               echo '</div>';
            }else{
               echo '<div class="split split-2 featImg">';
               echo '<a href="'.$link.'" class="figure"><img src="'.$img[0].'" alt="Pophouse | Detroit Interior Design Firm" /></a>';
               echo '</div>';
               echo '<div class="split split-1">';
               echo '<div class="cont">';
               echo '<a href="'.$link.'">';
               echo '<h3>'.$project['title'].'</h3>';
               echo '<span class="title">'.get_the_title($project['project']).'</span>';
               echo '</a>';
               echo '<a href="'.$link.'" class="view btn">View Project</a>';
               echo '</div>';
               echo '</div>';
            }
            
            echo '</div>';
      }

   ?>
      
   </section>
   <section id="moreProjects">
      <article  class="contain">
         <h2 class="line"><span>Other Projects</span></h2>
         <div class="grid splits col-3">
             <?php
               $args = array(  
              'post_type' => 'project',
              'post_status' => 'publish',
              'posts_per_page' => 8, 
              'orderby' => 'title', 
              'order' => 'ASC', 
              'post__not_in' => $featuredIds
          );

          $loop = new WP_Query( $args ); 
          while ( $loop->have_posts() ) : $loop->the_post(); 
            echo '<a href="'.get_the_permalink().'" class="split split-1">';
            echo '<figure><img src="'.wp_get_attachment_image_src(get_field('thumbnail'), 'project-thumbnail')[0].'" alt="Pophouse | Detroit Interior Design Firm" /></figure>';
            echo '<span class="info">';
            echo '<h4>'.get_the_title().'</h4>';
            echo '<span class="btn">View Project</span>';
            echo '</span>';
            echo '</a>';
          endwhile;

          wp_reset_postdata();

          $comingSoon = get_field('other_projects');
          foreach($comingSoon as $proj){
            $thum = wp_get_attachment_image_src($proj['thumbnail'], 'project-thumbnail');

               echo '<a href="#" class="split split-1">';
               echo '<figure><img src="'.$thum[0].'" alt="Pophouse | Detroit Interior Design Firm" /></figure>';
               echo '<span class="info">';
               echo '<h4>'.$proj['title'].'</h4>';
               echo '<span class="btn no-link">Coming Soon</span>';
               echo '</span>';
               echo '</a>';
          }
          ?>

            
            <a href="" class="split split-1"></a>
            <a href="" class="split split-1"></a>
            <a href="" class="split split-1"></a>
            <a href="" class="split split-1"></a>
         </div>
      </article>
   </section>
<?php include get_template_directory().'/page-templates/contact-module.php'; ?>
<?php get_footer(); ?>