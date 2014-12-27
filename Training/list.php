<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "training");

$query = "select * from traininginfo ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list.php">Go to Home</a>
<ul>

    <li><a href="create.html">Create New </a> </li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>

        <td>Training Title</td>
        <td>Training Description</td>
        <td> Institute</td>
        <td>Address</td>
        <td>Training Area</td>
        <td> Training Duration</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Course Title</td>
        <td>Trainer detail</td>



        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['tTitle']?></td>
            <td><?php echo $row['tDescription']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['tArea']?></td>
            <td><?php echo $row['tDuration']?></td>
            <td><?php echo $row['startDate']?></td>
            <td><?php echo $row['endDate']?></td>
            <td><?php echo $row['courseTitle']?></td>
            <td><?php echo $row['trainerDetail']?></td>
            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

