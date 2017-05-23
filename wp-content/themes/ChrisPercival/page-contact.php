<?php 

/*

Template Name: Contacts Page

*/

?>

<?php get_header(); ?>


<div class="main-contact">
	<div id="info">
	</div>
	
	<section class="first contact-first contact-form">
		<h1><?php the_title() ?></h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</section>

	<section>
	

	</section>


</div>


<?php get_footer(); ?>