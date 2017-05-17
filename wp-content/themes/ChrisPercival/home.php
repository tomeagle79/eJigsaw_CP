<?php get_header(); ?>

<!-- This is the template for the main blog post page - home.php -->

<div class="main-blog main clearfix">

	

	<section class="first clearfix">
		
		<div>
			<h1><?php echo wp_title(''); ?></h1>
		</div>

		<div class="blog-page-right" ?>
						
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div class="blog-post blog-border-no-sides clearfix">
					
					<div class="blog-left blog-post-section">
						<div class="blog-img-wrapper">
							<a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a>
						</div>	
					</div>

					<div class="blog-right blog-post-section">
						<h2 class="h2-blog"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
						<hr>
						<p>DATE <?php the_time('Y'); ?></p>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" ><button class="button-blog">Read More<img src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/arrow-right-white.png"></button></a>
						
					</div>
				</div>

			<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="blog-page-sidebar">
			<div class="blog-recent-posts blog-border-box">
				<h2>RECENT POSTS</h2>

			</div>

			<div class="blog-categories blog-border-box">
				<h2>CATEGORIES</h2>
				<ul><?php wp_list_categories(); ?></ul>
			</div>

			<div class="blog-search blog-border-box">

			</div>

		</div>



		
	</section>

	


</div>


<?php get_footer(); ?>