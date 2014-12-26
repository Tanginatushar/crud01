<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "personalInfo");
$query = "select * from personalinfo WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" />
    Full Name:<input type="text" name="fullName" value="<?php echo $row['fullName'];?>" />
    Father's Name:<input type="text" name="fatherName" value="<?php echo $row['fatherName'];?>" />
    Mother's Name:<input type="text" name="motherName" value="<?php echo $row['motherName'];?>" />
    Religion:<input type="text" name="religion" value="<?php echo $row['religion'];?>" />
    dateOfBirth:<input type="text" name="dateOfBirth" value="<?php echo $row['dateOfBirth'];?>" />


    <button type="submit">Submit</button>
</form>