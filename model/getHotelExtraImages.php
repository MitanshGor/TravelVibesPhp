<div style="color:red;">
    <?php
          
            include 'mysqlConnection.php';
            // include '../constants/constants.php';
            $hotelImageTable="hotelimages";
                    
            $sql = "select * from ".$hotelImageTable." where hotelid=".$_GET['hotelid'].";";
            $conSql=mysqli_query($con,$sql);

            if(mysqli_num_rows($conSql)<0){
                // header('Location: ' .'../AdminSection/viewHotels.php', true, $permanent ? 301 : 302);
                // exit();
                
                echo "<script>";
                echo "alert('Hotel Images Not Available !!');";
                echo "window.location.replace('../AdminSection/viewHotels.php')"; //Redirects the user with JavaScript
                echo "</script>";
                die();
            }


    ?>
</div>