<div  style="color:red;">

    
    <?php
         if (session_status() === PHP_SESSION_NONE) {
            session_start();
          }

        include 'mysqlConnection.php';
    
          // this gives all the hotels booked by the user logged in
          if(isset($_SESSION['userId']))
          {
            $sql = "select * from userbooking as u join billdata as b on u.billid=b.billid join hotel as h on h.hotelid=u.hotelid where u.userid=".$_SESSION['userId']." and u.packageId=0 and b.TotalPackagePrice=0;";
          }
          else{
            $sql = "select * from userbooking as u join billdata as b on u.billid=b.billid join hotel as h on h.hotelid=u.hotelid where u.userid=".$_GET['userId']." and u.packageId=0 and b.TotalPackagePrice=0;";
          }
        $conSql=mysqli_query($con,$sql);

    if(mysqli_num_rows($conSql)<0){
      header('Location: ' .'../AdminSection/AdminPage.php', true, $permanent ? 301 : 302);
        exit();    
      // echo "<script>";
        // // echo "alert('No Hotels Available !!');";
        // echo "window.location.replace('../AdminSection/AdminPage.php')"; //Redirects the user with JavaScript
        // echo "</script>";
        // die();
    }
    ?>

