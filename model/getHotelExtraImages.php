<div style="color:red;">
    <?php
          
            include 'mysqlConnection.php';
            // include '../constants/constants.php';
            $hotelImageTable="hotelimage";
                    
            $sql = "select * from ".$hotelImageTable." where hotelid=".$_GET['hotelid'].";";
            $conSql=mysqli_query($con,$sql);

            if(mysqli_num_rows($conSql)<0){
                echo "<script>";
                echo "alert('Hotel Images Not Available !!');";
                echo "window.location.replace('../AdminSection/viewHotels.php')"; //Redirects the user with JavaScript
                echo "</script>";
                die();
            }


    ?>
</div>