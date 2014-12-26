<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];


$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "INSERT INTO `personalInfo`.`personalinfo`(
`ID`,
`fullName`,
`fatherName`
)
VALUES('$ID','$fullName','fatherName')";
mysqli_query($link, $query);

header('location:list.php');
?>