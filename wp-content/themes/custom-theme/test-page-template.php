<?php
/*  Template Name: Test services template */
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

   <script>
    // hides empty price fields 
    $( ".list-inline-item.pricebox:contains(' £0 ')" ).html("-");
</script>

<?php get_footer(); ?>

