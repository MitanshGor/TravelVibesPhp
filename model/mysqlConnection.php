<!-- < ?php
// Create connection

//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("mysql://b2173ddf4f8089:ccaf2362@us-cdbr-east-04.cleardb.com/heroku_b981d50df0ab52e?reconnect=true"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;


// $con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$con=mysqli_connect("localhost","root","root","travelvibes"); 
// $con=mysqli_connect("us-cdbr-east-04.cleardb.com","b2173ddf4f8089","ccaf2362","heroku_b981d50df0ab52e"); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
    // echo "<h2>MYSQL TravelVibes Database Connected !!!</h2>";
}
?>  -->



<?php
  // PHP Data Objects(PDO) Sample Code:
  try {
      $conn = new PDO("sqlsrv:server = tcp:travelvibes.database.windows.net,1433; Database = travelvibes", "Indus_CC_travel", "mitansh@2002");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
      print("Error connecting to SQL Server.");
      die(print_r($e));
  }

  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "Indus_CC_travel", "pwd" => "mitansh@2002", "Database" => "travelvibes", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:travelvibes.database.windows.net,1433";
  $con = sqlsrv_connect($serverName, $connectionInfo);
?>