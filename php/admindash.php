<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="admindash.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
      .main {
  margin-left: 100px;
}
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <ul>
          <li class="active">
            <ion-icon name="home" size="large"></ion-icon>
          </li>
          <a href="adduser.html">  <li><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
          <a href="view.html"><li ><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li></a>
          <a href="admin.php"><li><ion-icon name="log-out-sharp" size="large"></ion-icon></li></a>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h2>Dashboard</h2>
            <span>Admin Page</span>
          </div>
          <!-- <div class="search">
            <input type="search" placeholder="Search" />
          </div> -->
        </div>
        <div class="board">
          <a href="viewhr.php">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>HR Count</span><br />
            <!-- <h1>300</h1> -->
            <?php
            session_start();
            $conn = new mysqli("localhost","root","");
$sql = "CREATE DATABASE IF NOT EXISTS team19;"; 
$res= $conn -> query($sql);
$conn = new mysqli("localhost","root","","team19");
if($conn-> connect_error)
die("Connection failed" . $conn->connect_error);
 

 $sql = "CREATE TABLE IF NOT EXISTS employees_data(
	  id int(255) NOT NULL AUTO_INCREMENT,
      First_Name varchar(120) null default'NOT NULL',
	  Last_Name varchar(120) null default'NOT NULL',
	  User_name varchar(120) null default'NOT NULL',
	  Password varchar(20),
	  Age int(2),
	  Gender char(6),
	  
	  Hours_active DECIMAL(5,2) NOT NULL,
	  Salary numeric(6) NOT NULL ,
	  Image varchar(120),
	  Status BOOLEAN NOT NULL DEFAULT 0,
	  Payment numeric(6) NOT NULL,
	  Login TIME,
	  Logout TIME,
	  Recent_activity TIME,
	  primary key(id)
      )";
$res= $conn -> query($sql);


 $sql = "CREATE TABLE IF NOT EXISTS hr(
	  id int(255) NOT NULL AUTO_INCREMENT,
      First_Name varchar(120) null default'NOT NULL',
	  Last_Name varchar(120) null default'NOT NULL',
	  User_name varchar(120) null default'NOT NULL',
	  Password varchar(20),
	  Age int(2),
	  Gender char(6),
	  
	  Hours_active DECIMAL(5,2) NOT NULL,
	  Salary numeric(6) NOT NULL ,
	  Image varchar(120),
	  Status BOOLEAN NOT NULL DEFAULT 0,
	  Payment numeric(6) NOT NULL,
	  Login TIME,
	  Logout TIME,
	  Recent_activity TIME,
	  primary key(id)
      )";
$res= $conn -> query($sql);


$sql = "CREATE TABLE IF NOT EXISTS activity(
 id int(255) NOT NULL,
 latitude  DECIMAL(10, 8) NOT NULL,
 longitude DECIMAL(11, 8) NOT NULL,
 date DATE NOT NULL,
 primary key(id)
 )";
 $res= $conn -> query($sql);
            $connect = new mysqli("localhost","root","","team19");
            $sql="SELECT *
            FROM hr; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"<h1>$cnt</h1>";
            
            
            ?>
            </div>
          </a>
          </div>
          <a href="viewemp.php">
        <div class="card">
          <div class="info">
            <div class="card-icon">
              <ion-icon name="people-circle-outline" size="large"></ion-icon>
            </div>
            <span>Employee Count</span><br />
            <!-- <h1>500</h1> -->
            <?php
            
            $connect = new mysqli("localhost","root","","team19");
            $sql="SELECT *
            FROM employees_data; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"<h1>$cnt</h1>";
            ?>
            <!-- <h5>Part Time:500</h5>
            <h5>Full Time:500</h5>
            <h5>Total:1000</h5> -->
          </div>
        </a>
        </div>
      </div>
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
