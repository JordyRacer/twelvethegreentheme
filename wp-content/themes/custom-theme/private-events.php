<?php
/*  Template Name: private events template */
    get_header();
?>


  <div class="sub-page-bg-right">
    <div class="text-center">
        <h3>Private Events</h3>
        <ul class="list-inline top-list">
            <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/services">Services&nbsp;&nbsp;&nbsp;&nbsp;</a>|</li>
            <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/gift-cards">Gift Cards &nbsp;</a>|</li>
            <li class="list-inline-item active"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/private-events">Private Events </a></li>
        </ul>
    </div>

         <div class="ui sixteen column centered grid">
            <div class="ui fourteen wide column">
                <div class="m-5">
                    <img class="ui fluid image" src=<?php the_field('private_events_image'); ?>>
                </div>
            </div>
        </div>

        <div class="gift-card-bg __cream-gb">
            <div class="ui stackable two column grid">

                <div class="ui column">  
                    <div class="m-3">
                    <img class="img-border" src="<?php echo home_url(); ?>/wp-content/uploads/2020/08/party-time.jpg" alt="">
                    </div>  
                </div> 

                <div class="ui column">
                    <div class="sub-page-bg-right">
                        <h5>BOOK a </br>
                        Private <br>
                        Event for a<br>
                        Special 
                        <br>Occasion
                        </h5>
                        <h4>#Treateveryone</h4>
                        <a href="http://twelvethegreen.gettimely.com/#contact"><button class="btn-enquire-now"></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui fourteen wide column stackable centered grid">
            <div class="ui eleven wide column private-party-drop mt-3 mb-5">
            <p><?php the_field('custom_text'); ?></p>
                <p>E-mail us to arrange an event today</p>
                <br>
                <a href="mailto:hello@twelvethegreen.co.uk"><i class="fa fa-envelope" aria-hidden="true"></i> hello@twelvethegreen.co.uk</a>                    
                    
            </div>
        </div>

<?php get_footer(); ?>