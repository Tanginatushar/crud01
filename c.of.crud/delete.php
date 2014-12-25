<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");

$query = "DELETE FROM `applicants`.`emails` WHERE `emails`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>