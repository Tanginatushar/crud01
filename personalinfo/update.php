<?php

$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$religion = $_POST['religion'];
$dateOfBirth=$_POST['dateOfBirth'];
$nationalId = $_POST['nationalId'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personalInfo");
$query = "UPDATE `personalInfo`.`personalinfo` SET `fullName` = '".$fullName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `fatherName` = '".$fatherName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `motherName` = '".$motherName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `religion` = '".$religion."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `dateOfBirth` = '".$dateOfBirth."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `nationalId` = '".$nationalId."' WHERE `personalinfo`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');