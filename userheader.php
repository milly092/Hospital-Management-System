<?php
 session_start();
 ?>
<html lang="en">
  <head>
    <body style="background-image: url(assets/images/hospital1.jpg);>
    <div class="container text-center">
    <marquee  bgcolor="black" direction="left"behaviour="alternate" ><h4 class="text-white">Wellcome to the EAST WEST Hospital LTD. This is your home.Your smile is our satisfaction</h4></marquee>
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>East West Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>






  </head>
  <body>
    <?php
    if (isset($_SESSION["usersName"])) {
      echo"<p style='margin-top:100px; color:white; font-size:50px;' >Hello! ".$_SESSION["usersName"]."</p>";
    }
     ?>
    <!--header work start-->
    <header class="header">
      <img alt="Picture" class="rounded" src="assets/images/favicon.png">
      <nav class="navigation">
        <a href="appointment.php">Appoinment</a>
        <a href="index.php">Home</a>


        <button class="btnLogin-popup" onclick="window.location.href = 'additonal/logout.add.php';">Log Out</button>
      </nav>
    </header>
  </body>
  </html>
