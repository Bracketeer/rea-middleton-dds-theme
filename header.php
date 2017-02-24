<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>

</head>

<body>

<div id="wrapper">

<header style="background-image: url(<?php header_image(); ?>);">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
				<a class="navbar-brand" href="<?php echo get_option('home'); ?>/">
					<img src="<?php site_icon_url($size = 30); ?>" alt="">
				</a>
				<ul class="nav navbar-nav navbar-right">
					<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
	    </div>
	  </div>
	</nav>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 50,100 0,100"/>
    <polygon fill="white" points="100,0 100,100 50,100"/>

  </svg>
	<p class="description"><?php bloginfo('description'); ?></p>

	<div class="site-title">
		<?php the_custom_logo(); ?>
			<a href="<?php echo get_option('home'); ?>/">
				<h1>
					<?php bloginfo('name'); ?>
				</h1>
			</a>
		</div>
</header>
