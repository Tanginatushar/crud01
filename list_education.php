<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "select * from education ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list_education.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>levelOfEducation</td>
        <td>degreeName</td>
        <td>Group</td>
        <td>institute</td>
        <td>result</td>
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
            <td><?php echo $row['levelOfEducation']?></td>
            <td><?php echo $row['degreeName']?></td>
            <td><?php echo $row['group']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['hasLaptop']?></td>
            <td><?php echo $row['preferredExamCenter']?></td>
            <td> <a href="edit_track.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete_track.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view_track.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

