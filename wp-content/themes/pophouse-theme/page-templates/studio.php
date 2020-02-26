<?php /* Template Name: Studio Page Template */ get_header(); ?>
<?php
   $thisPage="Studio";
   $pageTitle = "Studio - Pophouse";
   $pageDescription = "Pophouse is a team of interior, industrial and environmental graphic designers and strategists focused on positively impacting people through design.";
?>


<!--Begin Content-->
   <section id="frame"></section>
   <div id="waypoint" class="subScroll"></div>
   <section id="about-intro">
      <h1>
         <span class="text1">We Are</span>
         <span class="cont">
            <span class="text text2">Curious</span>
            <span class="text text3">Purposeful</span>
            <span class="text text4">Authentic</span>
            <span class="text text5">Fearless</span>
            <span class="text text6">Pophouse</span>
         </span>
      </h1>
      <a href="#studio-intro" id="moreWrap" class="scroll">
         <span>Learn More</span>
         <span class="line"></span>
      </a>
      </div>
   </section>
   <section id="studio-intro" class="sub-intro">
      <article class="splits col-2 contain">
         <div class="split split-lt">
            <h6>Our People</h6>
            <p class="heading"><?php echo get_field('subheading'); ?></p>
         </div>
         <div class="split split-rt">
            <?php echo get_field('description'); ?>
         </div>
      </article>
   </section>
   <section id="team" class="grid contain">
      <article class="splits col-3">
      <?php $teamMembers = get_field('team');
         foreach($teamMembers as $team){
            $teamPhoto = wp_get_attachment_image_src($team['photo'], 'full');
            echo '<div class="split split-1 ind">';
            echo '<img src="'.$teamPhoto[0].'" alt="Pophouse | Detroit Interior Design Firm" />';
            echo '<div>';
            echo '<h4>'.$team['name'].'</h4>';
            if(!empty($team['post-nominal_letters'])){
               echo '<span class="des">'.$team['post-nominal_letters'].'</span>';
            }
            echo '<span class="title">'.$team['title'].'</span>';
            echo '</div>';
            echo '</div>';
         }
       ?>
      
         <div class="split split-1 ind"></div>
         <div class="split split-1 ind"></div>
         <div class="split split-1 ind"></div>
         <div class="split split-1 ind"></div>
      </article>
   </section>
   <section id="careers">
      <article class="contain splits col-3">
         <div class="split split-1">
            <h6>Careers</h6>
         </div>
         <?php $joinEmail = get_field('join_email', 12); ?>
         <div class="split split-2">
            <p class="heading"><?php echo get_field('careers')['heading']; ?></p>
            <p>To apply for one of the available positions, please submit your application to <a href="mailto:<?php echo $joinEmail; ?>"><?php echo $joinEmail; ?></a></p>
            <div class="links">
               
         <?php
         $args = array(  
        'post_type' => 'job',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
    $count = 1;    
    while ( $loop->have_posts() ) : $loop->the_post(); 
         echo '<div class="band-item">';
         echo '<a href="'.get_the_permalink().'" class="acc-link">';
         echo '<span class="num">'.(($count<10)?'0'.$count:$count).'</span>';
         echo '<span class="title">'.get_the_title().'</span>';
         echo '<span class="icon"><img src="'.get_template_directory_uri().'/img/arrow-link.svg" alt="View Position" /></span>';
         echo '</a>';
         echo '</div>';
         $count++;
    endwhile;

    wp_reset_postdata();
    ?>
            </div>
         </div>
         </article>
      </section>

<?php include get_template_directory().'/page-templates/contact-module.php'; ?>
<?php get_footer(); ?>
