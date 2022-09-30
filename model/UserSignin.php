<?php

include 'mysqlConnection.php';
include '../constants/constants.php';
if (isset( $_POST['signin'] ) )
{
     $name = $_POST['name']; 
    $email = $_POST['email'];
    $pwd =  password_hash($_POST['password'],PASSWORD_BCRYPT);
    $mobile = $_POST['mobile'];
    $accCreationDate=date("Y-m-d h:i:sa");
 
    echo "<br>line 13";

 

    $target_file=null;
    $Catch=false;
         if(isset($_FILES["file"]["tmp_name"])==1){
            $check = getimagesize($_FILES["file"]["tmp_name"]);   
            echo "<br>line 21";
                                  
        }
        else{
            $catch=true;
            $Catch=true;
            echo "<br>line 27";

        }
   
    if($check !== false && $Catch===false) 
    {    
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/WT(indus sem5)/travelvibes/assets/Images/UserProfileImages/";
        $uploadOk = 0;
        $target_file = $target_dir.''.$name.'/'.basename($_FILES["file"]["name"]);              // getting the multipartfile data from the form
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));                 // check the extension weather it is jpg,png 
       
        echo "<br>line 31";
        $uploadOk = 1;  
        if (!file_exists($target_dir.''.$name)) {
            echo "<br>making directory";
            mkdir($target_dir.''.$name, 0777, true);
            
            echo "<br>line 44";
        }   

        if (file_exists($target_file)) {
            // echo "<br >Sorry, file already exists.";
            unlink($target_file);    // DELETE THE FILE
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {                 
                echo "<br> Your File Updated Successfully Uploaded <br>";
                
            echo "<br>line 52";
            // header('Location: ' .'../view/signin.php', true);
            // exit();   
        }
            else{
                
                 echo "<br>line 57";
                header('Location: ' .'../view/signin.php', true, $permanent ? 301 : 302);
                exit();
                // echo "< script>";
                // // echo "alert('ERROR : Image was unable to save , please signin again !!');";
                // echo "window.location.replace('../view/signin.php')"; //Redirects the user with JavaScript
                // echo "</>";
                // die();
            }
        }
        else
        {
             if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {                 
            }
            else{
                
                echo "<br>line 73";
                header('Location: ' .'../view/signin.php', true, $permanent ? 301 : 302);
                exit();
                // echo "<>";
                // // echo "alert('ERROR : Image was unable to save , please signin again !!');";
                // echo "window.location.replace('../view/signin.php')"; //Redirects the user with JavaScript
                // echo "</ script>";
                die();
            }
        }

      } 
      else if($Catch==true){}
      else {
        
        echo "<br>line 88";
        echo "File is not an image.";
        $uploadOk = 0;
        header('Location: ' .'../view/signin.php', true, $permanent ? 301 : 302);
        exit();
        // echo "< script>";
        // // echo "alert('ERROR : Invalid Image File !!');";
        // echo "window.location.replace('../view/signin.php')"; //Redirects the user with JavaScript
        // echo "</>";
        // die();
      }

    
    $sql = "INSERT INTO ".$userTable." (".$userName.", ".$userEmail.", ".$mobileNo." , ".$password.",".$AccCreatedOn.",".$heroimg.")
    VALUES ('".$name."', '".$email."', '".$mobile."','".$pwd."','".$accCreationDate."' ,'".(($target_file!==NULL)?substr($target_file,43):"/assets/Images/UserProfileImages/profile.png")."')";
    echo "<br>line 105";
    if (mysqli_query($con, $sql)) {
       
        echo "<br>line 108";
        header('Location: ' .'../view/MainPage.php');
        exit();
        // echo "< script>";
        // // echo "alert('Data Added Sucessfully !!');";
        // echo "window.location.replace('../view/MainPage.php')"; //Redirects the user with JavaScript
        // echo "</>";
        // die(); //Stops PHP from further execution
    
    } else {
        echo "<br>line 115";
        echo "Please Retry !!";
        
        // header('Location: ' .'../view/signin.php', true);
        // exit();
        // echo "<>";
        // echo "window.location.replace('../view/signin.php')"; //Redirects the user with JavaScript
        // echo "</ script>";
        // die(); //Stops PHP from further execution
    }
    echo "<br>line 128";
    echo "Please Retry !!";
}
else{
    echo '<h1><center>401 PAGE IS UNAUTHORIZED<center><h1>';
}

?> 