<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HR Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="hrdash.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <a class="link" href="index.html" target="_blank">
          <div class="main_1">
            <div class="icon">
              <img src="logo.png" height="40px" width="40px" />
            </div>
            <div class="info_1">
              <h2>Tradinglaza</h2>
            </div>
          </div>
        </a>
        <div class="imgcont">
          <img src="hr1.png" width="100%" height="100%" />
        </div>
        <center>
          <h2>HR Name</h2>
          <h4>Job Description</h4>
        </center>
        <ul>
          <a href="hrdash.php"><li>HOME</li></a>
        <a href="hr_view_profile.php"><li class="active">VIEW PROFILE</li></a>
        <a href="login.html"><li>LOGOUT</li></a>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h3>HR's Glaza</h3>
          </div>
        </div>
          <div class="card">
          <a href="viewhr.html">
            <div class="info">
              <div class="card-icon">
                <!-- <ion-icon name="people-circle-outline" size="large"></ion-icon> -->
                <img src="team.png" height="100px" width="100px" >
              </div>
              <center>
              <h3>Employee Count :</h3>
              <!-- <h1>500</h1> -->
              <?php
              
              $connect = new mysqli("localhost","root","","team19");
              $sql="SELECT *
              FROM employees_data; ";
              $res= $connect -> query($sql);
              $cnt=$res->num_rows;
              echo"<h1>$cnt</h1>";
              ?>
              </center>
              <!-- <h5>Part Time:500</h5>
              <h5>Full Time:500</h5>
              <h5>Total:1000</h5> -->
               </a>
            </div>
         
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
