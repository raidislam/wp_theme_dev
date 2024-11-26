<?php get_header(); ?>
<!-- Header End Here -->

<!-- Banner Start Here -->
<div class="banner owl-carousel">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner" />
</div>
<!-- Banner End Here -->

<!-- Services Start Here -->
<?php get_template_part('template-parts/content', 'services'); ?>
<!-- Services End Here -->
<!-- Blog Start Here -->
<div class="blogs">
    <div class="blog-left">
        <h4>latest blog</h4>
        <?php get_template_part('template-parts/content', 'blogs'); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<!-- Blog End Here -->
<?php get_footer(); ?>