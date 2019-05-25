<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add an Artist</title>
</head>
<body>
<?php # Script 19.1 - add_artist.php
// This page allows the administrator to add an artist.

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	// Check for a last_name...
	if (!empty($_POST['dev_name'])) {
		
		$dn = trim($_POST['dev_name']);
		
		// Add the artist to the database:
		require ('../includes/db_connect.php');
		$q = 'INSERT INTO developer (dev_name) VALUES (?)';
		$stmt = mysqli_prepare($dbc, $q);
		mysqli_stmt_bind_param($stmt, 's', $dn);
		mysqli_stmt_execute($stmt);
		
		// Check the results....
		if (mysqli_stmt_affected_rows($stmt) == 1) {
			echo '<p>The artist has been added.</p>';
			$_POST = array();
		} else { // Error!
			$error = 'The new artist could not be added to the database!';
		}
		
		// Close this prepared statement:
		mysqli_stmt_close($stmt);
		mysqli_close($dbc); // Close the database connection.
		
	} else { // No last name value.
		$error = 'Please enter the artist\'s name!';
	}
	
} // End of the submission IF.

// Check for an error and print it:
if (isset($error)) {
	echo '<h1>Error!</h1>
	<p style="font-weight: bold; color: #C00">' . $error . ' Please try again.</p>';
}

// Display the form...
?>
<h1>Add a Print</h1>
<form action="add_artist.php" method="post">
	
	<fieldset><legend>Fill out the form to add an artist:</legend>
	
	<p><b>Dev Name:</b> <input type="text" name="dev_name" size="10" maxlength="40" value="<?php if (isset($_POST['dev_name'])) echo $_POST['dev_name']; ?>" /></p>
	
	</fieldset>
		
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>

</form>

</body>
</html>