<?php
session_start();
include('../backend/admin/assets/inc/config.php');


$name = $_POST["name"];
$phone = $_POST["phone"];
$department = $_POST["Department"];
$date=$_SESSION["date"];
$ret="INSERT INTO Appointmentbook (name,phone,department,booking_date) VALUES (?,?,?,?);";

    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param( "ssss",$name, $phone,$department,$date);
    $stmt->execute() ;
    $cnt=1;
  $stmt->close() ;
  header("location: ../appointment.php?error=none");
