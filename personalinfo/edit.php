<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personalInfo");
$query = "select * from personalinfo WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" /></br>
    Full Name:<input type="text" name="fullName" value="<?php echo $row['fullName'];?>" /></br>
    Father's Name:<input type="text" name="fatherName" value="<?php echo $row['fatherName'];?>" /></br>
    Mother's Name:<input type="text" name="motherName" value="<?php echo $row['motherName'];?>" /></br>
    Religion:<input type="text" name="religion" value="<?php echo $row['religion'];?>" /></br>
    dateOfBirth:<input type="text" name="dateOfBirth" value="<?php echo $row['dateOfBirth'];?>" /></br>
    nationalId:<input type="text" name="nationalId" value="<?php echo $row['nationalId'];?>" /></br>


    <button type="submit">Update</button>
</form>