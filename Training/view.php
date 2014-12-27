<?php

$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");

$query = "select * from traininginfo WHERE ID = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

echo ($row);
?>

<a href="list.php">Go to Home</a>