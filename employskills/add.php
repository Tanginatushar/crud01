<?php
$ID = $_POST['ID'];
$comName = $_POST['comName'];
$comBusiness = $_POST['comBusiness'];
$address = $_POST['address'];
$des=$_POST['des'];
$dep=$_POST['dep'];
$emDu = $_POST['emDu'];
$res=$_POST['res'];
$exCat = $_POST['exCat'];
$skillDes = $_POST['skillDes'];
$exAct = $_POST['exCat'];
$name = $_POST['name'];
$org=$_POST['org'];
$add = $_POST['add'];
$relation = $_POST['relation'];
$mobile=$_POST['mobile'];
$email = $_POST['email'];




$link = mysqli_connect("localhost",
"root",
"lict@2",
"employskills");
$query = "INSERT INTO `employskills`.`empskilref` (
`ID` ,
`comName` ,
`comBusiness` ,
`address` ,
`des` ,
`dep` ,
`emDu` ,
`res` ,
`exCat` ,
`skilldes` ,
`exAct` ,
`name` ,
`org` ,
`add` ,
`relation` ,
`mobile` ,
`email`
)
VALUES (
    '$ID', '$comName', '$comBusiness', '$address', '$des', '$dep', '$emDu','$res', '$exCat', '$skillDes', '$exAct', '$name', '$org',
    '$add', '$relation', '$mobile', '$email', 'rt'
)";
mysqli_query($link, $query);

header('location:list.php');
?>