<?php


    $email = $_POST["email"];

    $pass = $_POST["password"];
  

$h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
$q = mysqli_query($h, "select * from donor where email='$email' AND password='$pass'");
if (mysqli_num_rows($q) > 0) {
  while ($a = mysqli_fetch_array($q)) {
    
    session_start();
    $_SESSION["name"]=$a[0];
    $_SESSION["DOD"]=$a[9]; 
    $_SESSION["email"]=$a[1]; 
    $_SESSION["password"]=$a[6]; 

  }
  header("location:bloodMainpage.php");
} else {
  
echo "<script>alert('Enter valid email or password');</script>";

}

?>