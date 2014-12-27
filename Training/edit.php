

<a href="list.php">Go to Home</a>
</br>
</br>

<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");
$query = "select * from `traininginfo` WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">

    <form action="update.php" method="post">
        ID:<input type="number" name="ID" value="<?php echo $row['ID'];?>" /></br>
        Training Title:<input type="text" name="tTitle" value="<?php echo $row['tTitle'];?>" /></br>
        Training Description:<input type="text" name="tDescription" value="<?php echo $row['tDescription'];?>" /></br>
        Institute:<input type="text" name="institute" value="<?php echo $row['institute'];?>" /></br>
        Address:<input type="text" name="address" value="<?php echo $row['address'];?>" /></br>
        Training Area:<input type="text" name="tArea" value="<?php echo $row['tArea'];?>" /></br>
        Training Duration:<input type="text" name="tDuration" value="<?php echo $row['tDuration'];?>" /></br>
        Start Date:<input type="text" name="startDate" value="<?php echo $row['startDate'];?>" /></br>
        End Date:<input type="text" name="endDate" value="<?php echo $row['endDate'];?>" /></br>
        Course Title:<input type="text" name="courseTitle" value="<?php echo $row['courseTitle'];?>" /></br>
        Trainer detail:<input type="text" name="trainerDetail" value="<?php echo $row['trainerDetail'];?>" /></br>

        </br>

        <input type="submit" name="update" value="Update">

    </form>
