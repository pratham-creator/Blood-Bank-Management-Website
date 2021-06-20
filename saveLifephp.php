<?php
session_start();
$email=$_SESSION["email"];
$crntDate=date_create();
$crntDate=date_format($crntDate,'d-m-Y');

$h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
$q =  "UPDATE donor SET DOD='$crntDate' WHERE email='$email'";

if(mysqli_query($h,$q))
{   
    $_SESSION["DOD"]=$crntDate;
    header("location:bloodMainpage.php");
    
}
else{
    echo "<script>alert('Error occured');</script>";
}
?>