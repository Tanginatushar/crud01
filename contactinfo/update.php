<?php

$ID = $_POST['ID'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress = $_POST['permanentAddress'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");

$query = "UPDATE `contactInfo`.`contactinfo` SET `presentAddress` = '".$presentAddress."',
 `permanentAddress` = '".$permanentAddress."',
  `mobile` = '".$mobile."',
  `email` = '".$email."' WHERE `contactinfo`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');