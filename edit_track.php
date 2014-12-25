<?php

$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "UPDATE `track ` SET preferredTrack=$preferredTrack  WHERE `ID` =$ID";

$result=mysqli_query($link, $query);


header('location:list_track.php');
?>