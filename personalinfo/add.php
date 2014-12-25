<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];


$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "INSERT INTO `personalInfo`.`personalinfo`(
`ID`,
`fullName`
)
VALUES('$ID','$fullName')";
mysqli_query($link, $query);

header('location:list.php');
?>