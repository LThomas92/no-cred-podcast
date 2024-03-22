<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Cred_Podcast
 */

?>

	<footer id="colophon" class="site-footer">
		<?php 
			$footerDesc = get_field('footer_description', 'option');
		?>
		<div class="site-info">
			<div class="site-footer__logo-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="No Credientials Logo" alt="No Cred Logo">
				<p class="site-footer__description"><?php echo $footerDesc; ?></p>

				<?php if( have_rows('social_media_icons', 'option') ): ?>

    <ul class="site-footer__social-icons">
    <?php while( have_rows('social_media_icons', 'option') ) : the_row(); 

        $socialIcon = get_sub_field('social_media_icon', 'option'); 
		$socialIconCTA = get_sub_field('social_media_cta', 'option');
		?>

		<li class="site-footer__social-icon">
			<a target="_blank" href="<?php echo $socialIconCTA['url']; ?>">
				<img src="<?php echo $socialIcon['url']; ?>" alt="<?php echo $socialIcon['alt']; ?>">
			</a>
		</li>
   

	<?php 
    endwhile; ?>
	</ul>

<?php 
else :
endif;
?>
			</div>



		<nav id="footer-navigation" class="footer-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-footer__podcast-info">
			<h5 class="site-footer__podcast-info-title">Also find us on:</h5>
			<?php if( have_rows('podcast_icons', 'option') ): ?>

    <ul class="site-footer__podcasts-icons">
    <?php while( have_rows('podcast_icons', 'option') ) : the_row(); ?>

		<?php $podcastIcon = get_sub_field('podcast_icon'); 
			  $podcastLink = get_sub_field('podcast_link');
		?>
        <li class="site-footer__podcasts-icon">
			<a target="_blank" href="<?php echo $podcastLink; ?>">
				<img src="<?php echo $podcastIcon['url']; ?>" alt="<?php echo $podcastIcon['alt']; ?>">
			</a>
		</li>

    <?php 
    endwhile; ?>
	</ul>

<?php 
else :
    // Do something...
endif; ?>
		</div>



		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js" integrity="sha512-g0etrk7svX8WYBp+ZDIqeenmkxQSXjRDTr08ie37rVFc99iXFGxmD0/SCt3kZ6sDNmr8sR0ISHkSAc/M8rQBqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
