<?php
/*  Template Name: gift card template */
    get_header();
?>


<div class="sub-page-bg-right"">
    <div class="text-center">
        <h3>Gift Cards</h3>
        <ul class="list-inline top-list">
        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/services">Services&nbsp;&nbsp;&nbsp;&nbsp;</a>|</li>
            <li class="list-inline-item active"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/gift-cards">Gift Cards &nbsp;</a>|</li>
            <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/splazap-wordpress/private-events">Private Events </a></li>
        </ul>
    </div>

    <div class="ui sixteen column centered grid">
        <div class="ui fourteen wide column">
            <div class="m-5">
                <img class="ui fluid image" src=<?php the_field('private_events_image'); ?>>
            </div>
        </div>
    </div>
            
    <div class="gift-card-bg">
        <div class="ui stackable two column grid ">
                <div class="ui column">
                    <div class="m-3">
                        <img class="img-border" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/08/giftt-card.jpg" alt="">      
                    </div>
                </div>
                <div class="ui column">
                <div class="sub-page-bg-right">
                    <h5>BUY a </br>
                        Giftcard </br>
                        for someone </br>
                        special
                    </h5>
                    <h4>#Treatsomeone</h4>
                        <div class="btn-size">
                        <form action="<?php echo get_site_url(); ?>/before-you-book/" method="get">
                        <script>new timelyButton("twelvethegreen", {"isPurchaseButton":true,"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_buy_now.png"});</script>
                        </script>  
                        </div>    
                    </div>
                </div>
        </div>
    </div>

    <div class="ui sixteen column centered grid">
        <div class="ui eleven wide column mt-3 mb-5">
            <p><?php the_field('custom_text'); ?></p>
                <h2>From £15</h2>

                <h4>PLEASE NOTE:</h4>
                <p>*Please ensure you fill out the to & from boxes when ordering
                <br>*All vouchers are valid for upto a year from the date of purchase</p>
                <br>
            <div class="btn-size">
                <script>new timelyButton("twelvethegreen", {"isPurchaseButton":true,"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_buy_now.png"});</script>  
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>