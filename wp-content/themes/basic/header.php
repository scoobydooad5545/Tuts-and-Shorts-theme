<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head();?>
</head>
<body>
  <div class="container-fluid">
	<div class="row header-bckgnd">
		<div class="col-md-6">
			<p><span class="logo-title" style="margin-left:20px; margin-bottom:15px;">Tuts <span class="ampersand">&</span> Shorts</span><br/><span class="second-logo">Graphic and Web Design Tutorials and Shortcuts</span></p>
		</div>
		<div class="col-md-6 hidden-xs">
			<nav class="main-nav nav nav-pills nav-stacked">
				<ul  class="nav nav-pills nav-stacked main-nav">
					<li><a href="http://localhost/blog2/">Home</a></li>
					<li><a href="http://localhost/blog2/about/">About</a></li>
					<li><a href="http://localhost/blog2/contact/ ">Contact</a></li>
					<li><a href="http://localhost/blog2/advertise-with-us/">Advertise with Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="row second-nav">
		<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs nav-justified" role="tablist">
		    <li role="presentation" class="active tabs"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PHOTOSHOP</a></li>
		    <li role="presentation" class="tabs"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ILLUSTRATOR</a></li>
		    <li role="presentation" class="tabs"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">HTML/CSS</a></li>
		    <li role="presentation" class="tabs"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">SHORTCUTS</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
		    	<img src="<?php bloginfo('template_directory'); ?>/images/photoshop/"

		    </div>
		    <div role="tabpanel" class="tab-pane" id="profile">
		    	

		    </div>
		    <div role="tabpanel" class="tab-pane" id="messages">
		    	

		    </div>
		    <div role="tabpanel" class="tab-pane" id="settings">
		    	

		    </div>
		  </div>

		</div>
	</div>
