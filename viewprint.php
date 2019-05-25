<?php # Script 19.7 - view_print.php
// This page displays the details for a particular print.

$row = FALSE; // Assume nothing!

if (isset($_GET['pid']) && filter_var($_GET['pid'], FILTER_VALIDATE_INT, array('min_range' => 1)) ) { // Make sure there's a print ID!

	$pid = $_GET['pid'];
	
	// Get the print info:
	require ('includes/db_connect.php'); // Connect to the database.
	$q = "SELECT CONCAT_WS(' ', dev_name) AS developer, prod_name, price, prod_decs, image_name FROM developer, products WHERE developer.dev_id=product.dev_id AND product.prod_id=$pid";
	$r = mysqli_query ($dbc, $q);
	if (mysqli_num_rows($r) == 1) { // Good to go!

		// Fetch the information:
		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	
		// Start the HTML page:
		$page_title = $row['prod_name'];
	
		// Display a header:
		echo "<div align=\"center\">
		<b>{$row['prod_name']}</b> by 
		{$row['developer']}<br />";

		// Print the size or a default message:

		echo "<br />\${$row['price']} 
		<a href=\"addcart.php?pid=$pid\">Add to Cart</a>
		</div><br />";
	
		// Get the image information and display the image:
		if ($image = @getimagesize ("images/uploads/$pid")) {
			echo "<div align=\"center\"><img src=\"show_image.php?image=$pid&name=" . urlencode($row['image_name']) . "\" $image[3] alt=\"{$row['prod_name']}\" /></div>\n";	
		} else {
			echo "<div align=\"center\">No image available.</div>\n"; 
		}
		
		// Add the description or a default message:
		echo '<p align="center">' . ((is_null($row['prod_decs'])) ? '(No description available)' : $row['description']) . '</p>';
	
	} // End of the mysqli_num_rows() IF.
	
	mysqli_close($dbc);

} // End of $_GET['pid'] IF.

if (!$row) { // Show an error message.
	$page_title = 'Error';
	include ('includes/header.html');
	echo '<div align="center">This page has been accessed in error!</div>';
}

// Complete the page:
?>