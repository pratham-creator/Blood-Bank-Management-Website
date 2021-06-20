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
  if(isset($_SESSION["name"]))
  {
    include('user_navbar.html');
    include('mainpage_welcome_section.php');
  

  }
  else{
    include('navbar.html'); 
  }
  
  ?>

  
  <section>
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container mt-3 mb-5">
              <div class="row align-items-center justify-content-center">
                <div class="col-10">
                  <div class="row">
                    <div class="col-12">
                      <img src="slide-2.jpg" class="d-block w-100" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="carousel-item">
            <div class="container mt-3 mb-5">
              <div class="row align-items-center justify-content-center">
                <div class="col-10">
                  <div class="row">
                    <div class="col-12">
                      <img src="slide-1.jpg" class="d-block w-100" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container mt-5 mb-5">
              <div class="row align-items-center justify-content-center">
                <div class="col-10">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="slide-3.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="col-md-7 text-center p-md-5 mt-3">
                      <font color="crimson">
                        <h3>Why to Donote Blood?</h3>
                      </font>
                      <p>The need of blood is very high.Every 2 seconds someone somewhere needs blood.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon tr-arrow" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon tr-arrow" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </section>
  
  <?php
  if(isset($_SESSION["name"]))
  {
  include('search_section.html');
  }
  ?>

  <footer class="full-footer">
    <div class="container-fluid top-footer p-4">
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid" src="Capture.PNG" alt=""></img>
          <p>
            Save Life is a website where you can save a life and give a life time
            happiness to a family by donating blood.You just have to registered.
          </p>
          <a href="" class="pr-3"><i class="fab fa-2x fa-facebook"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-google-plus"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-twitter"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-instagram"></i></a>

        </div>
        <div class="col-md-4 pl-md-5">
          <h1>Important Links</h1>
          <a href="">Privacy Policy</a><br>
          <a href="">Youtube Channel(link)</a><br>
          <a href="">Blog</a><br>
          <a href="">Social Media</a><br>
        </div>

        <div class="col-md-4">
          <h1>Contact Us</h1>
          <a class="p-1" href="tel:9082637026"><i class="fas fa-phone"></i>(+91)9082637026</a><br>
          <a class="p-1" href="mailto:prathamghule3@gmail.com"><i class="fas fa-envelope"></i>prathamghule3@gmail.com</a><br>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120726.33377851103!2d73.04431636569936!3d18.
              98894337820059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e83e1f23f23d%3A0xe3a106c431e3fd0a!2sPanv
              el%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1600181051337!5m2!1sen!2sin" frameborder="0"></iframe>

        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>