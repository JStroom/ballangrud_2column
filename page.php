<?php
/**
 * @package WordPress
 * @subpackage Ballangrud_2column
 */

get_header(); 
?>

	<div id="content" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="storytitle"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


				<div class="meta">
					<span class="metadate"><?php the_time('j F, Y'); ?> <?php the_time('G:i'); ?> | </span><span class="metaauteur"><?php the_author() ?> <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    			</div>

			    <div class="social">
			    	<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-show-faces="false"></div>
			    	<div class="twitter"> <a href="<?php the_permalink() ?>" class="twitter-share-button" data-lang="en">Tweet</a></div>
			    </div>

			</div>
		</div>
		<?php endwhile; endif; ?>

	
	
	</div>

<?php get_footer(); ?>
