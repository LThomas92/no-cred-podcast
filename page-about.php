<?php get_header(); ?>

<div class="c-page-about">
    <div class="content">

    <div class="c-page-about__header">
        <?php 
            $title = get_field('title');
            $desc = get_field('description');
        ?>
        <img src="<?php echo $title['url']; ?>" class="c-page-about__title"/>
        <p class="c-page-about__desc"><?php echo $desc; ?></p>
    </div>

    <?php if( have_rows('about_items') ): ?>

    <ul class="c-page-about__list-items">
    <?php while( have_rows('about_items') ) : the_row();

        $aboutImage = get_sub_field('about_image');
        $aboutName = get_sub_field('about_name');
        $aboutDesc = get_sub_field('about_description');
        ?>
        
        <li class="c-page-about__list-item <?php echo $aboutName; ?>">
            <figure>
                <img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">
            </figure>
            <div class="c-page-about__list-item-content">
                <h2 class="c-page-about__list-item-title"><?php echo $aboutName; ?></h2>
                <div class="c-page-about__list-item-description"><?php echo $aboutDesc; ?></div>

                <p class="c-page-about__list-item-social-title">Find us on:</p>
                
                <?php if( have_rows('about_social_icons') ): ?>

    <ul class="c-page-about__list-item-socials">
    <?php while( have_rows('about_social_icons') ) : the_row();

        // Load sub field value.
        $socialIcon = get_sub_field('about_social_icon'); 
        $socialCTA = get_sub_field('about_social_cta');
        ?>
        <li class="c-page-about__list-item-social">
            <a target="_blank" href="<?php echo $socialCTA; ?>">
            <img src="<?php echo $socialIcon['url']; ?>" alt="<?php echo $socialIcon['alt']; ?>">
            </a>
        </li>

<?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif;
?>
            </div>
        </li>

 <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>






    </div>
</div>



<?php get_footer(); ?>