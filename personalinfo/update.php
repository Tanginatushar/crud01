<?php

$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "UPDATE `personalInfo`.`personalinfo` SET `fullName` = '".$fullName."' WHERE `personalinfo`.`ID` = $ID;";
$query = "UPDATE `personalInfo`.`personalinfo` SET `fatherName` = '".$fatherName."' WHERE `personalinfo`.`ID` = $ID;";
mysqli_query($link, $query);
header('location:list.php');