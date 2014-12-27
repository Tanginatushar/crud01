<?php
$ID=$_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personalInfo");

$query = "select * from personalinfo";

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
        <td>Full Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Religion</td>
        <td>Date of Birth</td>
        <td>National ID</td>

        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['fullName']?></td>
            <td><?php echo $row['fatherName']?></td>
            <td><?php echo $row['motherName']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dateOfBirth']?></td>
            <td><?php echo $row['nationalId']?></td>


            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

