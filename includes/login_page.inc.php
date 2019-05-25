<?php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'F.C.Vidya Login';
Include ('includes/header.php');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1 class="dasAwesomeh1">Hey wait a minute...</h1>
	<p class="tryAgain">You may have forgotten to enter your:</p><p class="tryAgain">';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p class="tryAgain">Please try again.</p><br /><div class="blueLine"></div>';
}

// Display the form:
?><h1 class="dasAwesomeh1">Login</h1>

<form action="login.php" method="post" class="loginForm">
	<p>Please fill in the required fields below.</p>
	<p>*Email Address: <br><br><input type="text" name="email" size="20" maxlength="60" /> </p>
	<p>*Password: <br><br><input type="password" name="pass" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Login" id="loginButton"/></p>
</form>

<?php Include ('includes/footer.php'); ?>