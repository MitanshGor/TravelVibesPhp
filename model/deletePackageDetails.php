<div >
 
 
    <?php
          
            include 'mysqlConnection.php';
            // include '../constants/constants.php';
            $packageTable="package";
            $sql = "update ".$packageTable." set deletePackage=1 where packageid=".$_GET['packageId'].";";


            //$exeQuery = mysqli_query($queryContents);
            if (mysqli_query($con,$sql)) {

                header('Location: ' .'../view/AdminSection/viewPackages.php', true, $permanent ? 301 : 302);
                exit();  
                //     echo "<>";
                //     // echo "alert('Package deleted !!');";
                //     echo "window.location.replace('../view/AdminSection/viewPackages.php')"; //Redirects the user with JavaScript
                //     echo "</ script>";
                        
        }
        else {
                header('Location: ' .'../view/AdminSection/viewPackages.php', true, $permanent ? 301 : 302);
                exit();  
                // echo "<>";
                // // echo "alert('Packages unable to delete !!');";
                // echo "window.location.replace('../view/AdminSection/viewPackages.php')"; //Redirects the user with JavaScript
                // echo "</ script>";

              }    ?>


</div>
