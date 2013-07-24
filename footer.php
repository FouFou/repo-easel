		<?php get_template_part('layout', 'foot'); ?>
	</div> <!-- / #page -->

	<footer id="footer">
		<div id="footer-menubar-wrapper" class="container-fluid">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'depth' => 1, 'fallback_cb' => false, 'container_class' => 'footmenu', 'theme_location' => 'Footer' ) ); ?>
			<div class="clear"></div>
		</div>
		<div class="container-fluid">
			<?php do_action('easel-footer'); ?>
			<?php easel_get_sidebar('footer'); ?>
			<?php if (!easel_themeinfo('disable_footer_text')) easel_footer_text(); ?>
		</div>
	
	</footer>
</div> <!-- / #page-wrap -->
<?php wp_footer(); ?>
</body>
</html>