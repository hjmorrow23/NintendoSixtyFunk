<?php 
include("inc/news-data.php");
include("inc/functions.php");
	
$pageTitle = "News";
$pageHeading = "The Haps";

include('inc/header.php'); 
?>

<div class="main-content">
	<div class="single-col">
		<?php $article = array_news_category($news);
	            foreach ($article as $id) {
	                echo get_news_html($id,$news[$id]);
	            }
	        ?>
	</div>
</div>

<?php include('inc/footer.php'); ?>		