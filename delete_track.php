<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");

$query = "DELETE FROM `applicants`.`track` WHERE `track`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list_track.php');
?>