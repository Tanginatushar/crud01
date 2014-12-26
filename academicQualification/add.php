<?php


$ID=$_POST['ID'];
$levelOfEducation = $_POST['levelOfEducation'];
$examTitle  = $_POST['examTitle'];
$subject = $_POST['subject'];
$institution  = $_POST['institution'];
$resultType = $_POST['resultType'];
$result = $_POST['result'];
$rscale = $_POST['rscale'];
$passingYear=$_POST['passingYear'];
$duration=$_POST['duration'];
$achievement=$_POST['achievement'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");

$query = "INSERT INTO `academic`.`academicQualification` (
`ID` ,
`levelOfEducation` ,
`examTitle` ,
`subject` ,
`institution` ,
`rersultType` ,
`result` ,
`rscale` ,
`passingYear` ,
`duration` ,
`achievement`
)
VALUES (
    '$ID', '$levelOfEducation', '$examTitle ','$subject ','$institution','$resultType','$result','$rscale',
    '$passingYear','$duration','$achievement'

)";

mysqli_query($link, $query);

header('location:list.php');
?>