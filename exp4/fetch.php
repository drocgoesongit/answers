
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");

// Initialize variable for database credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'wclab';

//Create database connection
  $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

//Check connection was successful
  if ($dblink->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }

//Fetch 3 rows from actor table
  $result = $dblink->query("SELECT * FROM books LIMIT 3");

//Initialize array variable
  $dbdata = array();

//Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }
  
//Print array in JSON format
 echo json_encode($dbdata);
 ?>