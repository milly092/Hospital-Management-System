<?php
session_start();
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
include('backend/admin/assets/inc/config.php');
$_SESSION["date"]= $_GET["date"];
 ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container" >

      <form action="additonal\bookappointment.add.php" method="post">
        <h1>Appointment</h1><br>
        <input class="login__input" type="text" name="name" placeholder="name">
        <input class="login__input" type="text" name="phone" placeholder="phone number">

        <select name="Department" class="login__input" style="font-color:red">
          <option value="">Departments</option>
          <option value="Psychology">Psychologist</option>
          <option value="Special Doctors">Special Doctors</option>
          <option value="Neurology">Neurology</option>
          <option value="Urology">Urology</option>
          <option value="Orthopedic">Orthopedic</option>
          <option value="Medicine">Medicine</option>
          <option value="Other">Other</option>
        </select>


          <button class="btn"type="submit" name="submit"><span class="button__text">Book Appointment</span></button>

      </form>
    </div>

  </body>
</html>
