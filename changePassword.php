<?php
    
    session_start();
    $oPass=$_POST["oldPassword"];
    $nPass=$_POST["newPassword"];
    $cnPass=$_POST["cnewPassword"];
    $sessionPassword=$_SESSION["password"];
    $email=$_SESSION["email"];

    $h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
    $q="UPDATE donor SET password='$nPass' where email='$email'";
    if($sessionPassword==$oPass)
    {
        if($nPass==$cnPass)
        {
            mysqli_query($h,$q);
            echo "<script>alert('Changed Password Successfully');</script>";
            $_SESSION["password"]=$nPass;


        }
        else{
            echo "<script>alert('Password did not match');</script>";
        }
    }
    else{
        echo "<script>alert('Incorrect Old Password');</script>";
    }


?>