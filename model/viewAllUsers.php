
<?php

include 'mysqlConnection.php';
// include '../constants/constants.php';
$userTable="user";

$sql = "select * from ".$userTable." where userid <>1;";
$conSql=mysqli_query($con,$sql);


//$exeQuery = mysqli_query($queryContents);
if(mysqli_num_rows($conSql)<0){
    echo "<script>";
    echo "alert('No Hotels Available !!');";
    echo "window.location.replace('../AdminSection/viewHotelDetails.php')"; //Redirects the user with JavaScript
    echo "</script>";
    die();
}


?>