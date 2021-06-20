<?php

$h=mysqli_connect("Localhost","root","","states");
$state= $_GET["state"];

if($state!="")
{
  $q="select * from cities where city_state=$state";
  $query=mysqli_query($h,$q);
  echo "<select>";
  while($row=mysqli_fetch_array($query))
  {
    echo "<option>"; echo $row["city_name"] ; echo "</option>";
  }

  echo "</select>";
}



?>



