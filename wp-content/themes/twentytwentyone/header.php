<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/abstract-assets/css/base.css';?>">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/abstract-assets/css/vendor.css';?>">  
   <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/abstract-assets/css/main.css';?>">
        

   <!-- script
   ================================================== -->
	<script src="<?php echo get_template_directory_uri().'/assets/abstract-assets/js/modernizr.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/assets/abstract-assets/js/pace.min.js';?>"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/assets/abstract-assets/favicon.ico';?>" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri().'/assets/abstract-assets/favicon.ico';?>" type="image/x-icon">

	
</head>
<body id="top">

<!-- header 
================================================== -->
<header class="short-header">   

   <div class="gradient-block"></div>	

   <div class="row header-content">

	   <div class="logo">
		 <a href="index.html">Author</a>
	  </div>

	   <nav id="main-nav-wrap">
			<ul class="main-navigation sf-menu">
				<li class="current"><a href="index.html" title="">Home</a></li>									
				<li class="has-children">
					<a href="category.html" title="">Categories</a>
					<ul class="sub-menu">
					<li><a href="category.html">Wordpress</a></li>
					<li><a href="category.html">HTML</a></li>
					<li><a href="category.html">Photography</a></li>
					<li><a href="category.html">UI</a></li>
					<li><a href="category.html">Mockups</a></li>
					<li><a href="category.html">Branding</a></li>
				 </ul>
				</li>
				<li class="has-children">
					<a href="single-standard.html" title="">Blog</a>
					<ul class="sub-menu">
					<li><a href="single-video.html">Video Post</a></li>
					<li><a href="single-audio.html">Audio Post</a></li>
					<li><a href="single-gallery.html">Gallery Post</a></li>
					<li><a href="single-standard.html">Standard Post</a></li>
				 </ul>
				</li>
				<li><a href="style-guide.html" title="">Styles</a></li>
				<li><a href="about.html" title="">About</a></li>	
				<li><a href="contact.html" title="">Contact</a></li>										
			</ul>
		</nav> <!-- end main-nav-wrap -->

		<div class="search-wrap">
			
			<form role="search" method="get" class="search-form" action="#">
				<label>
					<span class="hide-content">Search for:</span>
					<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>

			<a href="#" id="close-search" class="close-btn">Close</a>

		</div> <!-- end search wrap -->	

		<div class="triggers">
			<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
			<a class="menu-toggle" href="#"><span>Menu</span></a>
		</div> <!-- end triggers -->	
	   
   </div>     		
   
</header> <!-- end header -->
<?php wp_head(); ?>