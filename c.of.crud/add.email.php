<?php


$id=$_POST['id'];
$email=$_POST['emails'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");
$query = "INSERT INTO `applicants`.`emails` (
`id` ,
`emails` ,
`created`
)
VALUES (
NULL , '$email', NOW( )
);";
mysqli_query($link, $query);
header('location:list.php');
?>