<?php
$ID = $_GET['ID'];
$levelOfEducation=" ";
;
$resultType=" ";

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");
$query = "select * from academicQualification WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">

   Level of education:<select name = "levelOfEducation">
        <option value="Masters"<?php if($levelOfEducation=='Masters')echo "Masters"?>>Masters</option>
        <option value="bachelor"<?php if($levelOfEducation=='bachelor')echo "selected=selected"?>>bachelor</option>
        <option value="hsc"<?php if($levelOfEducation=='hsc')echo "selected=selected"?>>hsc</option>
        <option value="ssc"<?php if($levelOfEducation=='ssc')echo "selected=selected"?>>ssc </option>

    </select>
    </br>
    Subject:<input type="text" name="subject" value="<?php echo $row['subject'];?>" /></br>
    Institution:<input type="text" name="institution" value="<?php echo $row['institution'];?>" /></br>
    Result Type:
    <select name = "resultType">
        <option value="Grade"<?php if($resultType=='Grade')echo "Grade"?>>Grade</option>
        <option value="Division"<?php if($resultType=='Division')echo "selected=selected"?>>Division</option>

        </select>>

    Result:<input type="text" name="result" value="<?php echo $row['result'];?>" /></br>
    Scale:<input type="number" name="rscale" value="<?php echo $row['rscale'];?>" /></br>
    Passing Year:<input type="number" name="passingYear" value="<?php echo $row['passingYear'];?>" /></br>
    Duration In Year:<input type="number" name="duration" value="<?php echo $row['duration'];?>" /></br>
    Achievement:<input type="text" name="achievement" value="<?php echo $row['achievement'];?>" /></br>




    <input type="submit" name="update" value="Update">
</form>