<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
  <link rel="stylesheet" href="bloodMainpage.css">
  <title>MainPage</title>
</head>

<body>
  <?php
  session_start();

  include('user_navbar.html');

  ?>
  <section id="register-form">
    <div class="container-fluid">
      <form action="" method="post">

        <div class="row align-items-center justify-content-center">
          <center>
            <div class="col-md-5 m-md-5" id="form" style='border-radius:30px;box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
              <div class="row">

                <div class="col-12 p-3">
                  <label>
                    <font color="crimson">
                      <h2>Change Password</h2>
                    </font>
                  </label><br>
                </div>


                <div class="col-12 p-3">
                  <label>Old Password:</label><br>
                  <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="Password" placeholder="Password" name="oldPassword">
                </div>

                <div class="col-12 p-3">
                  <label>New Password:</label><br>
                  <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="Password" placeholder="Password" name="newPassword" required>
                </div>

                <div class="col-12 p-3">
                  <label>Confirm New Password:</label><br>
                  <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="Password" placeholder="Password" name="cnewPassword" required>
                </div>


                <div class="col-12 mb-4">
                  <br>

                  <input type="submit" name="changePassword" class="btn btn-danger" value="Submit">

                </div>

              </div>
            </div>
          </center>
        </div>
      </form>
    </div>
  </section>

  <section id="register-form">
    <div class="container-fluid">
      <form action="deleteAccount.php" method="post">

        <div class="row align-items-center justify-content-center">
          <center>
            <div class="col-md-9 m-md-5" id="form" style='border-radius:30px;box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
              <div class="row">

                <div class="col-12 p-3">
                  <label>
                    <font color="crimson">
                      <h2>Delete Account</h2>
                    </font>
                  </label><br>
                </div>


                <div class="col-12 p-3">
                  <label>Password:</label><br>
                  <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="Password" placeholder="Enter Password" name="delPassword">
                </div>

                


                <div class="col-12 mb-4">
                  <br>

                  <input type="submit" name="delAccount" class="btn btn-danger" value="Submit">

                </div>

              </div>
            </div>
          </center>
        </div>
      </form>
    </div>
  </section>



  <?php
  include('footer.html');
  ?>
</body>

</html>
<?php

if (isset($_POST["changePassword"])) {
  $oPass = $_POST["oldPassword"];
  $nPass = $_POST["newPassword"];
  $cnPass = $_POST["cnewPassword"];
  $sessionPassword = $_SESSION["password"];
  $email = $_SESSION["email"];

  $h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
  $q = "UPDATE donor SET password='$nPass' where email='$email'";
  if ($sessionPassword == $oPass) {
    if ($nPass == $cnPass) {
      mysqli_query($h, $q);
      echo "<script>alert('Changed Password Successfully');</script>";
      $_SESSION["password"] = $nPass;
    } else {
      echo "<script>alert('Password did not match');</script>";
    }
  } else {
    echo "<script>alert('Incorrect Old Password');</script>";
  }
}



?>