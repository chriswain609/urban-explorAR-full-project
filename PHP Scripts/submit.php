<?php

    // info for connection to database
    $host = 'mydbinstance.coqtahs85ojs.eu-west-2.rds.amazonaws.com';
    $user = 'chriswain';
    $password = 'guitarisway697';
    $name = 'TreasureHunts';

	$nickname = $_POST['nickname'];
	$time = $_POST['time'];
	$score = $_POST['score'];
	$treasure_hunt_id = $_POST['treasure_hunt_id'];

	$connection = new mysqli($host, $user, $password, $name);

    // check connection to database
    if ($connection->connect_errno) {
        printf("Failed to connect to database");
        exit();
    }

    // query to add record to database
	$query = "insert into `scores` (nickname, time, score, treasure_hunt_id) value ('".$nickname."','".$time."','".$score."','".$treasure_hunt_id."')";
    
	$result = mysqli_query($connection,$query);

?>
