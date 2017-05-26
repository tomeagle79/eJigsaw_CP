
<?php get_header(); ?>


<div class="">

	<!-- <section id="slider-container" class="clearfix" style=""> -->
		
		<?php echo do_shortcode('[gallery slick_active="true" link="none" size="full" sl_dots="true" sl_accessibility="false" sl_arrows="false" ids="49,58,59"]');
		?>

			<section id="social">
				<ul id="social-cards">
				 	<li class="social">
				 		<img src="<?php bloginfo( 'template_url'); ?>/img/speech_icon.png" alt="Quotes" />
						<h3>LATEST BLOG</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/>
					</li>
				 	<li class="social">
				 		<img src="<?php bloginfo( 'template_url'); ?>/img/twitter_blue-icon.png" alt="Twitter icon" />
						<h3>TWITTER FEED</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/></li>
				 	<li class="social">
				 		<img src="<?php bloginfo( 'template_url'); ?>/img/graph_icon.png" alt="Arrow logo" />
						<h3>TOP 100</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/>
					</li>
				</ul>
			</section>

			<div id="slider-jigsaw"><?php echo do_shortcode('[gallery slick_active="true" link="none" size="full" ids="71,70,69"]')?></div>

	<!-- </section> -->

<!--
	<section id="social">
		<ul id="social-cards">
			<li class="social">
				<img src="<?php bloginfo( 'template_url'); ?>/img/speech_icon.png" alt="Quotes">
				<h3>LATEST BLOG</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png">
			</li>
			<li class="social">
				<img src="http://dev.ejigsaw.co.uk/ChrisPercival/wp-content/uploads/2017/05/twitter_blue-icon.png" alt="Twitter icon">
				<h3>TWITTER FEED</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png">
			</li>
			<li class="social">
				<img src="<?php bloginfo( 'template_url'); ?>/img/graph_icon.png" alt="Arrow logo">
				<h3>TOP 100</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png">
			</li>

		</ul>

	</section>
<section id="bottom-slider-container">
	
	</section>
-->

	

</div>


<?php get_footer(); ?>