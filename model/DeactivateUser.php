<?php

    include 'mysqlConnection.php';
    // include '../constants/constants.php';
    $userTable="user";

    $sql = "update ".$userTable." set isActive=0 where userid=".$_GET['userId'].";";
    $conSql=mysqli_query($con,$sql);


    //$exeQuery = mysqli_query($queryContents);
    if(!$conSql){

        // header('Location: ' .'../AdminSection/viewHotelDetails.php', true, $permanent ? 301 : 302);
        // exit(); 
        echo "<script>";
        echo "alert('No Hotels Available !!');";
        echo "window.location.replace('../AdminSection/viewHotelDetails.php')"; //Redirects the user with JavaScript
        echo "</script>";
        die();
    }
    else{

        // header('Location: ' .'../view/AdminSection/viewUserDetail.php', true, $permanent ? 301 : 302);
        // exit();  
            
        echo "<script>";
        echo "alert('No Hotels Available !!');";
        echo "window.location.replace('../view/AdminSection/viewUserDetail.php')"; //Redirects the user with JavaScript
        echo "</script>";
        die();
    
    }
    
    
?>