<?php
/**
/**
 * Template Name: Frontpage template
 *
 * @package activello
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main <?php echo "page-".$paged;?>" role="main">

		<?php 
		// the query
			$args = array(
			'post_type' => 'post',
			'posts_per_page' => 4);
			$the_query = new WP_Query($args);

		 ?>
		<?php if ( $the_query->have_posts() ) : ?>

			<div class="article-container">
			
			<?php /* Start the Loop */ ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>

				<?php get_template_part( 'content', '' ); ?>

			<?php endwhile; ?>
			
			</div>
			
			<?php activello_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

