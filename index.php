<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<script src="http://feeds.feedburner.com/~s/ComancheHill?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
		<div class="meta"><?php the_category(',') ?> &#8212; <?php the_author() ?> on <?php the_time('F j, Y'); ?> at <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?></div>	
		<div class="storycontent">
			<?php the_content(__('(more...)')); ?>
		</div>
		<div class="feedback">
			<?php wp_link_pages(); ?>
			<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
		</div>
		<?php comments_template(); // Get wp-comments.php template ?>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
<?php get_footer(); ?>
