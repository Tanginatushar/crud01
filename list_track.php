<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");

$query = "select * from track ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list_track.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Preferred Track</td>
        <td>SSC Roll</td>
        <td>SSC Board</td>
        <td>HSC Roll</td>
        <td>HSC Board</td>
        <td>Has Laptop</td>
        <td>Preferred Exam Center</td>
        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        print_r($row) ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['preferredTrack']?></td>
            <td><?php echo $row['sscRoll']?></td>
            <td><?php echo $row['sscBoard']?></td>
            <td><?php echo $row['hscRoll']?></td>
            <td><?php echo $row['hscBoard']?></td>
            <td><?php echo $row['hasLaptop']?></td>
            <td><?php echo $row['preferredExamCenter']?></td>

            <td> <a href="edit_track.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete_track.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view_track.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

