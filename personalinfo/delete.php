<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");

$query = "DELETE FROM `personalInfo`.`personalinfo` WHERE `personalinfo`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>