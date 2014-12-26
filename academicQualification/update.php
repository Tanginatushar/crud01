<?php


$ID = $_POST['ID'];
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

$query = "UPDATE `academic`.`academicQualification` SET `levelOfEducation` = '".$levelOfEducation."',
 `examTitle` = '".$examTitle."',
 `subject` = '".$subject."',
  `institution` = '".$institution."',
  `resultType` = '".$resultType."',
   `result` = '".$result."',
   `rscale` = '".$rscale."',
  `passingYear` = '".$passingYear."',
  `duration` = '".$duration."',
   `achievement` = '".$achievement."'

   WHERE `academicQualification`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');
