<?php

$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");

$query = "select * from personalinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a>