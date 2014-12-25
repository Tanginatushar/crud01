<?php


$ID=$_POST['ID'];
$levelOfEducation = $_POST['levelOfEducation'];
$degreeName  = $_POST['degreeName'];
$group = $_POST['group'];
$institute  = $_POST['institute'];
$result = $_POST['result'];
$passingYear=$_POST['passingYear'];
$preferredExamCenter=$_POST['preferredExamCenter'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "INSERT INTO `applicants`.`track` (
`ID`,
`levelOfEducation` ,
`degreeName`,
`group`,
`institute`,
`result`,
`passingYear`,
`preferredExamCenter`
)
VALUES (
    '$ID', '$levelOfEducation', '$degreeName','$group ','$institute','$result','$passingYear','$preferredExamCenter'

)";

mysqli_query($link, $query);

header('location:list_track.php');
?>