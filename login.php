<?php

// This page processes the login form submission.
// The script now stores the HTTP_USER_AGENT value for added security.


require ('includes/login_functions.inc.php');
require ('includes/db_connect.php');

// If no session variable exists, the user can log in:
if (!isset($_SESSION['cust_id'])) {

			
	// Check if the form has been submitted:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Need two helper files:
		
		// Check the login:
		list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
		
		if ($check) { // OK!
			
			// Set the session data:
			session_start();
			$_SESSION['cust_id'] = $data['cust_id'];
			$_SESSION['cust_fname'] = $data['cust_fname'];
			
			// Store the HTTP_USER_AGENT:
			$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

			// Redirect:
			redirect_user('loggedin.php');
				
		} else { // Unsuccessful!

			// Assign $data to $errors for login_page.inc.php:
			$errors = $data;
		}
	}
}

else { // Inform the user that they are already logged in:

	redirect_user('loggedin.php');

}

	@mysqli_close($dbc); // Close the database connection.

// Create the page:
include ('includes/login_page.inc.php');
?>