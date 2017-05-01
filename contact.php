<?php 
include("inc/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $details == "") {
        $error_message = "Please fill in the required fields: Name, Email, Details";
    }
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Bad form input";
    }
    
    require("inc/phpmailer/class.phpmailer.php");
    require("inc/phpmailer/class.smtp.php");
    
    $mail = new PHPMailer;
    
    if (!isset($error_message) && !$mail->ValidateAddress($email)) {
        $error_message = "Invalid Email Address";
    }
     
    if (!isset($error_message)) {
        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Details " . $details . "\n";
    }
}
	
$pageTitle = "Contact";
$pageHeading = "Bring the Funk to You";

include('inc/header.php'); 
?>

<div class="main-content">
	<div class="single-col">
		<h2 class="single-col-header">Wanna see what all the buzz is about?</h2>
					<div class="intro">
					  <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "<p>Thanks for the email! We&rsquo;ll be with you shortly!</p>";
				        } else {
				            if (isset($error_message)) {
				                echo "<p class='message'>".$error_message . "</p>";
				            } else {
				                echo "<p>We always have a good time when we play and we promise anyone who comes will too. If you would like to book us please fill out this form below with for contact info and we will get right back to you to see if we can make it happen!</p>";
			            }
			        ?>
			        </div>	        
				    <div id="contact">
						<form method="post" action="https://formspree.io/skyler.n.adams@gmail.com">
				           <span class="form-block"><label for="location_name">Location Name</label>
				           <input type="text" id="location_name" name="location_name" value="<?php if (isset($location_name)) { echo $location_name; } ?>" /></span>	
				           <span class="form-block"><label for="location_name">Location Address</label>
				           <input type="text" id="location_name" name="location_name" value="<?php if (isset($location_name)) { echo $location_name; } ?>" /></span>	
				           <span class="form-block"><label for="contact_name">Contact Name</label>
				           <input type="text" id="contact_name" name="contact_name" value="<?php if (isset($contact_name)) { echo $contact_name; } ?>" />			            </span>		            
				           <span class="form-block"><label for="email">Contact Email</label>
				           <input type="text" id="email" name="_replyto" value="<?php if (isset($email)) { echo $email; } ?>" /></span>
				           <span class="form-block"><label for="date">Desired Performance Date and Time</label>
				           <input type="text" id="date" name="date" value="<?php if (isset($date)) { echo $date; } ?>" /></span>	
					       <span class="form-block"><label for="name">Venue Details</label>
						   <textarea name="details" id="details"><?php if (isset($details)) { echo htmlspecialchars($_POST["details"]); } ?></textarea></span>
						   <input type="hidden" name="_next" value="contact.php?status=thanks" />
				            <div style="display:none">
				                <label for="address">Address</label>
				                <input type="text" id="address" name="address" />
				                <p>Please leave this field blank</p>
				            </div>
				            <input type="submit" value="Send" />
				        </form>		
			        </div>		
				<?php } ?>
	</div>
</div>

<?php include('inc/footer.php'); ?>		