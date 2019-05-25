<?php 

    $description = '<meta name="description" content="If you want to contact me fill out the form below. ">';
    $keywords = '<meta name="keywords" content="a contact person. " />';
    $author = '<meta name="author" content="Michael Joseph Campbell" />';
    $page_title = 'Michael Joseph Campbell | Contact';
    //This is the PHP include
    include ('includes/header.php');

    //This is some of the code that makes the form work
    $action=@$_REQUEST['action']; 
    if ($action=="")
        { 
?>
<h3>
    CONTACT
</h3>
<div class="contactbox">
    <form action="contact.php" method="POST" enctype="multipart/form-data" class="contactform">
    <input type="hidden" name="action" value="submit">
        <h4>Name:</h4>
        <br>
        <input type="text" name="name">
        <br>
        <br>
        <h4>Email:</h4>
        <br>
        <input type="text" name="email">
        <br>
        <br>
        <h4>Message:</h4>
        <br>
        <textarea name="message" rows="5" cols="43"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Send email">    
    </form>
    <div class="imthemap">
        <div id="googleMap">
        </div>
        <div class="location">
            <h5>
                Brandon, MB Canada
            </h5>
        </div>
    </div>
</div>
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
        $subject="Message sent using your contact form on your portfolio"; 
        mail("michael.campbell14@gmail.com", $subject, $message, $from); 
        echo "<p class='emailsent'>Your email has been sent!<br>I'll get back to you as soon as possible!</p>"; 
        } 
    }

    //This the PHP include for the footer
    include ('includes/foot.php');

?>
