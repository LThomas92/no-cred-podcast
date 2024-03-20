<?php get_header(); ?>

<div class="c-episodes">
    <div class="content">


<?php $featured_episodes = get_field('featured_episodes');
if( $featured_episodes ): ?>
    <ul class="c-episodes__featured-episodes">
    <?php foreach( $featured_episodes as $featured_episode ): 
        $cta = get_permalink( $featured_episode->ID );
        $title = get_the_title( $featured_episode->ID );
        $desc = get_the_excerpt( $featured_episode->ID);
        $custom_field = get_field( 'field_name', $featured_episode->ID );
        ?>
        <li class="c-episodes__featured-episode">
          <figure class="c-episodes__featured-episode-thumbnail">
            <img src="<?php echo get_the_post_thumbnail_url($featured_episode->ID); ?>" alt="">
          </figure>
            <div class="c-episodes__featured-episode-content">
                <h1 class="c-episodes__featured-episode-title"><?php echo $title; ?></h1>
                <p class="c-episodes__featured-episode-desc"><?php echo $desc; ?></p>
                <a href="<?php echo $cta; ?>" class="c-episodes__featured-episode-cta">Watch here</a>
            </div>

        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>


<section class="c-episodes__list-section">
    <?php 
        $episodesTitle = get_field('episodes_title');
        $episodesDesc = get_field('episodes_description');
    ?>

<div class="c-episodes__title-content">
    <div class="c-episodes__title"><?php echo $episodesTitle; ?></div>
    <p class="c-episodes__desc"><?php echo $episodesDesc; ?></p>
</div>

    
<?php $args = array(
    'post_type' => 'episodes', 
    'posts_per_page' => -1, 
    'orderby' => 'date',   
    'order' => 'ASC'
);

$episodesQuery = new WP_Query($args);

if ($episodesQuery->have_posts()) { ?>
    <ul class="c-episodes__list">
    <?php while ($episodesQuery->have_posts()) {
        $episodesQuery->the_post();
        ?>
        <li class="c-episodes__episode">
            <a href="<?php the_permalink(); ?>">
            <figure class="c-episodes__episode-thumb">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </figure>
            <h3 class="c-episodes__episode-title"><?php the_title(); ?></h3>
            <p class="c-episodes__episode-desc"><?php echo get_the_excerpt(); ?></p>
            <p class="c-episodes__episode-air-date"><span>Air Date:</span><?php echo esc_html(get_field('air_date')); ?></p>

            <a href="<?php echo get_the_permalink(); ?>" class="c-episodes__episode-cta">Watch here</a>
            </a>
        </li>
        <?php
    }
    wp_reset_postdata(); // Reset post data to restore global post data ?>
    </ul>
<?php } else {
    echo 'No episodes found.';
} ?>



</section>



</div>
</div>
<?php get_footer(); ?>