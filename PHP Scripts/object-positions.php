<?php

// info for connection to database
$host = 'mydbinstance.coqtahs85ojs.eu-west-2.rds.amazonaws.com';
$user = 'chriswain';
$password = 'guitarisway697';
$name = 'TreasureHunts';

  $connection = new mysqli($host, $user, $password, $name);

    // check connection to database
  if ($connection->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }

    // get data from database and store in array
  $result = $connection->query("SELECT * FROM object_positions");
  $data = array();
  while ( $row = $result->fetch_assoc())  {
	   $data[]=$row;
  }

    // print data in json format
 echo json_encode($data);

?>
