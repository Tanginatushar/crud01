<?php

$ID = $_POST['ID'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress = $_POST['permanentAddress'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personalInfo");
$query = "UPDATE `contactInfo`.`contactinfo` SET `ID` = '".$ID."' WHERE `contactinfo`.`ID` = $ID;";
$query = "UPDATE `contactInfo`.`contactinfo` SET `presentAddress` = '".$presentAddress."' WHERE `contactinfo`.`ID` = $ID;";
$query = "UPDATE `contactInfo`.`contactinfo` SET `permanentAddress` = '".$permanentAddress."' WHERE `contactinfo`.`ID` = $ID;";
$query = "UPDATE `contactInfo`.`contactinfo` SET `mobile` = '".$mobile."' WHERE `contactinfo`.`ID` = $ID;";
$query = "UPDATE `contactInfo`.`contactinfo` SET `email` = '".$email."' WHERE `contactinfo`.`ID` = $ID;";


mysqli_query($link, $query);
header('location:list.php');