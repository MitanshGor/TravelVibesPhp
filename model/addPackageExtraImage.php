
<div>


    <div hidden>

    
<?php
    
        include 'mysqlConnection.php';
        include '../constants/constants.php';

        if (isset( $_POST['submit']))
        {
                $Id=$_POST["packageId"];
                $packageimages="packageimages";

                $filename = $_FILES["file"]["name"];
                $tempname = $_FILES["file"]["tmp_name"];
                
                echo "File Name = ".$filename;
                echo "<br>Tmp Name = ".$tempname;
                
                echo "<br>Packeg Id = ".$Id;
                echo "<br>Packeg ERROR = ".$_FILES["file"]["error"];
                $Catch=false;

                $target_file=null;
                $Catch=false;
                $check=false;
                    if(isset($_FILES["file"]["error"])==1){
                            $check = getimagesize($_FILES["file"]["tmp_name"]);    
                            print_r($check);                                 
                    }
                    else{
                        $catch=true;
                        $Catch=true;
                    }
                    
                    if($check !== false && $Catch===false) 
                    {
                        $target_dir = $_SERVER['DOCUMENT_ROOT']."/WT(indus sem5)/travelvibes/assets/Images/packageImages/";
                        $uploadOk = 0;
                        $target_file = $target_dir.''.$Id.'/Extra/'.basename($_FILES["file"]["name"]);              // getting the multipartfile data from the form
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));                 // check the extension weather it is jpg,png 
                  
                        

                        if (file_exists($target_file)) {
                                unlink($target_file);    // DELETE THE FILE
                                if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {                 
                                }
                                else{
                                    // header('Location: ' .'../view/AdminSection/viewPackageDetails.php?packageId='.$Id , true, $permanent ? 301 : 302);
                                    // exit();
                                    echo "<script>";
                                    echo "alert('ERROR : Image was unable to save , please try again !!');";
                                   echo "window.location.replace('../view/AdminSection/viewPackageDetails.php?packageId=".$Id."')"; //Redirects the user with JavaScript
                                    echo "</script>";
                                    die();
                                }
                            }
                            else
                            {
                                 if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {                 
                                }
                                else{
                                    // header('Location: ' .'../view/AdminSection/viewPackageDetails.php?packageId='.$Id , true, $permanent ? 301 : 302);
                                    // exit();
                                    echo "<script>";
                                    echo "alert('ERROR : Image was unable to save , please try again !!');";
                                   echo "window.location.replace('../view/AdminSection/viewPackageDetails.php?packageId=".$Id."')"; //Redirects the user with JavaScript
                                    echo "</script>";
                                    die();
                                }
                            }
                    }
                    else if($Catch==true){}
                    else {
                      echo "File is not an image.";
                      $uploadOk = 0;
              
                    //   header('Location: ' .'../view/AdminSection/viewPackageDetails.php?packageId='.$Id , true, $permanent ? 301 : 302);
                    //                 exit();
                      echo "<script>";
                      echo "alert('ERROR : Invalid Image File !!');";
                     echo "window.location.replace('../view/AdminSection/viewPackageDetails.php?packageId=".$Id."')"; //Redirects the user with JavaScript
                      echo "</script>";
                      die();
                    }

                        if($target_file!==null)
                        {
                            $sql="insert into ".$packageimages." (".$packageImgid." , ".$Image.") values (".$Id.",'".substr($target_file,42)."');";
                            echo "<br>sql Querry = ".$sql;
                            if (mysqli_query($con, $sql)) {
                                // header('Location: ' .'../view/AdminSection/viewPackageDetails.php?packageId='.$Id , true, $permanent ? 301 : 302);
                                //     exit();
                                echo "<script>";
                                echo "alert('Image Added Sucessfully !!');";
                                echo "window.location.replace('../view/AdminSection/viewPackageDetails.php?packageId=".$Id."')"; //Redirects the user with JavaScript
                                echo "</script>";
                                die(); //Stops PHP from further execution
                            
                            } else {
                             
                                // header('Location: ' .'../view/AdminSection/viewPackageDetails.php?packageId='.$Id , true, $permanent ? 301 : 302);
                                //     exit();
                                echo "<script>";
                                echo "alert('Unable to Add Image ,Please Retry !!');";
                               echo "window.location.replace('../view/AdminSection/viewPackageDetails.php?packageId=".$Id."')"; //Redirects the user with JavaScript
                                echo "</script>";
                                die(); //Stops PHP from further execution
                            }
                        }
        }

        else{
                
        }
?>
    </div>

</div>