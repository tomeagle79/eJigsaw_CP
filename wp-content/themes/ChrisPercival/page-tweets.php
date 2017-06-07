<?php 
/*

Template name: tweets page

*/

?>


<?php get_header(); ?>

<div class="main clearfix">
	
	<section class="first">
		<h1><?php the_title() ?></h1>
		<?php
				$configs = [
				  // Set here tokens from your Twitter's app
				  'consumer_key' => 'cP88sGRts9QH653cmeQDaVZLf', 
				  'consumer_secret' => 'zDFf53xCgMIO6M7dUByREpmn9bww1XBk4BRYBRV6cBjCsF7LSf',

				  // The Twitter account name
				  'screen_name' => 'TomEEagle',

				  // The number of tweets
				  'count' => 5,
				];

				$tweets = \Netgloo\GetTweetsInPhp::get_tweets($configs);

				foreach ($tweets as $tweet) {
				  echo $tweet->created_at . "<br/>";
				  echo $tweet->n_html_text . "<br/>";
				  if ($tweet->n_has_media_photo) {
				    echo $tweet->n_media_photo_url  . "<br/>";
				  }
				}
		?>

		
		
	</section>
</div>



<?php get_footer(); ?>