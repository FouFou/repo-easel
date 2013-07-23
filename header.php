<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<meta name="Responsive Easel" content="<?php echo easel_themeinfo('version'); ?>" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

</head>

<body <?php body_class(); ?>>

<div id="page-wrap">
	<?php easel_get_sidebar('above-header'); ?>
	<div id="page" class="container-fluid">
		
		<header id="header" class="">
			<div class="container-fluid">
				<div class="row-fluid">
					<hgroup class="header-info <?php echo $hgWidth; ?>">
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
						<h3 class="description"><?php bloginfo('description') ?></h2>
					</hgroup>
					<aside class="<?php $sWidth ?>">
						<?php easel_get_sidebar('header'); ?>
					</aside>
				</div>
			</div>
		</header>

<?php 
if (!easel_themeinfo('disable_default_menubar') && function_exists('easel_menubar')) easel_menubar();
if (easel_themeinfo('enable_breadcrumbs')) easel_breadcrumbs();
if (is_active_sidebar('sidebar-menubar')) easel_get_sidebar('menubar');
get_template_part('layout', 'head');
?>