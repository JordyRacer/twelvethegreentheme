<?php
/*  Template Name: before you book */
    get_header();
?>

<?php
    $groupid = get_query_var('group');
?>

<div class="one column sub-page-bg">
    
   <div class="text-center">
    <h3>Before you Book</h3>
    </div>


    <div class="ui one column grid">
        <div class="before-you-book">
        
        <!-- adds variable from services page GET to timely "category" to send cutomers to the relevant booking group -->
        <div class="text-center">
        <script>new timelyButton("twelvethegreen", {"imgSrc":"https://www.twelvethegreen.co.uk/wp-content/uploads/2020/09/button_pink_custom-1.png"});</script>
        </div>
            <h2>CHANGES TO YOUR BOOKING</h2>
            <p>When booking you have an option to book a staff member. Occasionally this will change,  If you would like to request a specific member of our team or make any changes to the appointment you have online, please email bookings@twelvethegreen.co.uk and we’ll see what we can do!</p>
            <h2>DEPOSITS</h2>
            <p>All online bookings require a small deposit. This will be deducted from your appointment cost by an external company. We do not have access to your card details. </p>
            <h2>VOUCHERS</h2>
            <p>You can purchase vouchers here on our website.</p>
            <h2>REMOVALS</h2>
            <p> Please book a removal as well as your treatment if you already have existing product on your nail. Turning up with nail polish on is fine, but anything different will take time away from your appointment so we won’t have time to do your whole treatment. We don’t remove Acrylic or Hard Gel applied by other studios.</p>
            <h2>NO SHOWS & CANCELLATIONS</h2>
            <p>If you don’t turn up to your booked appointment or cancel within 5 hours, we will take your initial deposit. Please make sure you contact us if you can no longer attend. </p>
            <h2>PATCH TESTS</h2>
            <p>LVL lash treatment and tinting requires a patch test to be taken 24-hours prior to your appointment if you have never had it done at Twelve The Green before. We cannot perform LVL or tinting if you are pregnant. </p>
           
            <a href="<?php echo get_site_url(); ?>/services"><h3>Reuturn to services</h3></a>

        </div>
    </div>

