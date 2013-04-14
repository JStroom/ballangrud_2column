<?php
/**
 * @package WordPress
 * @subpackage Ballangrud 2 column
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	 <h3 class="storytitle"><a class="storytitle" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	<div class="meta">
		<span class="metadate"><?php the_time('j F, Y'); ?> <?php the_time('G:i'); ?> | </span><span class="metaauteur"><?php the_author() ?> <?php edit_post_link(__('Edit This')); ?>
    	
    </div>

    <div class="social">
    	<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-show-faces="false"></div>
    	<div class="twitter"> <a href="<?php the_permalink() ?>" class="twitter-share-button" data-lang="en">Tweet</a></div>
    </div>
	



</div>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>

<?php get_footer(); ?>
