<?php

$ID = $_POST['ID'];
$fullName = $_POST['fullName'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "UPDATE `personalInfo`.`personalinfo` SET `fullName` = '".$fullName."' WHERE `personalinfo`.`ID` = $ID;";
mysqli_query($link, $query);
header('location:list.php');