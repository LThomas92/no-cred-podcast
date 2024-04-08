<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package No_Cred_Podcast
 */

get_header();
?>
	<div class="c-page-search-results">
	<div class="content">


	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

	<?php function custom_search_results_count() {
    global $wp_query;
    
    $total_results = $wp_query->found_posts;

    if ($total_results > 1) {
        echo $total_results . ' results';
    } elseif ($total_results == 1) {
        echo $total_results . ' result';
    } else {
        echo '<p>No results found</p>';
    }
} ?>

			<header class="c-page-search-results__header">
				<h1 class="c-page-search-results__page-title">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'no-cred-podcast' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				<p class="c-page-search-results__number"><?php custom_search_results_count(); ?></p>
			</header><!-- .page-header -->


	
			<ul class="c-page-search-results__list">
			<?php while ( have_posts() ) : the_post(); ?>
			<a class="c-page-search-results__list-item-cta" href="<?php echo the_permalink(); ?>">
			<li class="c-page-search-results__list-item">
				<figure>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</figure>
				<div class="c-page-search-results__list-item-content">
					<h2 class="c-page-search-results__list-item-title"><?php the_title(); ?></h2>
					<p class="c-page-search-results__list-item-desc"><?php echo get_the_excerpt(); ?></p>

					<p class="c-page-search-results__list-item-air-date"><span>Air Date:</span><?php echo get_field('air_date', $post->ID); ?></p>
				</div>
			</li>
			</a>


			<?php endwhile; ?>
			</ul>
		<?php endif; ?>

	</main><!-- #main -->
	</div> <!-- content -->
	</div> <!-- Search Results -->

	</div>

<?php get_footer(); ?>
