<?php

$ID=$_POST['ID'];
$preferredTrack = $_POST['preferredTrack'];
$sscRoll  = $_POST['sscRoll'];
$sscBoard = $_POST['sscBoard'];
$hscRoll  = $_POST['hscRoll'];
$hscBoard = $_POST['hscBoard'];
$hasLaptop=$_POST['hasLaptop'];
$preferredExamCenter=$_POST['preferredExamCenter'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "INSERT INTO `applicants`.`track` (
`ID`,
`preferredTrack` ,
`sscRoll`,
`sscBoard`,
`hscRoll`,
`hscBoard`,
`hasLaptop`,
`preferredExamCenter`
)
VALUES (
    '$ID', '$preferredTrack', '$sscRoll','$sscBoard ','$hscRoll','$hscBoard','$hasLaptop','$preferredExamCenter'
)";

mysqli_query($link, $query);

header('location:list_track.php');
?>