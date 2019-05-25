<?php session_start();// Start the session.
$page_title = 'F.C.Vidya Contact';
include ('includes/header.php'); 

//This is some of the code that makes the form work
    $action=@$_REQUEST['action']; 
    if ($action=="")
        { 

?>

<h1 class="dasAwesomeh1">Contact Us</h1>
<form class="contactForm" action="contact.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="action" value="submit">
	<input type="text" name="name" id="fullName" placeholder="Full Name" required><br />
	<input type="email" name="email" id="email" placeholder="Your Email address"required><br />
	<textarea name="message" id="message" placeholder="Message..." rows="8" required></textarea><br />
	<button type="reset" id="reset" placeholder="Reset">Reset</button>
	<button type="submit" id="submit" placeholder="Submit">Submit</button>
</form>

<?php 

//This is the rest of the code that makes the form work
    }  
else
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form on FCVidya"; 
        mail("campbellm7293@interactive-media-arts.ca", $subject, $message, $from); 
        echo "<p class='emailsent'>Your email has been sent!<br>We'll get back to you as soon as possible!</p>"; 
        } 
    }

include ('includes/footer.php'); ?>