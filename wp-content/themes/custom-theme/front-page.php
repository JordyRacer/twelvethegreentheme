<?php
/* front page template */
    get_header();
?>
<div class="one column">
  <?php
  // *Repeater
  // carousel_repeater
  // *Sub-Fields
  // carousel_image
  // carousel_text

  // check if the repeater field has rows of data
  if( have_rows('carousel_repeater') ):
    $i = 1; // Set the increment variable
	
	echo '<div id="carouselExampleSlidesNav2" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">';
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('carousel_repeater') ) : the_row();
		
		$image = get_sub_field('carousel_image');
		$text = get_sub_field('carousel_text');

	?>
	
	<div class="carousel-item <?php if($i == 1) echo 'active';?>">
      <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
  </div>
	
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 
	
	echo '</div>
			 <a class="carousel-control-prev" href="#carouselExampleSlidesNav2" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesNav2" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

else :
    // no rows found
endif;
?>

</div>

<div class="main-page-bg">

  <div class="ui stackable two column grid">

      <div class="column">
      <div class="p-md-5">
        <p>Twelve the Green is an exclusive nail and beauty studio in Chalfont St Giles, with a focus on promoting natural nail health through vegan and cruelty free based products.</p>
        
        <p>We pride ourselves on our top-notch nail, lash and brow skills, friendly chat, the best customer service and making you feel great.</p>
        <p>You can’t miss our PINK studio on the green, pop in, grab a glass of bubbly and #treatyourself</p>
        </div>
      </div>

      <div class="column">
          <div class="canvas-cta-box mt-5 mb-4">
              <h3><?php the_field('specials_box'); ?></h3>
              <p><?php the_field('specials_box_text'); ?></p>
              <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
              <script>new timelyButton("twelvethegreen", {"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_custom-1.png"});</script>
              </form>
          </div>
      </div>
  </div>
</div>

  <div class="ui stackable two column grid">
        <div class="column"> 
          <div class="buy-now mt-4 mb-4">
          <h5>BUY a </br>
              Giftcard </br>
              for someone </br>
              special
            </h5>
            <h6>#Treatsomeone</h6>
            <script>new timelyButton("twelvethegreen", {"isPurchaseButton":true,"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_buy_now.png"});</script>  
          </div>
        </div>  

        <div class="column"> 
          <div class="buy-now __blush-colorway mt-4 mb-4">
                <h5>BOOK an</br>
                    appointment,</br>
                    you deserve 
                    </br>it 
                </h5>
                <h6>#Treatsomeone</h6>
                <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                <script>new timelyButton("twelvethegreen", {"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_custom-1.png"});</script>
                </form>
          </div>
        </div>
  </div>

    <div class="instagram-bg">
          <div class="one column grid text-center">
            <h2>Our Instagram</h2>
          </div>
        <div class="one column grid text-center ">
        <!-- instagram widget -->
          <div class="instagram mt-5">
              <script src="https://apps.elfsight.com/p/platform.js" defer></script>
              <div class="elfsight-app-58c7edf2-35c4-4eda-b66f-184f9c0eacc4"></div>
          </div>
        </div>
    </div>

    <div class="one column grid text-center pt-4">
      <h2>Client Testimonials</h2>
    </div>

    

  <div class="one column">

        <?php

        // *Repeater
        // carousel_repeater
        // *Sub-Fields
        // carousel_image
        // carousel_text

        // check if the repeater field has rows of data
        if( have_rows('client_testimonials') ):
          $i = 1; // Set the increment variable
          
          echo '<div id="carouselExampleSlidesNav2" class="client-testimonials carousel slide" data-ride="carousel">
              <div class="carousel-inner">';
          
          // loop through the rows of data for the tab header
            while ( have_rows('client_testimonials') ) : the_row();
            
            $text = get_sub_field('client_text');
            $clientname = get_sub_field('client_name');

          ?>
          
          <div class="carousel-item client-testimonials__child-element <?php if($i == 1) echo 'active';?>">
                    <div class="d-block w100">
                      <h2><?php echo $text; ?></h2>
                      <p><?php echo $clientname; ?></p>
                    </div>
            </div>
          
                        
          <?php   $i++; // Increment the increment variable

          endwhile; //End the loop 
          
          echo '</div>
              <a class="carousel-control-prev" href="#carouselExampleSlidesNav2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleSlidesNav2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>';

        else :

            // no rows found

        endif;
        ?>

</div>


<!-- find us box -->

<div class="ui stackable sixteen column grid find-us">
    <div class="six wide column darkgreen-bg">
      <div class="map-text pl-4 pb-5 darkgreen-bg">
          <h2>Find Us</h2>

          <p>We are based on The Green in <br>
          Chalfont St Giles, with ample parking 
          <br>around the village.</p>

          <h6>12 The Green,</br>
          Chalfont St Giles, </br>
          Bucks, </br>
          HP8 4QF
          </h6>
      </div>
    </div>  

    <div class="ten wide column p-0 darkgreen-bg">
      <!-- <div id="map"></div> -->
      <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>
</div>

<!-- contact us three wide custom gird section -->

<div class="contact-us">
    <div class="contact-us__row1">
      <div class="p-2 p-md-5">
          <h2>Get In Touch</h2>
            <p>Twelve The Green<br>
              12 The Green, <br>
              Chalfont St Giles,<br> 
              Buckinghamshire, <br>
              HP8 4QF</p>
              <br>
          <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span> hello@twelvethegreen.co.uk</span></a>
          <br>
        </div>
      </div>

      <div class="contact-us__row2">
          <div class="pt-2 p-md-5 ml-2">
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

      <div class="contact-us__row3">
        <div class="p-2 p-md-5">
          <h2>Mailing List</h2>
          <!-- Mailchimp Plug in form needs adding -->
          <p>Pop your name and email on our mailing list and we will send you emails about upcoming events, offers and what’s going on at the studio.</p>
            <?php echo do_shortcode('[mc4wp_form id="2237"]'); ?>
          </div>
      </div>

</div>


<!--  Closing DIV  -->

<?php get_footer(); ?>

