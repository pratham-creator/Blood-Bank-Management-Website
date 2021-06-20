<?php
  session_start();
  $pass = $_POST["delPassword"];
  $sessionPassword = $_SESSION["password"];
  
  $h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
  $q = "DELETE from donor where password='$sessionPassword'";

  if ($sessionPassword == $pass){
    header("Location:logout.php");
    mysqli_query($h, $q);
    
  }
  else{
    echo "<script>alert('Incorrect Password');</script>";
  }

?>