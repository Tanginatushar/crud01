<?php

$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$religion = $_POST['religion'];
$dateOfBirth=$_POST['dateOfBirth'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "UPDATE `personalInfo`.`personalinfo` SET `fullName` = '".$fullName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `fatherName` = '".$fatherName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `motherName` = '".$motherName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `religion` = '".$religion."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `dateOfBirth` = '".$dateOfBirth."' WHERE `personalinfo`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');