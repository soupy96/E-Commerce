<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add a Print</title>
</head>
<body>
<?php # Script 19.2 - add_print.php
// This page allows the administrator to add a print (product).

require ('../includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
	
	// Validate the incoming data...
	$errors = array();

	// Check for a print name:
	if (!empty($_POST['prod_name'])) {
		$pn = trim($_POST['prod_name']);
	} else {
		$errors[] = 'Please enter the print\'s name!';
	}
	
	// Check for an image:
	if (is_uploaded_file ($_FILES['image']['tmp_name'])) {

		// Create a temporary file name:
		$temp = '../images/uploads/' . md5($_FILES['image']['name']);
	
		// Move the file over:
		if (move_uploaded_file($_FILES['image']['tmp_name'], $temp)) {

			echo '<p>The file has been uploaded!</p>';
	
			// Set the $i variable to the image's name:
			$i = $_FILES['image']['name'];
	
		} else { // Couldn't move the file over.
			$errors[] = 'The file could not be moved.';
			$temp = $_FILES['image']['tmp_name'];
		}

	} else { // No uploaded file.
		$errors[] = 'No file was uploaded.';
		$temp = NULL;
	}

	// Check for a price:
	if (is_numeric($_POST['price']) && ($_POST['price'] > 0)) {
		$p = (float) $_POST['price'];
	} else {
		$errors[] = 'Please enter the print\'s price!';
	}

	// Check for a description (not required):
	$pd = (!empty($_POST['prod_decs'])) ? trim($_POST['prod_decs']) : NULL;
	
	// Validate the artist...
	if ( isset($_POST['developer']) && filter_var($_POST['developer'], FILTER_VALIDATE_INT, array('min_range' => 1))  ) {
		$di = $_POST['developer'];
	} else { // No artist selected.
		$errors[] = 'Please select the print\'s artist!';
	}
	
	if (empty($errors)) { // If everything's OK.

		// Add the print to the database:
		$q = 'INSERT INTO products (dev_id, prod_name, price, prod_decs, image_name) VALUES (?, ?, ?, ?, ?)';
		$stmt = mysqli_prepare($dbc, $q);
		mysqli_stmt_bind_param($stmt, 'isdss', $di, $pn, $p, $pd, $i);
		mysqli_stmt_execute($stmt);
		
		// Check the results...
		if (mysqli_stmt_affected_rows($stmt) == 1) {

			// Print a message:
			echo '<p>The print has been added.</p>';
	
			// Rename the image:
			$id = mysqli_stmt_insert_id($stmt); // Get the print ID.
			rename ($temp, "../images/uploads/$id");
	
			// Clear $_POST:
			$_POST = array();
	
		} else { // Error!
			echo '<p style="font-weight: bold; color: #C00">Your submission could not be processed due to a system error.</p>'; 
		}
		
		mysqli_stmt_close($stmt);
		
	} // End of $errors IF.
	
	// Delete the uploaded file if it still exists:
	if ( isset($temp) && file_exists ($temp) && is_file($temp) ) {
		unlink ($temp);
	}
	
} // End of the submission IF.

// Check for any errors and print them:
if ( !empty($errors) && is_array($errors) ) {
	echo '<h1>Error!</h1>
	<p style="font-weight: bold; color: #C00">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo 'Please reselect the print image and try again.</p>';
}

// Display the form...
?>
<h1>Add a Print</h1>
<form enctype="multipart/form-data" action="add_print.php" method="post">

	<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
	
	<fieldset><legend>Fill out the form to add a print to the catalog:</legend>
	
	<p><b>Print Name:</b> <input type="text" name="prod_name" size="30" maxlength="60" value="<?php if (isset($_POST['prod_name'])) echo htmlspecialchars($_POST['prod_name']); ?>" /></p>
	
	<p><b>Image:</b> <input type="file" name="image" /></p>
	
	<p><b>Artist:</b> 
	<select name="developer"><option>Select One</option>
	<?php // Retrieve all the artists and add to the pull-down menu.
	$q = "SELECT dev_id, CONCAT_WS(' ', dev_name) FROM developer ORDER BY dev_name ASC";		
	$r = mysqli_query ($dbc, $q);
	if (mysqli_num_rows($r) > 0) {
		while ($row = mysqli_fetch_array ($r, MYSQLI_NUM)) {
			echo "<option value=\"$row[0]\"";
			// Check for stickyness:
			if (isset($_POST['developer']) && ($_POST['developer'] == $row[0]) ) echo ' selected="selected"';
			echo ">$row[1]</option>\n";
		}
	} else {
		echo '<option>Please add a new artist first.</option>';
	}
	mysqli_close($dbc); // Close the database connection.
	?>
	</select></p>
	
	<p><b>Price:</b> <input type="text" name="price" size="10" maxlength="10" value="<?php if (isset($_POST['price'])) echo $_POST['price']; ?>" /> <small>Do not include the dollar sign or commas.</small></p>
	
	<p><b>Description:</b> <textarea name="prod_decs" cols="40" rows="5"><?php if (isset($_POST['prod_decs'])) echo $_POST['prod_decs']; ?></textarea> (optional)</p>
	
	</fieldset>
		
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>

</form>

</body>
</html>