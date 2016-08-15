<?php 
include("inc/news-data.php");
include("inc/functions.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($news[$id])) {
        $item = $news[$id];
    }
}

if (!isset($item)) {
    header("location:news.php");
    exit;
}
	
$pageTitle = $item['title'];
$pageHeading = $item['title'];

include('inc/header.php'); 
?>

<div class="main-content">
	<div class="single-col">
		<?php $article = array_news_category($news);
	            if ($id) {
	                echo get_full_news_html($id,$news[$id]);
	            }
	        ?>
	</div>
</div>

<?php include('inc/footer.php'); ?>		