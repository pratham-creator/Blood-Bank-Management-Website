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
  <title>About Us</title>
</head>
<body>

    <?php
    session_start();
    if(isset($_SESSION["name"]))
    {
    include('user_navbar.html');
    }
    else{
      include('navbar.html'); 
    }  
    ?>
       
      <section>
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2>About Save Life</h2><hr>
                  </div>
                  <div class="col-md-4">
                    <img src="blood-donation-logo.jpg" class="img-fluid p-3 mb-3" id="AboutLogo" alt="">
                  </div>
                  <div class="col-md-8 pl-2 pt-4 text-center">
                    <p>We have a aim to create a community who wish to help people in need by donating blood.Blood is very precious for 
                        some people at certain times.We want to be there whenever they need us.With more people we have greater chances
                        to save a life.
                    </p><br>
                    <p>Through this website we want to help as many people as we can.We request you to join us in building a healthy community.</p>
                      
                  </div>
              </div>
          </div>
      </section>

      <?php
    include('footer.html');  
    ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>