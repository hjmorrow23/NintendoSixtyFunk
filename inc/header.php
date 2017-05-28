<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Nintendo Sixty-Funk</title>
    <meta charset="UTF-8">
    
    <!-- Information that will display with description> -->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <style>
		/* Page Styles
		================================ */
		
		* {
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		
		body {
			position: relative;
			background-color: #212121;
		}
		
		.site-wrapper, .main-content {
			width: 100%;
			height: 100%;
		}
		
		/* Heading Styles
		================================= */
		
		
		.main-header {
			position: relative;
			height: 45rem;
			padding-bottom: 1rem;
			background: linear-gradient(
		      rgba(100, 100, 100, 0.6), 
		      rgba(0, 0, 0, 0.6)
		    ), url('../../IMG/NSFbannerphoto.jpg') no-repeat;
			background-position: 20% 30%;
			background-attachment: fixed;
			background-size: cover;	
		}
		
		.main-header,
		h1,
		h2,
		h3 {
			font-family: 'Raleway', sans-serif;
		}
		
		//Navigation
		
		.nav-bar {
			position: fixed;
			z-index: 3;
			width: 100%;
			height: 14%;
			background: rgba(255, 255, 255, 1);
		}
		
		.logo, .main-nav {
			position: absolute;	
			bottom: 0;
			z-index: 5;
			display: inline-block;
			padding-bottom: 2rem;
		}
		
		.logo {
			left: 0;
			padding-left: 1.5rem;	
			
			a {
				text-decoration: none;
				color: black;
			}
		}
		
		.main-nav {
			right: 0;
			padding-right: 1.5rem;
			list-style: none;
			
			
			li {
				position: relative;
				display: inline-block;
				padding-right: 1rem;
			}
			
			a {
				display: block;
				padding: .3125rem;
				text-decoration: none;
				color: black;
			}
			
			.selected {
				border-bottom: 1px solid;
			}
				
			a:hover {
				border-bottom: 1px solid;
				text-decoration: none;
				transition: border-bottom 0.5s;
			}	
		}
		
		.heading-item {
			text-align: center;
			margin-top: 3rem;
		}
		
		.heading-item a {
			text-align: center;
			display: inline-block;
			width: 10rem;
			padding: 0.3rem 0.5rem;
			font-family: 'Roboto', sans-serif;
			font-size: 20px;
			font-weight: 200;
		    text-decoration: none;
		    color: white;
		    transition: color .5s, background-color .5s;
		    border: 1px solid white;
		}
		
		.heading-item a:hover {
			color: black;
			background-color: white;
		}
		
		//Mobile Navigation
		
		.menu-icon,
		.mobile-nav {
			display: none;
		}
		
		.main-heading {
			position: relative;
			text-align: center;
			z-index: 2;
			padding-top: 20rem;
			font-size: 3rem;
			color: white;
		}
		
		.main-col a,
		.single-col a {
			text-decoration: none;
			color: black;
			transition: color .5s;
		}
		
		.main-col a:hover,
		.single-col a:hover {
			color: silver;
		}
    </style>
    
    <!-- Stylesheets and Resets -->
    
    
</head>
<body>
	<!-- Site Wrapper -->
	<div class="page-container hide-mobile">
		<div class="site-wrap">
		
			<!-- Header -->
			<div class="main-header">
					<div class="nav-bar">
						<div class="logo"><a href="index.php">NSF</a></div>
						<nav class="main-nav">
							<ul>
								<li><a href="index.php" <?php if ($pageTitle == "Home") { echo 'class="selected"';} ?>>Home</a></li>
								<li><a href="squad.php" <?php if ($pageTitle == "Squad") { echo 'class="selected"';} ?>>Squad</a></li>
								<li><a href="media.php" <?php if ($pageTitle == "Media") { echo 'class="selected"';} ?>>Media</a></li>
								<li><a href="photos.php" <?php if ($pageTitle == "Gallery") { echo 'class="selected"';} ?>>Photos</a></li>
								<li><a href="news.php" <?php if ($pageTitle == "News") { echo 'class="selected"';} ?>>News</a></li>
								<li><a href="contact.php" <?php if ($pageTitle == "Contact") { echo 'class="selected"';} ?>>Book</a></li>
							</ul>
						</nav>
						<a href="#" class="menu-icon">&#9776;</a>
					</div>
				<div class="main-heading"><?php echo $pageHeading; ?></div>
				<?php 
		    if(isset($pageHeadingLink)) {
	          echo 
	          '<!--Title Link-->
	          <div class="heading-item">
	            <a href="' . $pageHeadingLinkUrl . '">' . $pageHeadingLink . '</a>
	          </div>';
	        }
	        ?>            
			</div>
			<link rel="stylesheet" type="text/css" href="normalize.css">
		    <link href="https://fonts.googleapis.com/css?family=Raleway:500i" rel="stylesheet">
		    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

