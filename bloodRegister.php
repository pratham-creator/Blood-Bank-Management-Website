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

  <script type="text/javascript">
    function change_state() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "ajax.php?state=" + document.getElementById("state").value, false);
      xmlhttp.send(null);
      alert(xmlhttp.responseText);
      document.getElementById("city").innerHTML = xmlhttp.responseText;
    }


    function Validate() {
      var pass = document.getElementById("pass").value;
      var cpass = document.getElementById("cpass").value;
      var mobile = document.getElementById("mobile").value;
      var email = document.getElementById("email").value;
      var regxMobile = /^[6-9]\d{9}$/;
      var regxEmail = /^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]+)\.([a-z]{2,20})(\.[a-z]{2,20})?$/;


      if (!regxMobile.test(mobile)) {
        alert("Wrong Mobile");
        return false;
      } else if (!regxEmail.test(email)) {
        alert("Wrong Email Id");
        return false;
      } else if (pass != cpass) {
        alert("Wrong password");
        return false;
      } else {
        return true;
      }



    }
  </script>

  <?php
  include('navbar.html');
  ?>

  <section id="register-form">
    <div class="container">
      <form action="registerform.php" onsubmit="return Validate()" method="post">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 m-md-5" id="form" style='border-radius:20px;box-shadow: 5px 5px 10px  rgb(0, 0, 0)'>
            <div class="row p-5">


              <div class="col-12">
                <center>
                  <img src="profile.png" id="register-form-logo" alt="">
                </center>
                <br>
                <hr id="hr">
                <br>
              </div>

              <div class="col-md-6 p-3">
                <label for="Name">Name:</label><br>
                <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<input type="text" class="form-group" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Email">Email</label><br>
                <i class="fas fa-envelope"></i>&nbsp&nbsp&nbsp;<input type="text" id="email" placeholder="E-mail" name="email" required>
              </div>

              <div class="col-md-6 p-3">
                <label for="Mobile no">Mobile no.:</label><br>
                <i class="fas fa-phone"></i>&nbsp&nbsp&nbsp;<input type="text" id="mobile" placeholder="Mobile-no." name="mobile" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Gender">Gender:</label><br>
                <label for="Gender"><i class="fas fa-male"></i>&nbsp&nbsp;Male</label>
                <input type="radio" name="r" value="Male"><br>
                <label for="Gender"><i class="fas fa-female"></i>&nbsp&nbsp;Female</label>
                <input type="radio" name="r" value="Female">
              </div>

              <div class="col-md-6 p-3">
                <label for="Blood Group:">Blood Group:</label><br>
                <i class="fas fa-tint"></i>&nbsp&nbsp&nbsp;<select name="bloodGroup" id="" id="blood" required>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                  <option value="O-">O-</option>
                </select>
              </div>
              <div class="col-md-6 p-3">
                <label for="DOB">DOB:</label><br>
                <i class="fas fa-birthday-cake"></i>&nbsp&nbsp&nbsp;<input type="date" id="date" name="dob" required>
              </div>

              <div class="col-12 p-3">
                <label for="Address">Address</label><br>
                <i class="fas fa-map-marker-alt"></i>&nbsp&nbsp&nbsp;<textarea name="address" id="address" rows="2" placeholder="Address" required></textarea>
              </div>


              <div class="col-md-6 p-3">
                <label for="Password">Password</label><br>
                <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="password" id="pass" name="password" placeholder="Password" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Confirm Password">Confirm Password</label><br>
                <i class="fas fa-unlock-alt"></i>&nbsp&nbsp&nbsp;<input type="password" id="cpass" placeholder="Confirm Password" required>

              </div>

              <div class="col-md-6 p-3">
                <label for="City">City:</label><br>
                <i class="fas fa-phone"></i>&nbsp&nbsp&nbsp;<input type="text" id="city" placeholder="Mobile-no." name="city" required>
              </div>

              <div class="col-md-6 p-3">
                <label for="State">State:</label><br>
                <i class="fas fa-map-marker-alt"></i>&nbsp;<select name="state" id="state" onchange="change_state()" required>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Pondicherry">Pondicherry</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>
                </select>
              </div>

              

              <div class="col-12">
                <br>
                <center>
                  <input type="submit" class="btn btn-danger" value="Donate">
                </center>
              </div>





            </div>
          </div>
        </div>
      </form>
    </div>

  </section>





  <?php
  include('footer.html');
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>

</html>