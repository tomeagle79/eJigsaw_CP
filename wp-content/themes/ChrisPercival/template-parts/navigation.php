<div class="navigation clearfix">
	<?php $prevPost = get_previous_post(true); if($prevPost) {?>

		<div class="blog-border-box clearfix pag pag-left">
			<div class="left">
				<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID , array(80,80) );?>
				<?php previous_post_link('%link',"<p>%title</p>", TRUE); ?>
				<?php // previous_post_link('%link',"<img class='arrow-green' src='http://localhost/ChrisPercival/wp-content/uploads/2017/05/charity-arrow-left.png'>", TRUE); ?>
			</div>
			<div class="right">

				<?php previous_post_link('%link',"$prevthumbnail", TRUE); ?>
			</div>
 		</div>


	<?php } $nextPost = get_next_post(true);	if($nextPost) { ?>

		<div class="blog-border-box clearfix pag pag-right" style="float:right;">
			<div class="left">
				<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(80,80) );  ?>
				<?php next_post_link('%link',"$nextthumbnail", TRUE); ?>
			</div>
			<div class="right">

				<?php next_post_link('%link',"<p>%title</p>", TRUE); ?>
				<?php // next_post_link('%link',"<img class='arrow-green' src='http://localhost/ChrisPercival/wp-content/uploads/2017/05/charity-arrow-right.png'>", TRUE); ?>
			</div>
		</div>

		<?php } ?>
</div>