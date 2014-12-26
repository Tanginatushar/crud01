<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$religion = $_POST['religion'];
$dateOfBirth=$_POST['dateOfBirth'];
$nationalId = $_POST['nationalId'];


$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "INSERT INTO `personalInfo`.`personalinfo`(
`ID`,
`fullName`,
`fatherName`,
`motherName`,
`religion`,
`dateOfBirth`,
`nationalId`
)
VALUES('$ID','$fullName','$fatherName','$motherName','$religion','$dateOfBirth',$nationalId)";
mysqli_query($link, $query);

header('location:list.php');
?>