<?php
 /* Template Name: Contact Page Template */
    get_header();
?>

<div class="sub-page-bg-right">

<div class="one column">
    <div class="text-center m-5">
        <h3>Contact Us</h3>
    </div>
</div>


  <div class="contact-info">
      <div class="contact-info__row1">
          <div class="contact-block p-5">
            <p>We are based on the green in Chalfont St Giles with ample parking around the village.</p>
                <br>
                  <h2>Our Address</h2>
                  <br>
                    <p>Twelve The Green<br>
                    12 The Green, <br>
                    Chalfont St Giles,<br> 
                    Buckinghamshire, <br>
                    HP8 4QF</p>
                <br>
                  <h2>Our Email</h2>
                  <br>
                  <a href="mailto:hello@twelvethegreen.co.uk"><i class="fa fa-envelope" aria-hidden="true"></i> hello@twelvethegreen.co.uk</a>
                  <br>
              </div>
        </div>   
            
        <div class="contact-info__row2">
          <div class="opening-hours pink-bg">
            <div class="p-5">
              <h2>Opening Hours</h2>
                  <ul class="multi-column">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                    <li>Sunday</li>
                    <li>Closed</li>
                    <li><?php the_field('opening_times_tuesday');?>am - <?php the_field('closing_times_tuesday'); ?>:30pm</li>
                    <li><?php the_field('opening_times_wednesday');?>am - <?php the_field('closing_times_wednesday'); ?>:30pm</li>
                    <li><?php the_field('opening_times_thursday');?>am - <?php the_field('closing_times_thursday'); ?>pm</li>
                    <li><?php the_field('opening_times_friday');?>am - <?php the_field('closing_times_friday'); ?>:30pm</li>
                    <li><?php the_field('opening_times_saturday');?>am - <?php the_field('closing_times_saturday'); ?>pm</li>
                    <li>Closed</li>
                  </ul>
                </div>
            </div>
        </div> 

    </div>

    <div class="ui column grid find-us">
      <div class="ui column no-padding-top-bottom">
        <!-- <div id="map"></div> -->
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
      </div>
  </div>  

  <div class="ui stackable two sixteen wide grid pink-bg">
        <div class="six wide column ">
          <div class="p-3">
            <img class="img-border" src="<?php the_field('conact_page_image'); ?>" alt="">
          </div>
        </div>
        <div class="ten wide column sub-page-bg-right">
        <div class="pb-5">
            <h2>Mailing List</h2>
            <!-- Mailchimp Plug in form needs adding -->
            <p>Pop your name and email on our mailing list and we will send you emails about<br> upcoming events, offers and what’s going on at the studio.</p>
            <?php echo do_shortcode('[mc4wp_form id="2237"]'); ?>
            </div>
        </div>
  </div>

</div>

<div class="relative"></div>

<?php get_footer(); ?>

