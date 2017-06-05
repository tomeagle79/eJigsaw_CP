<?php 
/*

Template name: Slider page

*/

?>


<?php get_header(); ?>

<style type="text/css">
	.mySlickSlide {
		position: relative;

	}

	h2 {
		position: absolute;
		top: 50%;
		left: 50%;
		color: white;
	}

</style>


<div class="">
	<div class="mySlick">
		<div class="mySlickSlide">
			<img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header1.jpg" alt="slick-pic">
			<h2>"This is a really inspirational quote"</h2>
		</div>
		<div>
			<img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header2.jpg" alt="slick-pic">
		</div>
		<div>
			<img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header3.jpg" alt="slick-pic">
		</div>
		<div>
			<img src="<?php bloginfo( 'template_url'); ?>/img/slider_images/header4.jpg" alt="slick-pic">
		</div>
	</div>
		

</div>


<?php get_footer(); ?>