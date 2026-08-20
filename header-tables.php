<?php
/**
 * Header template for tables of CB data
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 *
 * @Author JMarlatt
 * @package WordPress
 * @subpackage Twenty_Twenty_One_Child
 * @since Twenty Twenty_One_Child 1.0
 * @version 1.0 Jan 16, 2026
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
	<?php
	$GLOBALS['header_tables_loaded'] = true;
	?>
    <!---Responsive tables---------------------------->
	<script>
		// Detect mobile device and change to single column
    document.addEventListener('DOMContentLoaded', jmMobile);
		
    screen.orientation.addEventListener('change', jmInsert); 
		
	function jmInsert() {
		var myWrap = document.getElementById('jmWrap');
		if ( jmWrap !== null) {
		var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
		var myDiv = document.getElementById('jm-filter');
		var myTopDiv = document.getElementById('top');
		let orientationType = screen.orientation.type; // e.g., "portrait-primary", "landscape-secondary"
		if(isMobile) {
			if (orientationType.includes ("portrait")) {
				myDiv.remove();
				myTopDiv.style.paddingLeft = "10px";
			} else {
			if (!myDiv){
				myTopDiv.style.paddingLeft = "40px";
				myWrap.innerHTML = `
<div id="jm-filter" style="width:250px; ">
	<br><br><br><br>
<?php include ( get_stylesheet_directory() . '/includes/FilterAGGform.php'); ?>
<?php include ( get_stylesheet_directory() . '/includes/RecentPosts_inc.php');?>
</div>
`;
			}
			}
		}	
	};
	}

  function jmMobile() {
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    var myDiv = document.getElementById('jm-filter');
	var myTopDiv = document.getElementById('top');
    var tbHead = document.querySelector('.t1CanadianCBD');
    const jmWidth = window.innerWidth;
    
    if (isMobile && jmWidth < 600) {
        myDiv.remove();         // Remove filters and recent posts
		myTopDiv.style.paddingLeft = "10px";
		tbHead.style.width = "100%";
    } 
	if (isMobile) { tbHead.style.width = "100%"; }
}
	</script>
	<!---End Responsive Tables---------------------------->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="msvalidate.01" content="957CB525435BA5E49FCE1E1493C6737E" />
	<title>
		<?php
		// Print the <title> tag based on what is being viewed.
		global $page, $paged, $menu;

		wp_title('|', true, 'right');

		// Add the blog name.
		bloginfo('name');

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page()))
			echo " | $site_description";

		// Add a page number if necessary:
		if (($paged >= 2 || $page >= 2) && !is_404())
			echo ' | ' . sprintf(__('Page %s', 'twentyeleven'), max($paged, $page));

		?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

	<!--JRM - include sort table code -->
	<script src="/wp-includes/js/sorttable.js" type="text/javascript"></script>
	<meta http-equiv="X-Frame-Options" content="sameorigin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> <!--JM 3/20-->

	<?php
	wp_head();
	?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed">
		<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url(home_url('/')); ?>"
							rel="home"><?php bloginfo('name'); ?></a></span></h1>
				<!-- <h2><scan style="color: blue; font-family: 'Georgia'; font-variant: small-caps; font-size: 80%; font-weight: bold; margin: 0 0 0.625% 0; padding:0; border:0; line-height:70%">Follow us on <a href="www.twitter.com/uscoveredbonds" target="_blank">@UScoveredbonds</a></scan></h2> -->
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>

			<?php get_search_form(); ?>

			<nav id="access" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</nav><!-- #access -->

		</header><!-- #branding -->


		<div id="main">
