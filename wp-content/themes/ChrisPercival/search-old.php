<?php 

// This is the template to display search results
get_header(); 

?>

<div class="main-blog main clearfix">
		
	<section class="first">

		<h1><?php echo wp_title(''); ?></h1>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="blog-border-box">
				<h2 class="h2-blog"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
				<p><a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(''); ?></a></p>
				<p><?php the_excerpt(); ?></p>
			</div>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no results matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</section>

</div>


<?php get_footer(); ?>