<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employskills");

$query = "DELETE FROM `employskills`.`empskilref` WHERE `empskilref`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>