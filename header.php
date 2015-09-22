<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- HTML5 -->
    <meta name="description" content="Suits his Style is an Ottawa based nonprofit that supports the employment opportunities of men in need by providing professional attire with the vision of a world in which everyone is given the opportunity to excel.">

    <!-- FACEBOOK -->
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/logo.png">
    <meta property="og:title" content="<?php wp_title(''); ?>">
    <meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
    <meta property="og:site_name" content="Suits His Style">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
    <meta name="twitter:title" content="<?php wp_title(''); ?>">
    <meta name="twitter:description" content="Suits his Style is an Ottawa based nonprofit that supports the employment opportunities of men in need by providing professional attire with the vision of a world in which everyone is given the opportunity to excel.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/library/images/logo-tie.png">
    <meta name="twitter:site" content="@SuitshisStyle">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <h1 class="visuallyhidden">
          <?php bloginfo('name'); ?>
          <?php bloginfo('description'); ?>
        </h1>

				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<div id="logo" class="ctr-logo" itemscope itemtype="http://schema.org/Organization">
          <a class="logo-tie" href="<?php echo home_url(); ?>" rel="nofollow"></a>
        </div>

				<?php // if you'd like to use the site description you can un-comment it below ?>
				<?php // bloginfo('description'); ?>


				<nav class="nav-main js-nav-main" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
  					         'container' => false,                            // remove nav container
  					         'container_class' => 'menu cf nav-main',        // class of container (should you choose to use it)
  					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
  					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
  					         'theme_location' => 'main-nav',                 // where it's located in the theme
  					         'before' => '',                                 // before the menu
      			               'after' => '',                                  // after the menu
      			               'link_before' => '',                            // before each link
      			               'link_after' => '',                             // after each link
      			               'depth' => 0,                                   // limit the depth of the nav
  					         'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>

          <ul class="nav nav-right-side">
            <li><a class="btn btn-primary btn-donate" href="<?php echo site_url() ?>/support-us">Donate</a></li>
          </ul>
				</nav>

        <button class="btn-as-link btn-toggle-nav">Show Menu</button>


			</header>
