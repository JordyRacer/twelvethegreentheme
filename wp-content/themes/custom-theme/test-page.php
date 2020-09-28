<?php
 /* Template Name: test page */
    get_header();
?>

<script> var bookingButton = new timelyButton('twelvethegreen', {"dontCreateButton":true});</script>

<div class="one column sub-page-bg">
    
   <div class="text-center">
    <h3>Services</h3>
        <ul class="list-inline top-list">
            <li class="list-inline-item active"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/services">Services&nbsp;&nbsp;&nbsp;&nbsp;</a>|</li>
            <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/gift-cards">Gift Cards &nbsp;</a>|</li>
            <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/private-events">Private Events </a></li>
        </ul>
   </div>


<div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Polish</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Mani</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Pedi</h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
        </ul>
  <?php if( have_rows('polish_test') ): 
  //  <!-- service row fetauring service name - subtitle and prices -->
      while ( have_rows('polish_test') ) : the_row(); ?>

      <ul class="list-inlne">
            <li class="list-inline-item center">
              <!-- service title -->
             <?php the_sub_field('service_name'); ?>
             <br>
              <!-- service subtitle & information modal button (the sub repeater )-->
                <span><?php the_sub_field('service_subtitle'); ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal1">i</button></span>
            </li>
            <!-- service price mani box -->
            <li class="list-inline-item pricebox" >
                £<?php the_sub_field('service_price_mani'); ?>
            </li>
            <!-- service price pedi box -->
            <li class="list-inline-item pricebox" >
                £<?php the_sub_field('service_price_pedi'); ?>
            </li> 
                <?php if( have_rows('modal_repeater')):  
                   
                    while ( have_rows('modal_repeater')) : the_row(); 

                    ?>
                    <!-- attached sub row modal info box -->
                              <div class="modal" id="myModal1">    
                                  <div class="modal-dialog cutom-modal-dialog">
                                      <div class="custom-modal">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                          <h2><?php the_sub_field('modal_header'); ?></h2>
                                          <button type="button" class="close" data-dismiss="modal">×</button>
                                      </div>
                                  
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                          <p><?php the_sub_field('modal_body'); ?></p><br>
                                          <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php the_sub_field('service_time_hrs'); ?>:Hr - <?php the_sub_field('service_time_mins'); ?> Mins</span>
                                      </div>
                                  
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                          <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                          <script>new timelyButton("twelvethegreen", {"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_custom-1.png"});</script>
                                          </form>
                                      </div>
                                  
                                      </div>
                                  </div>
                    <?php endwhile;?>
                              </div>
                              </ul>
                    <?php endif; ?>
                    <?php 
                    endwhile;
                    endif; ?>
                     
</div>                      

<div class="service-holder">
<ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Gels</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Mani</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Pedi</h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>
  <?php if( have_rows('gel_test') ): 
    //  <!-- service row fetauring service name - subtitle and prices -->
      while ( have_rows('gel_test') ) : the_row(); ?>

      <ul class="list-inlne">
            <li class="list-inline-item center">
              <!-- service title -->
              <?php the_sub_field('service_name'); ?>
              <br>
              <!-- service subtitle & information modal button (the sub repeater )-->
                <span><?php the_sub_field('service_subtitle'); ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal2">i</button></span>
            </li>
            <!-- service price mani box -->
            <li class="list-inline-item pricebox" >
                £<?php the_sub_field('service_price_mani'); ?>
            </li>
            <!-- service price pedi box -->
            <li class="list-inline-item pricebox" >
                £<?php the_sub_field('service_price_pedi'); ?>
            </li> 
                <?php if( have_rows('modal_repeater')):  
                
                    while ( have_rows('modal_repeater')) : the_row(); 

                    ?>
                    <!-- attached sub row modal info box -->
                              <div class="modal" id="myModal2">    
                                  <div class="modal-dialog cutom-modal-dialog">
                                      <div class="custom-modal">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                          <h2><?php the_sub_field('modal_header'); ?></h2>
                                          <button type="button" class="close" data-dismiss="modal">×</button>
                                      </div>
                                  
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                          <p><?php the_sub_field('modal_body'); ?></p><br>
                                          <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php the_sub_field('service_time_hrs'); ?>:Hr - <?php the_sub_field('service_time_mins'); ?> Mins</span>
                                      </div>
                                  
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                          <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                          <script>new timelyButton("twelvethegreen", {"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_custom-1.png"});</script>
                                          </form>
                                      </div>
                                  
                                      </div>
                                  </div>
                    <?php endwhile;?>
                              </div>
                              </ul>
                    <?php endif; ?>
                    <?php
                    endwhile;
                    endif; ?>
      
</div>

<script>
    // hides empty price fields 
    $( ".list-inline-item.pricebox:contains(' £0 ')" ).html("-");
</script>

<?php get_footer(); ?>

