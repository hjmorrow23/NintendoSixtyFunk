<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Nintendo Sixty-Funk</title>
    <meta charset="UTF-8">
    
    <!-- Information that will display with description> -->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Stylesheets and Resets -->
    
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
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

