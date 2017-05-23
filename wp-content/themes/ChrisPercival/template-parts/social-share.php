
<div class="hidden social-share-wrapper">
	<ul class="social-share">
	    <li class="facebook">
	       <!--fb-->
	       <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'cryst4l')?>"><i class="fa fa-facebook-square"></i> <span>Facebook</span></a>
	    </li>
	    <li class="twitter">
	       <!--twitter-->
	       <a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this post on Twitter!', 'cryst4l')?>"><i class="fa fa-twitter-square"></i> <span>Twitter</span></a>
	    </li>
	    <li class="google-plus">
	       <!--g+-->
	       <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this post on Google Plus!', 'cryst4l')?>"><i class="fa fa-google-plus-square"></i> <span>Google +</span></a>
	    </li>
	    <li class="linkedin">
	       <!--linkedin-->
	       <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=LinkedIn" title="<?php _e('Share this post on Linkedin!', 'cryst4l')?>"><i class="fa fa-linkedin-square"></i> <span>Linkedin</span></a>
	    </li>
	    <li class="pinterest">
	       <!--Pinterest-->
	       <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo site_url()?>" class="pin-it-button" count-layout="horizontal" title="<?php _e('Share on Pinterest','cryst4l') ?>"><i class="fa fa-pinterest-square"></i> <span>Pinterest</span></a>
	    </li>
	    <li class="email-share">
		   <!--Email-->
	       <a title="<?php _e('Share by email','cryst4l') ?>" href="mailto:?subject=Check this post - <?php the_title();?> &amp;body= <?php the_permalink()?>&amp;title="<?php the_title()?>" email"=""><i class="fa fa-envelope"></i> <span><?php _e('Share by email', 'cryst4l')?></span></a>
	    </li>
	</ul>
</div>


<div class="social-share-wrapper">
	<ul class="social-share">
	    <li class="facebook">
	       <!--fb-->
	       <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'cryst4l')?>"><i class="fa fa-facebook-square"></i></a>
	    </li>
	    <li class="twitter">
	       <!--twitter-->
	       <a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this post on Twitter!', 'cryst4l')?>"><i class="fa fa-twitter-square"></i></a>
	    </li>
	    <li class="google-plus">
	       <!--g+-->
	       <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this post on Google Plus!', 'cryst4l')?>"><i class="fa fa-google-plus-square"></i></a>
	    </li>
	    <li class="linkedin">
	       <!--linkedin-->
	       <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=LinkedIn" title="<?php _e('Share this post on Linkedin!', 'cryst4l')?>"><i class="fa fa-linkedin-square"></i></a>
	    </li>
	    <li class="email-share">
		   <!--Email-->
	       <a title="<?php _e('Share by email','cryst4l') ?>" href="mailto:?subject=Check this post - <?php the_title();?> &amp;body= <?php the_permalink()?>&amp;title="<?php the_title()?>" email"=""><i class="fa fa-envelope"></i></a>
	    </li>
	</ul>
</div>