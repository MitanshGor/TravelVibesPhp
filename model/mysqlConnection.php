<?php
// Create connection

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b2173ddf4f8089:ccaf2362@us-cdbr-east-04.cleardb.com/heroku_b981d50df0ab52e?reconnect=true"));
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