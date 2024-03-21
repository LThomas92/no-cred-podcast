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

        <div class="c-single-episode__video-container">
                    <video controls>
                        <source src="<?php echo $videoFile['url']; ?>"></source>
                    </video>
            </div>


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
            
        </section>

        <div class="c-single-episode__audio-player">
        <audio controls>
        <source src="<?php echo $audioFile['url']; ?>" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
        </div>









    </div>
</div>

<?php get_footer(); ?>