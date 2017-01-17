<?php
 
if(isset($_POST['email'])) {
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "justinramedia@gmail.com";
 
    $email_subject = "Contact Form Submission";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
  
        !isset($_POST['email']) ||
 
        !isset($_POST['subject']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['name']; // required
  
    $email_from = $_POST['email']; // required
 
    $subject = $_POST['subject']; // not required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
  
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- Success HTML -->
 
 
 
<!DOCTYPE HTML>
<html>
	<head>
		<title>Justin Ramedia :: Creative Director | Web Developer | UX Evalgelist</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
                    <h1><a href="index.html">Justin Ramedia</a> Design | Dev | UX</h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="#" class="icon fa-angle-down">Work</a>
                                <ul>
                                    <li><a href="web.html">Web</a></li>
                                    <li><a href="leadership.html">Analog</a></li>
                                    <li><a href="strategy.html">Strategy</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Thanks!</h2>
						<p>Your message has been sent. </p>
					</header>
					<div class="box">
						While you're waiting, feel free to browse through the UX articles that we've been producing recently: https://medium.com/@justinramedia
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
                        <li><a href="https://twitter.com/justinramedia" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/justinramedia" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.linkedin.com/in/justinramedia" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        <li><a href="https://medium.com/@justinramedia" target="_blank" class="icon fa-medium"><span class="label">Medium</span></a></li>
                        <li><a href="https://plus.google.com/u/0/+JustinRamedia" target="_blank" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; Justin Ramedia. All rights reserved.</li>
                    </ul>
				</footer>

		</div>
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-6588643-1', 'auto');
          ga('send', 'pageview');

        </script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html> 
 
 
<?php
 
}
 
?>