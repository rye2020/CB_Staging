<?php
/**
 * Header template for New Front page
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * JRM Updated to add specific menus to certain pages (2/26/2015)
 *
 * @Author JMarlatt
 * @package WordPress
 * @subpackage Twenty_Eleven_Child
 * @since Twenty Eleven_Child 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="msvalidate.01" content="957CB525435BA5E49FCE1E1493C6737E" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged, $menu;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
global $wp_query;
$pagename = $wp_query->queried_object->post_name;
	if (strpos($pagename, "t21") == 0) {
	echo '<link rel="stylesheet" id="parent-style-css" href="https://www.us-covered-bonds.com/staging/3708/wp-content/themes/twentytwentyone/style.css?ver=1.0.0" media="all">';
	echo '<link rel="stylesheet" id="parent-style-css" href="https://www.us-covered-bonds.com/staging/3708/wp-content/themes/twentytwentyone/inc/block-styles.css?ver=1.0.0" media="all">';
	echo '<link rel="stylesheet" id="child-style-css" href="https://www.us-covered-bonds.com/staging/3708/wp-content/themes/twentytwentyone-child/style.css?
	return;
	}
	else {  
	echo '<link rel="stylesheet" id="child-style-css" href="https://www.us-covered-bonds.com/staging/3708/wp-content/themes/twentytwentyone-child/style.css?ver=1.0.0" media="all"> ';
	 } 
?>
<!--JRM - include sort table code -->
<script src="/wp-includes/js/sorttable.js" type="text/javascript"></script> 
<meta http-equiv="X-Frame-Options" content="sameorigin"> 
<!--JRM - include jQuery code  -->	
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php
	 /* 
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();

	?>
			// Added for Claude.ai for debugging Jan 2026
		    <style type="text/css">
    .wp-block-gallery.columns-4.is-layout-flex figure.wp-block-image {
        display: inline-block !important;
        width: 23.5% !important;
        margin: 0.5% !important;
        vertical-align: top !important;
    }
    .wp-block-gallery.columns-4.is-layout-flex {
        display: block !important;
    }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
                <!-- <h2><scan style="color: blue; font-family: 'Georgia'; font-variant: small-caps; font-size: 80%; font-weight: bold; margin: 0 0 0.625% 0; padding:0; border:0; line-height:70%">Follow us on <a href="www.twitter.com/uscoveredbonds" target="_blank">@UScoveredbonds</a></scan></h2> -->
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			
				<?php get_search_form(); ?>
			<nav id="access" role="navigation">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                    
			</nav><!-- #access -->

	</header><!-- #branding JM -->


	<div id="main">
