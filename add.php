<?php

$ID=$_POST['ID'];
$preferredTrack = $_POST['preferredTrack'];
$sscRoll  = $_POST['sscRoll'];
$sscBoard = $_POST['sscBoard'];
$hscRoll  = $_POST['hscRoll'];
$hscBoard = $_POST['hscBoard'];
$hasLaptop=$_POST['hasLaptop'];
$preferredExamCenter=$_POST['preferredExamCenter'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$fatherName = $_POST['fatherName'];
$motherName  = $_POST['motherName'];
$religion = $_POST['religion'];
$dateOfBirth=$_POST['dateOfBirth'];
$gender=$_POST['gender'];
$nationality  = $_POST['nationality'];
$nationalId = $_POST['nationalId'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress = $_POST['permanentAddress'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "INSERT INTO `applicants`.`info` (
`ID`,
`preferredTrack` ,
`sscRoll`,
`sscBoard`,
`hscRoll`,
`hscBoard`,
`hasLaptop`,
`preferredExamCenter`,
`firstName` ,
`lastName`,
`fatherName`,
`motherName`,
`religion`,
`dateOfBirth`,
`gender`,
`nationality`,
`nationalId`,
`presentAddress`,
`permanentAddress`,
`mobile`,
`email`
)
VALUES (
    '$ID', '$preferredTrack', '$sscRoll','$sscBoard ','$hscRoll','$hscBoard','$hasLaptop','$preferredExamCenter',
    '$firstName', '$lastName','$fatherName','$motherName','$religion','$dateOfBirth',
    '$gender','$nationality','$nationalId','$presentAddress','$permanentAddress','$mobile','$email'
)";

mysqli_query($link, $query);

header('location:list.php');
?>