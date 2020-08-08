<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	
	<header>
<div class="container mt-2">
	<div class="row">
		<div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
			<a href="<?php echo home_url(); ?>"><img class=" rounded mx-auto d-block img-fluid" src="<?php echo get_template_directory_uri();?>/images/nit.jpg"></a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-3">
			<h2 class="text-center"><?php bloginfo('description');?></h2>
			<p class="text-center">Approved by Bangladesh Technical Education Board (BTEB) For Technical Education</p>
			<p class="text-center">Muradpur, Chattogram</p>
			
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i> Notice!</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p></marquee>
</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse navBg" id="navbarSupportedContent">
  	<?php
		$args = array(
		'theme_location'=> 'primary'
		);
		wp_nav_menu($args);
	?>
  </div>
</nav>
</header>