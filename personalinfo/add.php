<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$religion = $_POST['religion'];


$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "INSERT INTO `personalInfo`.`personalinfo`(
`ID`,
`fullName`,
`fatherName`,
`motherName`,
`religion`
)
VALUES('$ID','$fullName','$fatherName','$motherName','$religion')";
mysqli_query($link, $query);

header('location:list.php');
?>