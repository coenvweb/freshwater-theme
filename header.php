<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * @package Oxygen
 * @subpackage Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<?php if ( hybrid_get_setting( 'oxygen_favicon_url' ) ) { ?>
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo hybrid_get_setting( 'oxygen_favicon_url' ); ?>" />
	<?php } ?>
	
	<!-- Title -->
	<title><?php hybrid_document_title(); ?></title>
	
	<!-- Stylesheet -->	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- WP Head -->
	<?php wp_head(); ?>
	
	<!--UW-->
	<link rel="stylesheet" href="http://depts.washington.edu/uweb/inc/css/header.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://depts.washington.edu/uweb/inc/css/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="http://depts.washington.edu/uweb/inc/css/footer.css" type="text/css" media="screen" />
<script type="text/javascript">
// clear out the global search input text field
window.onload = function() {

     if (document.getElementById("searchInput")) {

       var query = document.getElementById("searchInput");

       query.onfocus = function() {
         if (query.value == query.defaultValue) {
           query.value = "";
         }
       }

       query.onblur = function() {
         if (query.value == "") {
           query.value = query.defaultValue;
         }
       }

     }

}
</script>


</head>

<body class="<?php hybrid_body_class(); ?> no-js">

<div id="wheader" class="colorPurple wYes patchNo ">
 <div id="autoMargin">
  <div class="wlogoSmall">
   <div class="logoAbsolute"><a id="wlogoLink" href="//www.washington.edu/">W</a></div>
   <div><a href="//www.washington.edu/">University of Washington</a></div>
  </div>
  <div id="wtext">
   <ul>
    <li><a href="//www.washington.edu/">UW Home</a></li>
    <li><span class="wborder"><a href="//www.washington.edu/home/directories.html">Directories</a></span></li>
    <li><span class="wborder"><a href="//www.washington.edu/discover/visit/uw-events">Calendar</a></span></li>
    <li><span class="wborder"><a href="//www.lib.washington.edu/">Libraries</a></span></li>
    <li><span class="wborder"><a href="//www.washington.edu/maps/">Maps</a></span></li>
    <li><span class="wborder"><a href="//myuw.washington.edu/">My UW</a></span></li>
   </ul>
  </div>
 </div>
</div>


	<?php do_atomic( 'open_body' ); // oxygen_open_body ?>

	<div id="container">
		
		<div class="wrap">

			<?php do_atomic( 'before_header' ); // oxygen_before_header ?>
	
			<div id="header">
	
				<?php do_atomic( 'open_header' ); // oxygen_open_header ?>
	
					<div id="branding">
						
						<?php oxygen_site_title(); ?>
						
						<?php hybrid_site_description(); ?>
						
					</div><!-- #branding -->
					
					<?php get_sidebar( 'header' ); // Loads the sidebar-header.php template. ?>
					
					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>					
	
					<?php do_atomic( 'header' ); // oxygen_header ?>
	
				<?php do_atomic( 'close_header' ); // oxygen_close_header ?>
	
			</div><!-- #header -->
	
			<?php do_atomic( 'after_header' ); // oxygen_after_header ?>
	
			<?php do_atomic( 'before_main' ); // oxygen_before_main ?>
	
			<div id="main">
	
				<?php do_atomic( 'open_main' ); // oxygen_open_main ?>