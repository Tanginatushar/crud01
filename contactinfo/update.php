<?php

$ID = $_POST['ID'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress = $_POST['permanentAddress'];
$country=$_POST['country'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$hasPassport=$_POST['hasPassport'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");

$query = "UPDATE `contactInfo`.`contactinfo` SET `presentAddress` = '".$presentAddress."',
 `permanentAddress` = '".$permanentAddress."',
 `country` = '".$country."',
  `mobile` = '".$mobile."',
  `email` = '".$email."',
   `hasPassport` = '".$hasPassport."'
   WHERE `contactinfo`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');
