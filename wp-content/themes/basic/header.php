<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,500,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">


	<?php wp_head();?>
</head>
<body>
  <div class="container-fluid">
	<div class="row header-bckgnd">
		<div class="col-md-6">
			<p><span class="logo-title" style="margin-left:20px; margin-bottom:15px;">Tuts <span class="ampersand">&</span> Shorts</span><br/><span class="second-logo hidden-md hidden-xs hidden-sm">Graphic and Web Design Tutorials and Shortcuts</span></p>
		</div>
		<div class="col-md-6 ">
			<nav class="main-nav nav nav-pills nav-stacked xs-collapse">
				<ul  class="nav nav-pills nav-stacked main-nav">
					<li><a href="<?php bloginfo('url');?>/">Home</a></li>
					<li><a href="<?php bloginfo('url');?>/about/">About</a></li>
					<li><a href="<?php bloginfo('url');?>/contact/ ">Contact</a></li>
					<li><a href="<?php bloginfo('url');?>/advertise-with-us/">Advertise with Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="row second-nav">
		<?php if(!is_front_page()){ ?>
		<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs nav-justified" role="tablist">
		    <li role="presentation" class=" tabs"><a href="<?php bloginfo('url');?>/#photoshop" aria-controls="home">PHOTOSHOP</a></li>
		    <li role="presentation" class="tabs"><a href="<?php bloginfo('url');?>/#illustrator" aria-controls="profile">ILLUSTRATOR</a></li>
		    <li role="presentation" class="tabs"><a href="<?php bloginfo('url');?>/#html" aria-controls="messages">HTML/CSS</a></li>
		    <li role="presentation" class="tabs"><a href="<?php bloginfo('url');?>/#shortcut" aria-controls="settings">SHORTCUTS</a></li>
		  </ul>
		 </div>
	<?php } ?>
	</div>

