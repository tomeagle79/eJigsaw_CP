<?php 

/*

Template Name: Charity Page

*/

?>

<?php get_header(); ?>


<div class="main-charity clearfix">
	<div id="info">
	</div>
	
	<section class="first">
		<h1><?php the_title() ?></h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</section>
</div>


<?php get_footer(); ?>