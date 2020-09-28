<?php
 /* Template Name: Gallery Template */
 get_header();
?>

<div class="sub-page-bg-right">

<div class="one column">
    <div class="text-center m-5">
        <h3>Gallery</h3>
    </div>
</div>

<div class="ui sixteen column centered grid">
        <div class="ui fourteen wide column">
            <div class="m-5">
            <img class="ui fluid image" src=<?php the_field('gallery_header'); ?>>
        </div>
    </div>
</div>

<div class="ui sixteen centered column grid">
    <div class="column">
        <?php echo do_shortcode('[foogallery id="2246"]'); ?>
    </div> 
</div>


<?php get_footer(); ?>
