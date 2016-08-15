<?php 
include("inc/media-data.php");
include("inc/functions.php");
	
$pageTitle = "Media";
$pageHeading = "Media";

include('inc/header.php'); 
?>			
			<!-- Body -->
			<div class="main-content">
				<div class="intro">
					<h1 class="intro-header">Media</h1>
					<p>Check out some of our music and videos updated regularly!</p>
				</div>
				<div class="single-col centered">
					<?php 
						$mediaPost = array_media_category($media);
			            foreach ($mediaPost as $id) {
			                echo get_media_html($id,$media[$id]);
			            }			            
		            ?>
					<div class="soundcloud">
						<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/197732688&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> 
					</div>
				</div>
			</div>
<?php include('inc/footer.php'); ?>		