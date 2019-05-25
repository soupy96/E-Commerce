<?php
// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
//DEFINE ('DB_USER', 'db109715_stud1');
//DEFINE ('DB_PASSWORD', 'SEuMquYf5Yjwt7aq');
//DEFINE ('DB_HOST', 'internal-db.s109715.gridserver.com');
//DEFINE ('DB_NAME', 'db109715_dennis');


DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'rootpass');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'fcvidya');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');