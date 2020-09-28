<?php
/*  contact template */
    get_header();
?>

    <h2>Opening Hours</h2>
    <ul>
        <li>Monday - <?php the_field('opening_times_monday'); ?> am - <?php the_field('closing_times_monday'); ?>pm</li>
        <li>Tuesday - <?php the_field('opening_times_tuesday'); ?>am - <?php the_field('closing_times_tuesday'); ?>pm</li>
        <li>Wednesday - <?php the_field('opening_times_wednesday'); ?>am - <?php the_field('closing_times_wednesday'); ?>pm</li>
        <li>Thursday - <?php the_field('opening_times_thursday'); ?>am - <?php the_field('closing_times_thursday'); ?>pm</li>
        <li>Friday - <?php the_field('opening_times_friday'); ?>am - <?php the_field('closing_times_friday'); ?>pm</li>
        <li>Saturday - <?php the_field('opening_times_saturday'); ?>am - <?php the_field('closing_times_saturday'); ?>pm</li>
        <li>Sunday - <?php the_field('opening_times_sunday'); ?>am - <?php the_field('closing_times_sunday'); ?>pm</li>
    </ul>


<?php get_footer(); ?>
