<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");
$query = "DELETE FROM `academic`.`academicQualification` WHERE `academicQualification`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>