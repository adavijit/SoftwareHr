<?php
	/* Database connection settings */
  require 'dbconnect.php';
  $year_s = $_POST['year_s'];
  //$month_s= $_POST['month_s'];
	$mysqli = new mysqli($server_name,$userName,$password,$databaseName) or die($mysqli->error);

	$data1 = '';

	//query to get data from the table
	$sql = "SELECT * FROM `dashboard_graph` WHERE year_s='$year_s' ORDER BY month_s ASC ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {
		$data1 = $data1 . '"'. $row['emp_count'].'",';
	}

    $data1 = trim($data1,",");
    echo $data1;

?>