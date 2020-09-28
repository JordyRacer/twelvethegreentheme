<?php
/*  Template Name: services template */
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

    <?php if( have_rows('polish') ):
              $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('polish') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal1-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 
                    
            <div class="modal" id="myModal1-<?php echo $i;?>">    
                        <div class="modal-dialog custom-modal-dialog">
                                <div class="custom-modal">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2><?php echo $modal_header;?></h2>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                            
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><?php echo $modal_body; ?></p><br>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                                </div>
                            
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                    <button class="btn" name="group" type="submit" value="196256"></button> 
                                    </form>
                                </div>
                            
                                </div>
                            </div>
                        </div>
                    </ul>

                    <?php   $i++; // Increment the increment variable
                    endwhile; //End the loop 
                    else:
                    endif?>

            </div>
            
            <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Nails..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <!-- <script>new timelyButton("twelvethegreen", {"category":"196256","style":"light"});</script> -->
        <button class="btn" name="group" type="submit" value="196256"></button> 
        </form>

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

<?php if( have_rows('gel') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('gel') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                    <?php echo $name; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal2-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal2-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                               <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                 <button class="btn" name="group" type="submit" value="196256"></button> 
                               </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>
                    </ul>
                <?php   $i++; // Increment the increment variable
                endwhile; //End the loop 
                else:
                endif?>
</div>


    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Nails..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <button class="btn" name="group" type="submit" value="196257"></button> 
        </form>
    </div>

    <div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Manis & Pedis</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Mani</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Pedi</h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>

    <?php if( have_rows('mani_and_pedis') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('mani_and_pedis') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal3-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
               £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
               £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal3-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                               <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                <button class="btn" name="group" type="submit" value="196256"></button> 
                               </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>

                    </ul>
                    <?php   $i++; // Increment the increment variable
                
                     endwhile; //End the loop 
                
                    else:

                endif?>
    </div>

    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Hands..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <button class="btn" name="group" type="submit" value="196258"></button>
        </form>
    </div>

    <div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Gelbottle Removal</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Mani</h2></li>
            <li class="list-inline-item services-headers text-center"><h2>Pedi</h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>

    <?php if( have_rows('gelbottle_removals') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('gelbottle_removals') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal4-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal4-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                 <button class="btn" name="group" type="submit" value="196256"></button> 
                                </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>

                    </ul>
                    <?php   $i++; // Increment the increment variable
                
                     endwhile; //End the loop 
                
                    else:

                endif?>
    </div>


    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Brows..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
         <button class="btn" name="group" type="submit" value="196258"></button>
        </form>
    </div>

    <div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Brows</h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>

    <?php if( have_rows('brows') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('brows') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal6-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal6-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                   <button class="btn" name="group" type="submit" value="196256"></button> 
                                </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>

                    </ul>
                    <?php   $i++; // Increment the increment variable
                
                     endwhile; //End the loop 
                
                    else:

                endif?>
    </div>


    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Lashes..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <button class="btn" name="group" type="submit" value="196259"></button> 
        </form>
    </div>

    <div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Lashes</h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>

    <?php if( have_rows('lashes') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('lashes') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal7-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal7-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                               <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                   <button class="btn" name="group" type="submit" value="196256"></button> 
                               </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>

                    </ul>
                    <?php   $i++; // Increment the increment variable
                
                     endwhile; //End the loop 
                
                    else:

                endif?>
    </div>

    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Lashes..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <button class="btn" name="group" type="submit" value="196260"></button>
        </form> 
    </div>

    <div class="service-holder">
        <ul class="list-inlne">
            <li class="list-inline-item services-headers"><h2>Face</h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item services-headers text-center"><h2></h2></li>
            <li class="list-inline-item"><hr></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
       </ul>

    <?php if( have_rows('face') ):
        $i = 1; // Set the increment variable
             	// loop through the rows of data
              while( have_rows('face') ): the_row();
                // vars 
                $name = get_sub_field('service_name');
                $subtitle = get_sub_field('service_subtitle');
                $mani = get_sub_field('service_price_mani');
                $pedi = get_sub_field('service_price_pedi');
                $modal_header = get_sub_field('modal_header');
                $modal_body = get_sub_field('modal_body');
                $service_time_mins = get_sub_field('service_time_mins');
                $service_time_hrs = get_sub_field('service_time_hrs');
             ?>
        <ul class="list-inlne">
            <li class="list-inline-item center">
                <?php if( $name ): ?>
                    <?php echo $name; ?>
                <?php endif; ?>
                <br>
                <span><?php echo $subtitle; ?><button type="button" class="open-information-toggle" data-toggle="modal" data-target="#myModal8-<?php echo $i;?>">i</button></span>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $mani; ?>
            </li>

            <li class="list-inline-item pricebox" >
                £<?php echo $pedi; ?>
            </li> 

                    <div class="modal" id="myModal8-<?php echo $i;?>">
                    <div class="modal-dialog cutom-modal-dialog">
                            <div class="custom-modal">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2><?php echo $modal_header;?></h2>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <p><?php echo $modal_body; ?></p><br>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Time - <?php echo $service_time_hrs; ?>:Hr - <?php echo $service_time_mins; ?> Mins</span>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                               <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                                   <button class="btn" name="group" type="submit" value="196256"></button> 
                               </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>

                    </ul>
                    <?php   $i++; // Increment the increment variable
                
                     endwhile; //End the loop 
                
                    else:

                endif?>
    </div>

    <div class="cta-box-wide">
        <h2>
        <span>Book</span> an<br>
            appointment<br>
            Treat Your Face..
        </h2>
        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
        <button class="btn" name="group" type="submit" value="196261"></button> 
        </form>
    </div>

</div>

<script>
jQuery(document).ready(function($){
  //you can now use $ as your jQuery object.    
  $( ".list-inline-item.pricebox:contains(' £0 ')" ).html("-");
});
</script>

<?php get_footer(); ?>
