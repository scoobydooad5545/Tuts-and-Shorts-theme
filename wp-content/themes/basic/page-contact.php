<?php get_header();
/*
Template Name: Contact Page
*/
?>
<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$from = 'Demo Contact Form'; 
$to = 'example@domain.com'; 
$subject = 'Message from Contact Demo ';
 
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if (!$_POST['first_name last_name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}

?>
<?php 
//add the recipient's address here
$myemail = 'alyssa.davis@viscomcenter.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received, and we will get                 back to you as soon as possible. Here is what you submitted:</span><br><br>";
echo "<stong>Name:</strong> ".$name."<br>";   
echo "<stong>Email:</strong> ".$email."<br>"; 
echo "<stong>Message:</strong> ".$message."<br>";

//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
  	<div class="col-md-9">

		<h2>Message me</h2>
		<form role="form" action="" method="POST">
		  
		  <div class="form-group">
		    <label for="first_name">First Name</label>
		    <input type="text" class="form-control" id="first_name" name="first_name">
		  </div>
		  
		  <div class="form-group">
		    <label for="last_name">Last Name</label>
		    <input type="text" class="form-control" id="last_name" name="last_name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="subject">Subject</label>
		    <input type="text" class="form-control" id="subject" name="subject">
		  </div>

		  <div class="form-group">
		    <label for="message">Message</label>
		    <textarea class="form-control" id="message" name="message" rows="10"></textarea>
		  </div>
		  <div class="form-group">
		  	<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		  </div>
		</form>
	</div>
</div>
	


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

