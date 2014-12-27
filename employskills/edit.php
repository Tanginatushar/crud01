<?php
$ID = $_GET['ID'];
$relation = "";
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employskills");
$query = "select * from empskilref WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <h3>Employment History </h3></br>
    ID:<input type="number" name="ID" value="<?php echo $row['ID'];?>" />
    Company Name:<input type="text" name="comName" value="<?php echo $row['comName'];?>" /></br>
    Company Business:<input type="text" name="comBusiness" value="<?php echo $row['comBusiness'];?>" /></br>
    Address:<input type="text" name="address" value="<?php echo $row['address'];?>" /></br>
    Designation:<input type="text" name="des" value="<?php echo $row['des'];?>" /></br>
    Department:<input type="text" name="dep" value="<?php echo $row['dep'];?>" /></br>
    Employment Duration:<input type="text" name="emDu" value="<?php echo $row['emDu'];?>" /></br>
    Responsibility:<input type="text" name="res" value="<?php echo $row['res'];?>" /></br>
    <h3>ICT Skills</h3><br>
    Experience Category:<input type="text" name="exCat" value="<?php echo $row['exCat'];?>" /></br>
    Skill Description:<input type="text" name="skillDes" value="<?php echo $row['skillDes'];?>" /></br>
    Extracurricular Activity:<input type="text" name="exAct" value="<?php echo $row['exAct'];?>" /></br>

    <h3> Reference</h3><br>
    Name:<input type="text" name="name" value="<?php echo $row['name'];?>" /></br>
    Organisation:<input type="text" name="org" value="<?php echo $row['org'];?>" /></br>
    Address:<input type="text" name="add" value="<?php echo $row['add'];?>" /></br>
    Relation:<select name = "relation">
        <option value="Relative"<?php if($relation=='Relative')echo "Relative"?>>Relative </option>
        <option value="Academic"<?php if($relation=='Academic')echo "selected=selected"?>>Academic </option>

    </select>
    Mobile:<input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /></br>
    email:<input type="text" name="email" value="<?php echo $row['email'];?>" /></br>

    <input type="submit" name="update" value="Update">
</form>