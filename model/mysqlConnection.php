<?php
// Create connection

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;


$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
// $con=mysqli_connect("localhost","root","root","travelvibes"); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
    // echo "<h2>MYSQL TravelVibes Database Connected !!!</h2>";
}
?> 