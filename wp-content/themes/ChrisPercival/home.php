<?php
/*
Home page
*/
?>
<?php get_header(); ?>
<!-- This is the template for the main blog post page - home.php -->
<div class="main-blog main clearfix">
	<section class="first clearfix">
		
		<div>
			<h1><?php echo wp_title(''); ?></h1>
		</div>
		<div class="blog-page-right">
			<?php
			$paged = ( get_query_var('paged')) ? get_query_var('paged') : 1;
			$query_args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'paged' => $paged
			);
			?>
			<?php $the_query = new WP_Query( $query_args ); ?>
			<?php if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
			<div class="blog-post blog-border-no-sides clearfix">
				
				<div class="blog-left blog-post-section">
					<div class="blog-img-wrapper clearfix">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<?php the_post_thumbnail(array(150,150)); ?>
						</a>
					</div>
				</div>
				<div class="blog-right blog-post-section">
					<h2 class="h2-blog"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
					<hr>
					<p><?php the_time('F j, Y'); ?></p>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" ><button class="button-blog">Read More<img src="http://dev.ejigsaw.co.uk/chrispercival/wp-content/uploads/2017/05/arrow-right-white.png"></button></a>
					
				</div>
			</div>
			<?php endwhile; ?>
			<!--           If max number pages > 1, show pagination                      -->
			<?php if ($the_query->max_num_pages > 1) { ?>
			<nav class="pagination">
				
				<?php
						$pag_args =	array(
							'base'               => '%_%',
							'format'             => '?paged=%#%',
							'total'              => $wp_query->max_num_pages,
							'current'            => 0,
							'show_all'           => false,
							'end_size'           => 2,
							'mid_size'           => 5,
							'prev_next'          => true,
							'prev_text'          => '<span>Any text Previous</span>',
							'next_text'          => '<span>Any text Previous</span>',
							'type'               => 'plain',
							'add_args'           => false,
							'add_fragment'       => '',
							'before_page_number' => '',
							'after_page_number'  => ''
					);
				?>
				
				
				<br />
				<p ><?php echo paginate_links( array(
						'prev_text' => '<img src="http://dev.ejigsaw.co.uk/chrispercival/wp-content/uploads/2017/05/charity-arrow-left.png" alt="previous" />',
						'next_text' => '<img src="http://dev.ejigsaw.co.uk/chrispercival/wp-content/uploads/2017/05/charity-arrow-right.png" alt="next" />',
						'before_page_number' => '',
								'after_page_number'  => ''
				) ); ?></p>
				<br />
			</nav>
			<?php } ?>
			<?php
			// clean up after our query
			wp_reset_postdata();
			?>
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div> <!-- end of blog page right section -->
			<div class="blog-page-sidebar">
				<div class="blog-recent-posts blog-border-box">
					<h2>RECENT POSTS</h2>
					<!-- template part for recent posts listing -->
					<?php get_template_part('template-parts/recent', 'posts') ?>
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