<section id='register-form'>
  <div class="p-4"><center><h3>Welcome   <font color="crimson" size="55px"><?php echo $_SESSION["name"] ?>!!!</font></h3></center></div>
  
  <?php

  $DOD=$_SESSION["DOD"];
  if($_SESSION["DOD"]=="0")
  { 
    echo '<div class="p-4"><center><h3>Have you donated blood ?</h3><br><form action="saveLifephp.php" method="post">
          
          <input type="submit" name="saveLife" class="btn btn-danger" value="Save Life">
          </form></center></div>';
  }
  else{
    $start=date_create($DOD);
    $end=date_create();
    $diff=date_diff($start,$end);

    $diffMonth=$diff->m;

    if($diffMonth>=3)
    {
      echo "<div class='p-4'><center><form action='#' method='post'>
          <input type='submit' name='saveLife' class='btn btn-danger' value='Save Life'>
          </form></center></div>";
    }
    else{
      echo "<center><div class='container'><div class='row align-items-center justify-content-center'><div class='col-12 p-3 m-4' style='background-color: white; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
    <font color='crimson' size='5px'><p>Congratulations! You have saved a life and you can't donate blood until next three months</font></b>
    </div></div>
    </div></center>";

    } 
    
  }
  ?>


</section>