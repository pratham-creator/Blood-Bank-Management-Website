<?php

$h=mysqli_connect("Localhost","root","","donordata") or die("Unable to connect");
$name= $_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["r"];
$bloodGrp=$_POST["bloodGroup"];
$DOB=$_POST["dob"];
$Address=$_POST["address"];
$pass=$_POST["password"];
$state=$_POST["state"];
$city=$_POST["city"];

$q=mysqli_query($h,"select * from donor where password='$pass'");
$q1=mysqli_query($h,"select * from donor where email='$email'");
$q2=mysqli_query($h,"select * from donor where phone='$mobile'");

if(mysqli_num_rows($q)>0)
{
    echo "<script>alert('Password already exist');</script>";
}
elseif(mysqli_num_rows($q1)>0)
{
    echo "<script>alert('Email already exist');</script>";
}
elseif(mysqli_num_rows($q2)>0)
{
    echo "<script>alert('Mobile no. already exist');</script>";
}
else
{
    $que="insert into donor values('$name','$email','$gender','$bloodGrp','$DOB','$Address','$pass','$state','$mobile','0')";
    $query=mysqli_query($h,$que);

    mysqli_close($h);
    header("location:bloodMainpage.php");
}


?>