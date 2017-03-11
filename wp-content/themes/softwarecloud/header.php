<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php wp_title(''); ?></title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<script src="https://use.typekit.net/ppc4xjg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!--[if lt IE 9]>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/min/rem.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/min/respond.min.js"></script>
<![endif]-->

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">
<![endif]-->

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="overlay overlay-hugeinc">
		<button type="button" class="overlay-close">Close</button>
		<?php wp_nav_menu( array( 'menu' => 'Main Navigation', 'container_class' => 'main-menu' ) ); ?>
	</div>	
	<header class="page-header">

		<?php if (is_page(array('advisory','cloud-desk'))) : ?>
		<a href="<?php echo home_url(); ?>" rel="nofollow" class="main-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/software-cloud-white.svg" alt="Software Cloud"></a>
		<?php else : ?>
		<a href="<?php echo home_url(); ?>" rel="nofollow" class="main-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/software-cloud.svg" alt="Software Cloud"></a>
		<?php endif; ?>
		<div class="header-contacts">
			<span class="header-contacts-icon"><span>Contacts</span></span>
			<div class="header-contacts-details"><a href="mailto:info@softcl.com">info@softcl.com</a> | <span>01132 456 789</span></div>
			
			
		</div>
		<div id="trigger-overlay"><span></span></div>

	</header>
