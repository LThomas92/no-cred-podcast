<?php get_header(); ?>

<div class="c-page-login">
    <div class="content">
        <div class="c-page-login__main-section">
            <div class="c-page-login__login-section">
              <?php echo do_shortcode('[pmpro_login]'); ?>
            </div>
            <figure class="c-page-login__image">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </figure>
        </div>
    </div>
</div>

<?php get_footer(); ?>