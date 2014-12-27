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
$query= "
INSERT INTO `training`.`traininginfo` (
`ID` ,
`tTitle` ,
`tDescription` ,
`institute` ,
`address` ,
`tArea` ,
`tDuration` ,
`startDate` ,
`endDate` ,
`courseTitle` ,
`trainerDetail`
)
VALUES (
'$ID', '$tTitle', '$tDescription', '$institute', '$address', '$tArea',
 '$tDuration', '$startDate', '$endDate', '$courseTitle', '$trainerDetail'
)";
mysqli_query($link, $query);

header('location:list.php');
