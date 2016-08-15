<?php 
include("inc/profile-data.php");
include("inc/functions.php");
	
$pageTitle = "Squad";
$pageHeading = "Squad";

include('inc/header.php'); 
?>				
			<!-- Body -->
			<div class="main-content">
				<div class="single-col">
					<?php $profiles = array_profile_category($profile);
		            foreach ($profiles as $id) {
		                echo get_profile_html($id,$profile[$id]);
		            }
		            ?>
<!--
					<div class="profile" id="skyler">
						<h2 class="main-col-header">Skyler</h2> 
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p>
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div>
					<div class="break">
			          <hr>
			        </div>
					<div class="profile">
						<h2 class="main-col-header">Nikki</h2> 
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p>
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div>
					<div class="break">
			          <hr>
			        </div>
					<div class="profile">
						<h2 class="main-col-header">TJ</h2>
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p> 
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div>
					<div class="break">
			          <hr>
			        </div>
					<div class="profile">
						<h2 class="main-col-header">Doug</h2>
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p>
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div>
					<div class="break">
			          <hr>
			        </div>
					<div class="profile">
						<h2 class="main-col-header">Emily</h2>
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p> 
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div> 
					<div class="break">
			          <hr>
			        </div>
					<div class="profile">
						<h2 class="main-col-header">James</h2>
						<div class="image-wrapper"><img src="http://lorempixel.com/400/200/sports/1/"></div>
						<div class="description">
							<p>Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.</p> 
							<p>I know why you choose to have your little, ahem... group-therapy sessions in broad daylight. I know why you're afraid to go out at night. The Batman.</p>
						</div>
					</div>        
-->
				</div>
			</div>
<?php include('inc/footer.php'); ?>			