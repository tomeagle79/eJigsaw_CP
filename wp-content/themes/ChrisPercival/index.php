<?php get_header(); ?>


<div class="">

	<!-- <section id="slider-container" class="clearfix" style=""> -->
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>


	<!-- </section> -->

<!--
	<section id="social">
		<ul id="social-cards">
			<li class="social">
				<img src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/speech_icon.png" alt="Quotes">
				<h3>LATEST BLOG</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/ellipse.png">
			</li>
			<li class="social">
				<img src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/twitter_blue-icon.png" alt="Twitter icon">
				<h3>TWITTER FEED</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/ellipse.png">
			</li>
			<li class="social">
				<img src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/graph_icon.png" alt="Arrow logo">
				<h3>TOP 100</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="http://localhost/ChrisPercival/wp-content/uploads/2017/05/ellipse.png">
			</li>

		</ul>

	</section>
<section id="bottom-slider-container">
	
	</section>
-->

	

</div>


<?php get_footer(); ?>