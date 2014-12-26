<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");

$query = "DELETE FROM `contactInfo`.`contactinfo` WHERE `contactinfo`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>