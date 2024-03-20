<?php get_header(); ?>

<div class="c-single-episode">
    <div class="content">

    <section class="c-single-episode__header">
        <?php 
            $audioFile = get_field('audio_file');
        ?>
        <div class="c-single-episode__audio-player">
        <audio controls>
        <source src="<?php echo $audioFile['url']; ?>" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
        </div>
    </section>












    </div>
</div>

<?php get_footer(); ?>