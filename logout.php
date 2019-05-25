<?php
// This page lets the user logout.
// This version uses sessions.

session_start(); // Access the existing session.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['cust_id'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	
	
} else { // Cancel the session:

	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); // Destroy the cookie.

}

// Set the page title and include the HTML header:
$page_title = 'Logged Out of FC Vidya!';
include ('includes/header.php');

// Print a customized message:
echo '<h1 class="dasAwesomeh1">Logged Out!</h1>
<p class="loggedout">You are now logged out!</p>';

include ('includes/footer.php');
?>