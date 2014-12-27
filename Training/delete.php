<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");

$query = "DELETE FROM `training`.`traininginfo` WHERE `traininginfo`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');


?>