<?php
session_start();
session_destroy();
$_SESSION['']="";
header("location:bloodLogin.php");
?>