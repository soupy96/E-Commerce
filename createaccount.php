<?php
	session_start();
	$page_title = 'FCVidya Create Account';
	//This is the PHP include
	include ('includes/header.php');

	// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('includes/db_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['cust_fname'])) {
		$errors[] = 'You forgot to enter your <span class="ree">first name</span>.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['cust_fname']));
	}

	// Check for a last name:
	if (empty($_POST['cust_lname'])) {
		$errors[] = 'You forgot to enter your <span class="ree">last name</span>.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['cust_lname']));
	}

	// Check for email:
	if (empty($_POST['cust_email'])) {
		$errors[] = 'You need a valid <span class="ree">Email</span> to register.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['cust_email']));
	}

	// Check for an address:
	if (empty($_POST['cust_address'])) {
		$errors[] = 'You forgot to enter your <span class="ree">address</span>.';
	} else {
		$ad = mysqli_real_escape_string($dbc, trim($_POST['cust_address']));
	}

	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your <span class="ree">password did not match</span> the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your <span class="ree">password</span>.';
	}


	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$que = "INSERT INTO customers (cust_fname, cust_lname, cust_email, cust_address, cust_pass) VALUES ('$fn', '$ln', '$e', '$ad', SHA1('$p'))";		
		$ran = @mysqli_query ($dbc, $que); // Run the query.
		if ($ran) { // If it ran OK.
		
			// Print a message:
			echo '<h1 class="dasAwesomeh1">Thank you!</h1>
		<p class="error" style="color:white;font-family:Source Sans Pro;font-size:2em;padding:2%;">You are now registered.</p><p><br /></p>';	
		include ('includes/footer.php');
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1 class="dasAwesomeh1">System Error</h1>
			<p class="error" style="color:white;font-family:Source Sans Pro;font-size:2em;padding:2%;">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
		} // End of if ($ran) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<h1 class="dasAwesomeh1">Error!</h1>
		<p class="error" style="color:white;font-family:Source Sans Pro;font-size:2em;padding:2%;">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p class="error" style="color:white;font-family:Source Sans Pro;font-size:2em;padding:2%;">Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.

?>

<h1 class="dasAwesomeh1">Create Account</h1>
<div class="blueLine"></div>
<form action="createaccount.php" method="post" class="createaccount">
	<input type="text" name="cust_fname" size="50" maxlength="25" value="<?php if (isset($_POST['cust_fname'])) echo $_POST['cust_fname']; ?>" placeholder="First Name"/><br />
	<input type="text" name="cust_lname" size="50" maxlength="25" value="<?php if (isset($_POST['cust_lname'])) echo $_POST['cust_lname']; ?>" placeholder="Last Name"/><br />
	<input type="text" name="cust_email" size="50" maxlength="50" value="<?php if (isset($_POST['cust_email'])) echo $_POST['cust_email']; ?>"  placeholder="Email"/><br />
	<input type="text" name="cust_address" size="50" maxlength="50" value="<?php if (isset($_POST['cust_address'])) echo $_POST['cust_address']; ?>"  placeholder="Your Address"/><br />
	<input type="password" name="pass1" size="50" maxlength="30" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" placeholder="Password"/><br />
	<input type="password" name="pass2" size="50" maxlength="30" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" placeholder="Password confirmation"/>
	<br /><p class="error">* All input fields are required</p>
	<p><input type="submit" name="submit" value="Create Account" id="submitButton"/><input type="reset" name="reset" value="Reset" id="resetButton"/></p>
</form>

<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>