<!-- <div hidden style="visibility:hidden; display:none;"> -->
    <?php
          
            include 'mysqlConnection.php';
            // include '../constants/constants.php';
            $packageImageTable="packageimages";
                    
            $sql = "select * from ".$packageImageTable." where packageid=".$_GET['packageId'].";";
            $conSql=mysqli_query($con,$sql);

            //$exeQuery = mysqli_query($queryContents);
            if(mysqli_num_rows($conSql)<0){
                // header('Location: ' .'../AdminSection/viewPackages.php', true, $permanent ? 301 : 302);
                // exit();
                echo "<script>";
                echo "alert('Pacakge Images Not Available !!');";
                echo "window.location.replace('../AdminSection/viewPackages.php')"; //Redirects the user with JavaScript
                echo "</script>";
                die();
            }


    ?>
<!-- </div> -->