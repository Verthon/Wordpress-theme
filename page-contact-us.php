<?php get_header('contact-us'); ?>
<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form';
		$to = 'tanggun@wp.pl';
		$subject = 'Message from photog ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>


<main class="container">

<div class="row">
 <div class="col-md-4 col-sm-12 col-xs-12 text-center padding-top"><a class="btn-nav" href="#Submit-photo">Submit photo</a></div>
 <div class="col-md-4 col-sm-12 col-xs-12 text-center padding-top"><a class="btn-nav" href="#Leave-message">Leave message</a></div>
 <div class="col-md-4 col-sm-12 col-xs-12 text-center padding-top"><a class="btn-nav" href="#Buy-poster">Buy poster</a></div>
</div>

<div class="row padding-top">

 <div class="container padding-top col-md-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
   <div class="panel panel-default Submit-photo">
  <div class="panel-heading">
    <h3 class="panel-title text-center" id="Submit-photo">Submit photo</h3>
  </div>
  <div class="panel-body">
    <?php echo do_shortcode( '[contact-form-7 id="279" title="Submit photo"]' ); ?>
  </div>
 </div>
</div>

</div> <!--end of first out of three, row of forms... -->

<div class="row padding-top">
 <div class="container padding-top col-md-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
   <div class="panel panel-default Leave-message">
  <div class="panel-heading">
    <h3 class="panel-title text-center" id="Leave-message">Leave message</h3>
  </div>
  <div class="panel-body">
    <?php echo do_shortcode( '[contact-form-7 id="278" title="Leave message"]' ); ?>
  </div><!-- end of panel-body -->
  <div class="panel-footer">example@gmail.ju</div>
 </div>
</div>

</div> <!--end of second out of three, row of forms... -->



<div class="row padding-top">

 <div class="container padding-top col-md-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
   <div class="panel panel-default Buy-poster">
  <div class="panel-heading">
    <h3 class="panel-title text-center" id="Buy-poster">Buy poster</h3>
  </div>
  <div class="panel-body">
    <?php echo do_shortcode( '[contact-form-7 id="274" title="Buy poster"]' ); ?>
  </div><!-- end of panel-body -->
  <div class="panel-footer">example@gmail.ju</div>
 </div>
</div>

</div> <!--end of first out of three, row of forms... -->


</main>

<?php get_footer('contact-us'); ?>
