<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'PS4 Games';
	//This is the PHP include
	include ('includes/header.php');
	require ('includes/db_connect.php');

// Default query for this page:
$q = "SELECT * FROM products WHERE dev_name='Microsoft' ";

// Are we looking at a particular artist?
if (isset($_GET['aid']) && filter_var($_GET['aid'], FILTER_VALIDATE_INT, array('min_range' => 1))  ) {
	// Overwrite the query:
	$q = "SELECT prod_name, price FROM products ";
}

// Create the table head:
echo '<table border="0" width="90%" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td align="left" width="20%" style="color:white;font-family:Source Sans Pro;font-size:2em"><b>Product Name</b></td>
		<td align="right" width="20%" style="color:white;font-family:Source Sans Pro;font-size:2em"><b>Price</b></td>
	</tr>';

// Display all the prints, linked to URLs:
$r = mysqli_query ($dbc, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

	// Display each record:
	echo "\t<tr>
		<td align=\"left\"><a href=\"unchartedcollection.php?pid={$row['prod_id']}\">{$row['prod_name']}</td>
		<td align=\"right\" style='color:white;font-family:Source Sans Pro;'>\${$row['price']}</td>
	</tr>\n";

} // End of while loop.

echo '</table>';
mysqli_close($dbc);

	//This the PHP include for the footer
	include ('includes/footer.php');
?>