<?php get_header(); ?>

<div class="c-single-episode">
    <?php $date = get_field('air_date'); 
          $audioFile = get_field('audio_file');
          $videoFile = get_field('video_file');
    ?>




    <div class="content">

        <section class="c-single-episode__header">
            <p class="c-single-episode__date"><?php echo $date; ?></p>
            <h1 class="c-single-episode__title"><?php the_title(); ?></h1>
            <p class="c-single-episode__desc"><?php echo get_the_excerpt(); ?></p>
        </section>

                    <video id="video" controls preload="metadata" playsinline data-poster="<?php echo get_the_post_thumbnail_url(); ?>">
                        <source src="<?php echo $videoFile['url']; ?>" type="video/mp4"/>
                    </video>



        <section class="c-single-episode__content">
 
            <h2 class="c-single-episode__description-title">Episode Description</h2>
            <div class="c-single-episode__description">
                <?php echo get_the_content(); ?>
            </div>

        <div class="c-single-episode__share-icons-container">

        <h5 class="c-single-episode__share-icons-title">Share this:</h5>

        <ul class="c-single-episode__share-icons">
            <li class="c-single-episode__share-icon">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-icon.svg" alt="Facebook Icon">
                </a>
            </li>
            <li class="c-single-episode__share-icon">
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/x-icon.svg" alt="X Icon">
                </a>
            </li>
            <li class="c-single-episode__share-icon">
            <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>&description=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pinterest-icon.svg" alt="Pinrerest Icon">
                </a>
            </li>
        </ul>

        </div>

        <div class="c-single-episode__audio-player-container">
          <h4 class="c-single-episode__audio-title">Listen to the audio here:</h4>
          <audio id="audio" crossorigin playsinline controls>
          <source src="<?php echo $audioFile['url']; ?>" type="audio/mp3" />
          </audio>
          <h4 class="c-single-episode__audio-player-title"><?php echo get_the_title(); ?></h4>
          <h5 class="c-single-episode__podcast-services-title">Also find this podcast here:</h6>
         
          <?php if( have_rows('podcast_services') ): ?>

    <ul class="c-single-episode__podcast-services">
    <?php while( have_rows('podcast_services') ) : the_row();

        $podcastService = get_sub_field('podcast_service'); 
        $podcastLink = get_sub_field('podcast_link');
        ?>
       <li class="c-single-episode__podcast-service">
         <a target="_blank" href="<?php echo $podcastLink['url']; ?>">
          <img src="<?php echo $podcastService['url']; ?>" alt="<?php echo $podcastService['alt']; ?>">
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
        
        
        </section>
    </div>
</div>

<?php get_footer(); ?>