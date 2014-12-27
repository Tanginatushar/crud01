<?php

$ID=$_POST['ID'];
$tTitle  = $_POST['tTitle'];
$tDescription = $_POST['tDescription'];
$institute=$_POST['institute'];
$address=$_POST['address'];
$tArea=$_POST['tArea'];
$tDuration=$_POST['tDuration'];
$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];
$courseTitle=$_POST['courseTitle'];
$trainerDetail=$_POST['trainerDetail'];



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");

$query = "UPDATE  `training`.`traininginfo` SET `tTitle` = '".$tTitle."',
 `tDescription` = '".$tDescription."',
 `institute` = '".$institute."',
  `address` = '".$address."',
  `tArea` = '".$tArea."',
   `tDuration` = '".$tDuration."',
   `startDate` = '".$startDate."',
 `endDate` = '".$endDate."',
  `courseTitle` = '".$courseTitle."',
  `trainerDetail` = '".$trainerDetail."'

   WHERE `traininginfo`.`ID` = $ID;";

mysqli_query($link, $query);
echo ($query);
header('location:list.php');
?> <a href="list.php">Go to Home</a>