<div hidden style="visibility:hidden; display:none;">
    <?php
        
    include 'mysqlConnection.php';
     include '../constants/constants.php';
    $hotelTable="hotel";

    $sql = "update  ".$hotelTable." set deleteHotel=1 where hotelid=".$_GET['hotelid'].";";
    $conSql=mysqli_query($con,$sql);


    if (mysqli_query($con,$sql)) {

                // header('Location: ' .'../view/AdminSection/viewHotels.php', true, $permanent ? 301 : 302);
                // exit();  
                echo "<script>";
                echo "alert('Hotel deleted !!');";
                echo "window.location.replace('../view/AdminSection/viewHotels.php')"; //Redirects the user with JavaScript
                echo "</script>";
                    
        }
        else {
            
            // header('Location: ' .'../view/AdminSection/viewHotels.php', true, $permanent ? 301 : 302);
            // exit();  
            
            echo "<script>";
            echo "alert('Hotel unable to delete !!');";
            echo "window.location.replace('../view/AdminSection/viewHotels.php')"; //Redirects the user with JavaScript
            echo "</script>";


        }  
  
  ?>
    
</div>
