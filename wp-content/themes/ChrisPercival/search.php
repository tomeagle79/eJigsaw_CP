<?php get_header(); ?>

<!-- This is the template for a single blog post -->

<div class="main-blog main clearfix">

	<section class="first clearfix">
		
		<h1><?php echo wp_title(''); ?></h1>

		<div class="blog-page-right" ?>
						
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="blog-border-box blog-post">
				<h2 class="h2-blog"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
				<p><a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(''); ?></a></p>
				<p><?php the_excerpt(); ?></p>
			</div>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no results matched your criteria.' ); ?></p>
		<?php endif; ?>

			

		</div> <!-- end of blog page right section -->

		<div class="blog-page-sidebar">
			<div class="blog-recent-posts blog-border-box">
				<h2>RECENT POSTS</h2>
				<?php get_template_part('template-parts/recent', 'posts'); ?>

			</div>

			<div class="blog-categories blog-border-box clearfix">
				<h2>CATEGORIES</h2>
				<ul class="double"><?php wp_list_categories('title_li='); ?></ul>
			</div>

			<div class="blog-search blog-border-box clearfix">
				<?php get_search_form(); ?>
			</div>

		</div>
		
	</section>

</div>


<?php get_footer(); ?>