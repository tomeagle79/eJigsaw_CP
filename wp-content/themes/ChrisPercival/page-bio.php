<?php 

/*

Template Name: Bio Page

*/

?>

<?php get_header(); ?>


<div class="main clearfix">
	<div id="info">
	</div>
	
	<!-- <section class="first">
		<h1><?php the_title() ?></h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</section> -->

	<section class="first">
		<h1><?php the_title() ?></h1>
				
	</section>
</div>
<div class="bio-timeline">
	<a href="<?php echo bloginfo( 'template_url' ); ?>/img/chris-timeline.pdf"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/chris-timeline.png" alt="Chris timeline" /></a>
</div>


<?php get_footer(); ?>