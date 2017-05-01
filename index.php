<?php 
include("inc/event-data.php");
include("inc/news-data.php");
include("inc/functions.php");
	
$pageTitle = "Home";
$pageHeading = "Nintendo Sixty Funk";
$pageHeadingLink = "Book a Gig";
$pageHeadingLinkUrl = "contact.php";

include('inc/header.php'); 
?>	
			
			<!-- Body -->
			<div class="main-content">
				
				<div class="intro">
					<h1 class="intro-header">Intro</h1>
					<p>Nintendo Sixty Funk is a 4 member band based in the Holland/Chicago-land area playing a variety of covers, from the 80's - 2000's. The band originated in the summer of 2015, and has been playing Bars, Restaurants, Weddings, Receptions, Parties and church services ever since! Book NSF today!.</p>
				</div>
				<div class="main-col">
					<h2 id="first-col-header">News</h2>
					<?php 
						$article = array_news_category($news);
						$i = 0;
			            foreach ($article as $id) {
			                echo get_news_html($id,$news[$id]);
			                $i++;
			                if($i==3) break;
			            }			            
		            ?>
<!--
					<h4></h4>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
			        
			        <h2 class="main-col-header">News</h2>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
					<p>Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is... ashes Then you have my permission to die.</p>
-->
			        
			        
				</div>
				
				<!-- 	Right Sidebar	 -->
				<div class="side-col">
					<h3 class="side-col-header">Events</h3>	
					<?php 
						$events = array_event_category($event);
						$i = 0;
			            foreach ($events as $id) {
			                echo get_event_html($id,$event[$id]);
			                $i++;
			                if($i==3) break;
			            }			            
		            ?>       
<!--
					<h5 class="event-header">Ice-T</h5>		
					<ul>
						<li class="place"><a href="#">Downtown Holland</a></li>
						<li class="date"><a href="#">Thursday March 5</a></li>
						<li class="time"><a href="#">6:30pm</a></li>
					</ul>
					<div class="break">
			          <hr>
			        </div>
					<h5 class="event-header">80's Ladies</h5>		
					<ul>
						<li class="place"><a href="#">Silverdome</a></li>
						<li class="date"><a href="#">Saturday April 7</a></li>
						<li class="time"><a href="#">8:00pm</a></li>
					</ul>
					<div class="break">
			          <hr>
			        </div>
					<h5 class="event-header">Omniwife</h5>		
					<ul>
						<li class="place"><a href="#">The Yard</a></li>
						<li class="date"><a href="#">Sunday May 9</a></li>
						<li class="time"><a href="#">12:00pm</a></li>
					</ul>
					<div class="break">
			          <hr>
			        </div>
-->
					<!-- 	Soundcloud Module	 -->
					<div class="soundcloud">
					<iframe width="90%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/197732688&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> 
					</div>
				</div>
			</div>
<?php include('inc/footer.php'); ?>	