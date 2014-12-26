<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$religion = $_POST['religion'];
$dateOfBirth=$_POST['dateOfBirth'];


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
`dateOfBirth`
)
VALUES('$ID','$fullName','$fatherName','$motherName','$religion','$dateOfBirth')";
mysqli_query($link, $query);

header('location:list.php');
?>