<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-head"><?php do_action('easel-post-head'); ?></div>
	<div class="post-content">
		<?php if (!easel_is_bbpress()) easel_display_author_gravatar(); ?>
		<div class="post-info">
			<?php 
				easel_display_post_title();
				if (!easel_is_bbpress()) easel_display_post_calendar();
				if (is_sticky()) { ?><div class="sticky-image">Featured Post</div><?php }
				if (function_exists('easel_show_mood_in_post')) easel_show_mood_in_post(); 
			?>
			<div class="post-text">
				<?php 
				easel_display_post_author();
				easel_display_post_date();	easel_display_post_time(); easel_display_modified_date_time();
				easel_display_post_category();
				if (function_exists('the_ratings') && $post->post_type == 'post') { the_ratings(); }
				do_action('easel-post-info');
				do_action('comic-post-info');
				wp_link_pages(array('before' => '<div class="linkpages"><span class="linkpages-pagetext">Pages:</span> ', 'after' => '</div>', 'next_or_number' => 'number'));
				?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="entry">
			<?php easel_display_the_content(); ?>
			<div class="clear"></div>
		</div>
		<div class="post-extras">
			<?php 
				easel_display_post_tags();
				do_action('easel-post-extras');
				do_action('comic-post-extras');
				easel_display_comment_link(); 
			?>
			<div class="clear"></div>
		</div>
		<?php edit_post_link(__('Edit this comic.','easel'), '', ''); ?>
	</div>
	<div class="post-foot"><?php do_action('easel-post-foot'); ?></div>
</div>
