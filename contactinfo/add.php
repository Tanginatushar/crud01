<?php
$ID=$_POST['ID'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress = $_POST['permanentAddress'];
$country=$_POST['country'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");
$query = "INSERT INTO `contactInfo`.`contactinfo`(
`ID`,
`presentAddress`,
`permanentAddress`,
`country`,
`mobile`,
`email`
)
VALUES('$ID','$presentAddress','$permanentAddress','$country','$mobile','$email')";
mysqli_query($link, $query);

header('location:list.php');
?>