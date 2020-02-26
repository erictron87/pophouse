<?php 
$address = get_field('address', 12);
$joinEmail = get_field('join_email', 12);
$startEmail = get_field('start_email', 12);
$talkEmail = get_field('talk_email', 12);
$social = get_field('social_media', 12);

?>

<section id="contactWrap">
   <article class="contain">
      <div class="contacts splits col-3">
         <div class="split split-1 join">
            <a href="mailto:<?php echo $joinEmail; ?>">
               <h3>Join<br />Our Team</h3>
               <span><?php echo $joinEmail; ?></span>
            </a>
         </div>
         <div class="split split-1 work">
            <a href="mailto:<?php echo $startEmail; ?>">
               <h3>Start<br />a Project</h3>
               <span><?php echo $startEmail; ?></span>
            </a>
         </div>
         <div class="split split-1 media">
            <a href="mailto:<?php echo $talkEmail; ?>">
               <h3>Talk<br /> to Us</h3>
               <span><?php echo $talkEmail; ?></span>
            </a>
         </div>
      </div>
   </article>
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
