<?php

SESSION_start();
$id=$_SESSION["id"];

$dir = './userimages/';

 
    if(isset($_POST["img"])){
      $img = $_POST['img'];
   
    
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $fileData = base64_decode($img);
    $date = date('Y-n-d');
    $fileName = $dir.$date.'-'.$id.'-logout.png';
    file_put_contents($fileName, $fileData);
    $conn = new mysqli("localhost","root","","team19");
    $sql = "UPDATE employees_data SET Logout =now() WHERE id = $id";
    $conn->query($sql);
    $sql1 = "SELECT * from  employees_data where id=$id";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    $curr = $row['Logout'];
    $past = $row['Login'];
    
   $start = strtotime($past);
   $end = strtotime($curr);
   $diff = ($end-$start)/60 ;
   
   
   $before = $row['Hours_active'];
   $new = $before+$diff;
    
    $sql = "UPDATE  employees_data  SET  Hours_active = '$new' WHERE id = $id";
    $conn->query($sql);
    $sql = "UPDATE employees_data SET Status=0 WHERE id = $id";
    $res= $conn -> query($sql);
    header('Location: login.html');
    }
  
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .space{
        height:300px;
      }
    </style>
  </head>
  <body>

    <div class="space"><h1>Hold on while we capture your image..</h1></div>
    <div class="hide" style="display:none"><video id="video" width="320" height="240" autoplay></video>
    <div style="display:none">
    <video id="video" width="640" height="480" autoplay></video>
    <canvas id="canvas" width="640" height="480" name="login"></canvas>

    <button id="snap" style="display: none">Snap Photo</button>
    <form action="photologout.php"  enctype='multipart/form-data' method="post" name="form1">
      <input name="img" id="img" />
      <input type="submit" name="submitbtn" id="submitbtn" />
    </form>
    </div>
    <script src="photo.js"></script>
  </body>
</html>