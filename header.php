<?php 
	if ( is_404() )
		echo '404';
?>	 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>
		<?php if ( is_home() ) {
		     bloginfo('name'); echo " - "; bloginfo('description');
		    } elseif ( is_category() ) {
		        single_cat_title(); echo " - "; bloginfo('name');
		    } elseif (is_single() || is_page() ) {
		        single_post_title();
		    } elseif (is_search() ) {
		        echo "搜索结果"; echo " - "; bloginfo('name');
		    } elseif (is_404() ) {
		        echo '页面未找到!';
		    } else {
		        wp_title('',true);
		    } ?>
		</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/favicon.png">
		
		<!-- stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animsition.min.css">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">

		<!-- google fonts -->
		<link href='http://fonts.useso.com/css?family=Raleway:400,300,500,600,700,800,900,200,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Source+Code+Pro:400,500,700' rel='stylesheet' type='text/css'>

		<!-- font awesome -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
		<!-- pixeden icon font -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pe-icon-7-stroke.css">

		<!-- main css file -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
		<!-- modernizr -->
		<script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.6.2.min.js"></script>

	</head>


	<body>
		<!-- MAIN_WRAPPER -->
		<div class="main-wrapper animsition">

			<!-- HEADER -->
			<header>
				<!-- LOGO -->
				<a href="<?php echo bloginfo('url'); ?>" class="logo">
					<h3>Nativer</h3>
				</a>
				<!-- /LOGO -->

				<!-- MOB MENU ICON -->
				<a href="#" class="mob-nav">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /MOB MENU ICON -->
				
				<!-- NAVIGATION -->
				<nav id="topmenu">
					<ul>
						<li>
							<a href="<?php echo bloginfo('url'); ?>">home</a>
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/about">about</a>
							<ul>
								<li><a href="<?php echo bloginfo('url'); ?>/donation">捐赠</a></li>
							</ul>
						</li>
						<li><a href="<?php echo bloginfo('url'); ?>/contact">contact</a></li>
					</ul>
				</nav>
				<!-- NAVIGATION -->

			</header>
			<!-- /HEADER -->