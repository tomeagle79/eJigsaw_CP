<?php get_header(); ?>


			<div class="mySlick">
				<div class="mySlickSlide" style="background-image: url('<?php bloginfo( 'template_url'); ?>/img/slider_images/header4.jpg')">
					<!-- <img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header4.jpg" alt="slick-pic"> -->
					<h2>"business is about being <span class="different">different"</span></h2>
				</div>
				<div class="mySlickSlide" style="background-image: url('<?php bloginfo( 'template_url'); ?>/img/slider_images/header1.jpg')">
					<!-- <img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header1.jpg" alt="slick-pic"> -->
					<h2>"business is about being <span class="different">different"</span></h2>
				</div>
				<div class="mySlickSlide" style="background-image: url('<?php bloginfo( 'template_url'); ?>/img/slider_images/header2.jpg')">
					<!-- <img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header2.jpg" alt="slick-pic"> -->
					<h2>"business is about being <span class="different">different"</span></h2>
				</div>
				<div class="mySlickSlide" style="background-image: url('<?php bloginfo( 'template_url'); ?>/img/slider_images/header3.jpg')">
					<!-- <img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header3.jpg" alt="slick-pic"> -->
					<h2>"business is about being <span class="different">different"</span></h2>
				</div>
			</div>

			<section id="social">
				<ul id="social-cards">
				 	<li class="social">
				 		<div class="item">
					 		<img src="<?php bloginfo( 'template_url' ); ?>/img/speech_icon.png" alt="Quotes" />
							<h3>LATEST BLOG</h3>
							
							<?php
								$args = array( 'numberposts' => '1' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
							?>

						</div>
								<?php
									echo 	'<a href="' 
											. get_permalink($recent["ID"]) 
											. '">' 
											. '<img class="ellipse" src="' 
											. get_bloginfo( 'template_url' ) 
											. '/img/ellipse.png" alt="ellipse"/></a>';

												}
											wp_reset_query();
								?>
					</li>
				 	<li class="social">
				 		<div class="item">
					 		<img src="<?php bloginfo( 'template_url'); ?>/img/twitter_blue-icon.png" alt="Twitter icon" />
							<h3>TWITTER FEED</h3>
							<?php
								echo do_shortcode('[custom-twitter-feeds]');
							?>
						</div>
						<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/>
					</li>
				 	<li class="social">
				 		<div class="item">
					 		<img src="<?php bloginfo( 'template_url'); ?>/img/graph_icon.png" alt="Arrow logo" />
							<h3>TOP 100</h3>

							<?php
								$post_id = 5703;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo '<p><a href="' . get_permalink($post_id) . '">' . $title . '</a></p>';
								// echo $queried_post->post_content;
							?>
						</div>
						<a href="<?php the_permalink($post_id); ?>"><img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/></a>
						
					</li>
				</ul>

				<!-- <table id="social-cards">
					<tr>
					 	<td class="social">
					 		<img src="<?php bloginfo( 'template_url' ); ?>/img/speech_icon.png" alt="Quotes" />
							<h3>LATEST BLOG</h3>
							
							<?php
								$args = array( 'numberposts' => '1' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';

									echo 	'<a href="' 
											. get_permalink($recent["ID"]) 
											. '">' 
											. '<img class="ellipse" src="' 
											. get_bloginfo( 'template_url' ) 
											. '/img/ellipse.png" alt="ellipse"/></a>';

												}
											wp_reset_query();
							?>						
						</td>
					 	<td class="social">
					 		<img src="<?php bloginfo( 'template_url'); ?>/img/twitter_blue-icon.png" alt="Twitter icon" />
							<h3>TWITTER FEED</h3>


							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

							
							<img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/></td>
					 	<td class="social">
					 		<img src="<?php bloginfo( 'template_url'); ?>/img/graph_icon.png" alt="Arrow logo" />
							<h3>TOP 100</h3>

							<?php
								$post_id = 5703;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo '<p><a href="">' . $title . '</a></p>';
								// echo $queried_post->post_content;
							?>

							<a href="<?php the_permalink($post_id); ?>"><img class="ellipse" src="<?php bloginfo( 'template_url'); ?>/img/ellipse.png" alt="ellipse"/></a>
							
						</td>
					</tr>
				</table> -->

			

			</section>

			<section id="slider-jigsaw clearfix">
				<div class="bizSlick main">
					<div class="">
						<div class="clearfix bizSlick-inner">
							<div class="bizSlick-img clearfix">
								<img src="<?php bloginfo( 'template_url'); ?>/img/jig-ejig-logo.png" alt="slick-pic" class="bizImg">
							</div>
							<hr>
							<h2>EJIGSAW</h2>
							<p>CEO and Founder</p>
						</div>
					</div>
					<div class="">
						<div class="clearfix bizSlick-inner">
							<div class="bizSlick-img clearfix">
								<img src="<?php bloginfo( 'template_url'); ?>/img/jig-med-logo.png" alt="slick-pic" class="bizImg">
							</div>
							<hr>
							<h2>JIGSAW MEDICAL</h2>
							<p>CEO and Founder</p>
						</div>
					</div>
					<div class="">
						<div class="clearfix bizSlick-inner">
							<div class="bizSlick-img clearfix">
								<img src="<?php bloginfo( 'template_url'); ?>/img/jig-spec-logo.png" alt="slick-pic" class="bizImg">
							</div>
							<hr>
							<h2>JIGSAW SPECIAL PROJECTS</h2>
							<p>CEO and Founder</p>
						</div>

					</div>
					<div class="">
						<div class="clearfix bizSlick-inner">
							<div class="bizSlick-img clearfix">
								<img src="<?php bloginfo( 'template_url'); ?>/img/jig-spec-logo.png" alt="slick-pic" class="bizImg">
							</div>
							<hr>
							<h2>JIGSAW SPECIAL PROJECTS</h2>
							<p>CEO and Founder</p>
						</div>
						
					</div>
				</div>
			</div>

<?php get_footer(); ?>