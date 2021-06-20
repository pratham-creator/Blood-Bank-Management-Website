<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
  <link rel="stylesheet" href="bloodMainpage.css">
  <title>Search</title>

</head>

<body>

  <?php
  session_start();
  include('user_navbar.html');
  ?>


  <section id=search_show>
    <div class='container'>
      <div class='row'>

        <?php
        $h = mysqli_connect("Localhost", "root", "", "donordata") or die("Unable to connect");
        $blood_group = $_POST["donorBlood"];
        $donor_state = $_POST["donorState"];
        $q = mysqli_query($h, "select * from donor where blood_group='$blood_group' AND state='$donor_state'");

        if (mysqli_num_rows($q) > 0) {
          while ($a = mysqli_fetch_array($q)) {

            if ($a[9] == '0') {
              echo "<div class='col-md-3 p-4 m-4 m-3' style='background-color: white; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
                    <font color='crimson'><h2>$a[0]</h2></font>
                    <br>$a[2]
                    <br><span>$a[3]</span>
                    <br><span>$a[8]</span>
                    <br><span>$a[7]</span>
                    </div>";
            } else {
              echo "<div class='col-md-3 p-4 m-4 m-3' style='background-color: white; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
                    <font color='crimson' ><h2>$a[0]</h2></font>
                    <br>$a[2]
                    <br>$a[3]
                    <br>$a[7]
                    <center><font color='crimson' ><h2>DONATED</h2></font></center>
                    </div>";
            }
          }
        } else {


          echo "<script>alert('NO DONORS FOUND');</script>";
        }
        ?>


      </div>
    </div>
  </section>


  <?php
  include('footer.html');
  ?>

</body>

</html>