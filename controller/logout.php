<?php 

    session_start();
    session_destroy();
    // session_abort();
    // header('Location: ' . '../view/MainPage.php', true, $permanent ? 301 : 302);
    //         exit();
        
    echo "<script>";
    echo "alert('You have been Loged Out !! ".session_status()."');";
    echo "window.location.replace('../view/login.php')"; //Redirects the user with JavaScript
    echo "</script>";

?>