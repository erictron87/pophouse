<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php
   $thisPage="Projects";
   $pageTitle = "Projects - Pophouse";
   $pageDescription = "Pophouse is a team of interior, industrial and environmental graphic designers and strategists focused on positively impacting people through design.";

   $hero = get_the_post_thumbnail_url($post, 'hero');
   $intro = get_field('intro');
   $gallery = get_field('gallery');
?>
<!--Begin Content-->

   <section id="frame"></section>
   <section id="proj-hero" style="background-image: url(<?php echo $hero; ?>);">
      <a href="#project-intro" class="scroll">
         <span>Explore</span>
         <span class="line"></span>
      </a>
   </section>
   <div id="waypoint" class="projScroll"></div>
   <section id="project-intro" class="sub-intro">
      <article class="contain splits col-3">
         <div class="split split-2">
            <p class="heading"><?php echo the_title(); ?></p>
            <?php echo $intro['description']; ?>
         </div>
         <div class="split split-1">
            <ul class="details">
               <li>
                  <span>Partners</span>
                  <span><?php echo $intro['partners']; ?></span>
               </li>
               <li>
                  <span>Photography</span>
                  <span><?php echo $intro['photography']; ?></span>
               </li>
               <li>
                  <span>Location</span>
                  <span><?php echo $intro['location']; ?></span>
               </li>
            </ul>
         </div>
      </article>
   </section>
   <section id="gallery">
   <?php
      $totalRows = count($gallery);
      $cnt = 0;
      foreach($gallery as $row){
         if($cnt < ($totalRows -1)){
            $endClass = '';
         }else{
            $endClass = ' end-img';
         }
         switch($row['acf_fc_layout']){
            case "container_width":
               echo '<figure class="band contain single'.$endClass.'">';
               echo '<img src="'.wp_get_attachment_image_src($row['image'], 'hero')[0].'" alt="Pophouse | Detroit Interior Design Studio" />';
               echo '</figure>';
               break;
            case "full_width":
               echo '<figure class="band banner single'.$endClass.'">';
               echo '<img src="'.wp_get_attachment_image_src($row['image'], 'hero')[0].'" alt="Pophouse | Detroit Interior Design Studio" />';
               echo '</figure>';
               break;
            case "half_width":
               echo '<div class="band contain splits col-2 pair'.$endClass.'">';
               echo '<figure class="split split-lt">';
               echo '<img src="'.wp_get_attachment_image_src($row['left_image'], 'half_width')[0].'" alt="Pophouse | Detroit Interior Design Studio" />';
               echo '</figure>';
               echo '<figure class="split split-rt">';
               echo '<img src="'.wp_get_attachment_image_src($row['right_image'], 'half_width')[0].'" alt="Pophouse | Detroit Interior Design Studio" />';
               echo '</figure>';
               echo '</div>';
               break;
            case "split_single":
               echo '<figure class="band contain single divide'.$endClass.'">';
               echo '<img src="'.wp_get_attachment_image_src($row['image'], 'hero')[0].'" alt="Pophouse | Detroit Interior Design Studio" />';
               echo '</figure>';
               break;
         }
         $cnt++;
      }
    ?>
   
   </section>
   <?php 
      $address = get_field('address', 12);
      $social = get_field('social_media', 12);
   ?>
   <section id="contactWrap" class="projNav">
      <div class="cont">
         <p>Next Project</p>
                  <?php 
/**
 *  Infinite next and previous post looping in WordPress
 */
    
if( get_adjacent_post(false, '', false) ) { 
   next_post_link( '%link', '<h1>%title</h1>' );
   
} else { 
   $last = new WP_Query('post_type=project&posts_per_page=1&order=ASC'); $last->the_post();
      echo '<a href="' . get_permalink() . '"><h1>'.get_the_title().'</h1></a>';
    wp_reset_query();
}; ?>
      </div>
      <article class="footer">
      <div class="info">
         <?php
         if(!empty($address['line_2'])){
            $addy = $address['line_1'] . '<br />' . $address['line_2'];
         }else{
            $addy = $address['line_1'];
         }
            echo '<a href="'.$address['maps_link'].'" target="_blank">'.$addy.'<br />'.$address['city'].', '.$address['state'].' '.$address['zip'].'</a>';
            echo '<span>'.$address['phone'].'</span>';
            ?>
      </div>
      <ul class="social">
         <li><a href="<?php echo $social['instagram']; ?>" target="_blank">ig</a></li>
         <li><a href="<?php echo $social['facebook']; ?>" target="_blank">fb</a></li>
         <li><a href="<?php echo $social['pinterest']; ?>" target="_blank">p</a></li>
         <li><a href="<?php echo $social['linkedin']; ?>" target="_blank">in</a></li>
      </ul>
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

<?php get_footer(); ?>
