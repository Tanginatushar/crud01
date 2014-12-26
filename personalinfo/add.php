<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];


$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "INSERT INTO `personalInfo`.`personalinfo`(
`ID`,
`fullName`,
`fatherName`,
`motherName`
)
VALUES('$ID','$fullName','$fatherName','$motherName')";
mysqli_query($link, $query);

header('location:list.php');
?>