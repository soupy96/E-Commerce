<?php # Script 19.7 - view_print.php
// This page displays the details for a particular print.
session_start(); // Start the session.

$row = FALSE; // Assume nothing!

if (isset($_GET['pid']) && filter_var($_GET['pid'], FILTER_VALIDATE_INT, array('min_range' => 1)) ) { // Make sure there's a print ID!

	$pid = $_GET['pid'];
	// Get the print info:
	require ('includes/db_connect.php'); // Connect to the database.
	$q = "SELECT prod_name, dev_name, price, prod_decs, image_name FROM products WHERE prod_id=$pid";
	$r = mysqli_query ($dbc, $q);
	if (mysqli_num_rows($r) == 1) { // Good to go!

		// Fetch the information:
		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	
		// Start the HTML page:
		$page_title = 'Batman Arkham Knight | '. $row['prod_name'];
		include ('includes/header.php');
	
		// Display a header:
		echo "<div align=\"center\">
		<b style='color:white;font-family:Source Sans Pro;font-size:2em'>{$row['prod_name']}</b> <br><b style='color:white;font-family:Source Sans Pro;font-size:1.5em'>by 
		{$row['dev_name']}<br /></b>";

		// Print the size or a default message:

		echo "<br /><b style='color:white;font-family:Source Sans Pro;font-size:2em;margin-bottom:2%;'>\${$row['price']} <br></b>
		<a href=\"addcart.php?pid=$pid\" style='color:white;font-family:Source Sans Pro;font-size:2em;text-decoration:underline;margin-top:2%;'>Add to Cart</a>
		</div><br />";
	
		// Get the image information and display the image:
		if ($image = @getimagesize ("images/uploads/$pid")) {
			echo "<div align=\"center\"><img src=\"showimage.php?image=$pid&name=" . urlencode($row['image_name']) . "\" $image[3] alt=\"{$row['prod_name']}\" /></div>\n";	
		} else {
			echo "<div align=\"center\">No image available.</div>\n"; 
		}
		
		// Add the description or a default message:
		echo '<p style="color:white;font-family:Source Sans Pro;font-size:1.5em;padding:2%;" align="center">' . ((is_null($row['prod_decs'])) ? '(No description available)' : $row['prod_decs']) . '</p>';
	
	} // End of the mysqli_num_rows() IF.
	
	mysqli_close($dbc);

} // End of $_GET['pid'] IF.

if (!$row) { // Show an error message.
	$page_title = 'Error';
	echo '<div align="center">This page has been accessed in error!</div>';
}

// Complete the page:
	//This the PHP include for the footer
	include ('includes/footer.php');
?>