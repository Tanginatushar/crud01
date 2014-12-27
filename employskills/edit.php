<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employskills");
$query = "select * from empskilref WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    ID<input type="text" name="ID" value="<?php echo $row['ID'];?>" />
    Company Name:<input type="text" name="comName" value="<?php echo $row['comName'];?>" /></br>
    Company Business:<input type="text" name="comBusiness" value="<?php echo $row['comBusiness'];?>" /></br>
    Address:<input type="text" name="address" value="<?php echo $row['address'];?>" /></br>
    Designation:<input type="text" name="des" value="<?php echo $row['des'];?>" /></br>
    Department:<input type="text" name="dep" value="<?php echo $row['dep'];?>" /></br>
    Employment Duration:<input type="text" name="emDu" value="<?php echo $row['emDu'];?>" /></br>
    Responsibility:<input type="text" name="res" value="<?php echo $row['res'];?>" /></br>
    Experience Category:<input type="text" name="exCat" value="<?php echo $row['exCat'];?>" /></br>
    Skill Description:<input type="text" name="skillDes" value="<?php echo $row['skillDes'];?>" /></br>
    Extracurricular Activity:<input type="text" name="exAct" value="<?php echo $row['exAct'];?>" /></br>
    Name:<input type="text" name="name" value="<?php echo $row['name'];?>" /></br>
    Organisation:<input type="text" name="org" value="<?php echo $row['org'];?>" /></br>
    Address:<input type="text" name="add" value="<?php echo $row['add'];?>" /></br>
    Relation :<input type="text" name="relation" value="<?php echo $row['relation'];?>" /></br>
    Mobile:<input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /></br>
    email:<input type="text" name="email" value="<?php echo $row['email'];?>" /></br>

    <input type="submit" name="update" value="Update">
</form>