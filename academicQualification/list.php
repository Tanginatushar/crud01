<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");

$query = "select * from academicQualification ";

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
        <td>levelOfEducation</td>
        <td>examTitle</td>
        <td>subject</td>
        <td>institution</td>
        <td>resultType</td>
        <td>result</td>
        <td>scale</td>
        <td>passingYear</td>
        <td>duration</td>
        <td>achievement</td>

        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
         ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['levelOfEducation']?></td>
            <td><?php echo $row['examTitle']?></td>
            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['resultType']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['rscale']?></td>
            <td><?php echo $row['passingYear']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>

            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

