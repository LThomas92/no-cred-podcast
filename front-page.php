<?php get_header(); ?>

<div class="c-home">
    <div class="content">

    <section class="c-home__header">
        <?php $headerTitle = get_field('header_title');
              $headerDesc = get_field('header_description');
              $headerCTA = get_field('header_cta');
              $headerBigImage = get_field('header_big_image');
              $headerMedImage = get_field('header_medium_image');
        ?>
        <div class="c-home__header-content-section">
        <div class="c-home__header-content">
            <div class="c-home__header-title"><?php echo $headerTitle; ?></div>
            <p class="c-home__header-desc"><?php echo $headerDesc; ?></p>
            <a class="c-home__header-cta" href="<?php echo $headerCTA['url']; ?>"><?php echo $headerCTA['title']; ?></a>
        </div>
        <div class="c-home__header-images">
            <figure class="c-home__header-big-image">
                <img src="<?php echo $headerBigImage['url']; ?>" alt="<?php echo $headerBigImage['alt']; ?>"/>
            </figure>
            <figure class="c-home__header-med-image">
                <img src="<?php echo $headerMedImage['url']; ?>" alt="<?php echo $headerMedImage['alt']; ?>">
            </figure>
        </div>
        </div>
    </section>



    <section class="c-home__about-us">
        <?php 
            $aboutUsBigImage = get_field('about_big_image');
            $aboutUsSmallImage = get_field('about_small_image');
            $aboutUsTitle = get_field('about_title');
            $aboutUsDesc = get_field('about_description');
            $aboutUsCTA = get_field('about_cta');
        ?>

        <div class="c-home__about-content-section">

            <div class="c-home__about-images">
                <figure class="c-home__about-big-image">
                    <img title="<?php echo $aboutUsBigImage['title']; ?>" src="<?php echo $aboutUsBigImage['url']; ?>" alt="<?php echo $aboutUsBigImage['alt']; ?>">
                </figure>
                <figure class="c-home__about-small-image">
                    <img title="<?php echo $aboutUsSmallImage['title']; ?>" src="<?php echo $aboutUsSmallImage['url']; ?>" alt="<?php echo $aboutUsSmallImage['alt']; ?>">
                </figure>
            </div>

            <div class="c-home__about-features-section">
                <h2 class="c-home__about-features-title"><?php echo $aboutUsTitle; ?></h2>
                <p class="c-home__about-feature-desc">
                    <?php echo $aboutUsDesc; ?>
                </p>

                <?php if( have_rows('about_features') ): ?>
            <ul class="c-home__about-features">
            <?php while( have_rows('about_features') ) : the_row();

        $aboutFeature = get_sub_field('about_feature'); ?>
                <li class="c-home__about-feature">
                    <?php echo $aboutFeature; ?>
                </li>

    <?php
    endwhile; ?>
    </ul>

<?php
else :
    // Do something...
endif; ?>

                <a class="c-home__about-feature-cta" href="<?php echo $aboutUsCTA['url']; ?>"><?php echo $aboutUsCTA['title']; ?></a>
            </div>

        </div>
    </section>

    <section class="c-home__popular-podcasts">
        <div class="c-home__popular-podcasts-section">
            <?php 
                $popularPodcastsTitle = get_field('popular_podcasts_title');
                $popularPodcastsDesc = get_field('popular_podcasts_description');
            ?>

        <div class="c-home__popular-podcasts-title"><?php echo $popularPodcastsTitle; ?></div>
        <p class="c-home__popular-podcasts-desc">
            <?php echo $popularPodcastsDesc; ?>
        </p> 

        <?php $popular_podcasts = get_field('popular_podcasts');
    if( $popular_podcasts ): ?>
    <ul class="c-home__popular-podcasts-list">
    <?php foreach( $popular_podcasts as $popular_podcast ): ?>

        <?php 
            $podcastTitle = get_the_title($popular_podcast->ID);
            $podcastDesc = get_the_excerpt($popular_podcast->ID)
        ?>

        <li class="c-home__popular-podcast-list-item">
            <figure class="c-home__popular-podcast-list-item-image">
               <img src="<?php echo get_the_post_thumbnail_url($popular_podcast->ID); ?>" alt="">
            </figure>
            <h4 class="c-home__popular-podcast-list-item-title"><?php echo $podcastTitle; ?></h4>
            <p class="c-home__popular-podcast-list-item-desc"><?php echo $podcastDesc; ?></p>
            <a class="c-home__popular-podcast-list-item-cta" href="<?php the_permalink($popular_podcast->ID); ?>">Watch here</a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>




        </div>
    </section>



    </div>
</div>

<?php get_footer(); ?>