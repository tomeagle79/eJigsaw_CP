<?php get_header(); ?>

<!-- This is the template for a single blog post -->

<div class="main-blog main clearfix">

	<section class="first clearfix">
		
		<div>
			<h1><?php echo wp_title(''); ?></h1>
		</div>

		<div class="blog-page-right" ?>
						
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div class="blog-post blog-border-box clearfix">
					
					<div class="blog-post-section">
						<h2 class="h2-blog"><?php the_title(); ?></h2>
						<div class="blog-img-wrapper">
							<?php the_post_thumbnail('full'); ?>
						</div>	
						<p>DATE <?php the_time('Y'); ?></p>
						<button>SHARE</button>
						<p><?php the_content(); ?></p>
											
					</div>
					
				</div>

				<!--        Custom post-navigation                -->
			<?php get_template_part('template-parts/navigation','') ?>
			
			<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			

		</div> <!-- end of blog page right section -->

		<div class="blog-page-sidebar">
			<div class="blog-recent-posts blog-border-box">
				<h2>RECENT POSTS</h2>
				<?php get_template_part('template-parts/recent', 'posts'); ?>

			</div>

			<div class="blog-categories blog-border-box">
				<h2>CATEGORIES</h2>
				<ul><?php wp_list_categories('title_li='); ?></ul>
			</div>

			<div class="blog-search blog-border-box clearfix">
				<?php get_search_form(); ?>
			</div>

		</div>
		
	</section>

</div>


<?php get_footer(); ?>