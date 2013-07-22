<div id="sidebar-left" class="hidden-phone sidebar <?php echo (easel_is_layout('3c,3cl,3cr')) ? 'span3' : 'span4'; ?>">
<?php 
	do_action('easel-sidebar-left');
	if ( !dynamic_sidebar('sidebar-left-sidebar') ) { ?>
	<div class="sidebar-no-widgets">
		<?php _e('There are currently no widgets assigned to the left-sidebar, place some!','easel'); ?><br />
		<br />
		<?php _e('Once you add widgets to this sidebar, this default information will go away.','easel'); ?><br />
		<br />
		<?php _e('Widgets can be added by going to your dashboard (wp-admin) -> Appearance -> Widgets, drag a widget you want to see into one of the appropriate sidebars.','easel'); ?><br />
	</div>
	<?php }
?>
</div>
