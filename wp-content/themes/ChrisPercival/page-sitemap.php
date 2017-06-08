<?php 

/*

Template Name: Sitemap Page

*/

?>

<?php get_header(); ?>


<div class="main clearfix">
	
	<section class="first">
		<h1><?php the_title() ?></h1>
		<?php echo do_shortcode('[wp_sitemap_page]'); ?>
				
	</section>
</div>



<?php get_footer(); ?>