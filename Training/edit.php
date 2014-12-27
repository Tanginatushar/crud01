<?php
$ID = $_GET['ID'];
$relation = "";
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");
$query = "select * from traininginfo WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    ID:<input type="number" name="ID" value="<?php echo $row['ID'];?>" />
