<?php
$ID = $_GET['ID'];
$country;
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
    Present Address:<input type="text" name="presentAddress" value="<?php echo $row['presentAddress'];?>" /></br>
    Permanent Address:<input type="text" name="permanentAddress" value="<?php echo $row['permanentAddress'];?>" /></br>

    Country:<select name = "country">
        <option value="Bangladesh"<?php if($country=='Bangladesh')echo "Bangladesh"?>>Bangladesh </option>
        <option value="U.S.A"<?php if($country=='U.S.A')echo "selected=selected"?>>U.S.A </option>
        <option value="U.K"<?php if($country=='U.K')echo "selected=selected"?>>U.K </option>
        <option value="Nepal"<?php if($country=='Nepal')echo "selected=selected"?>>Nepal </option>
</select>
    </br>

    Mobile:<input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /></br>
    email:<input type="text" name="email" value="<?php echo $row['email'];?>" />


    <input type="submit" name="update" value="Update">
</form>