<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");
$query = "select * from contactinfo WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" />
    Present Address:<input type="text" name="presentAddress" value="<?php echo $row['presentAddress'];?>" />
    Permanent Address:<input type="text" name="permanentAddress" value="<?php echo $row['permanentAddress'];?>" />
    Mobile:<input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    email:<input type="text" name="email" value="<?php echo $row['email'];?>" />


    <input type="submit" name="update" value="go">
</form>