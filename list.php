<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");

$query = "select * from applicants_info ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Preferred Track</td>
        <td>SSC Roll</td>
        <td>SSC Board</td>
        <td>HSC Roll</td>
        <td>HSC Board</td>
        <td>Has Laptop</td>
        <td>Preferred Exam Center</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Religion</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>National ID</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>Mobile</td>
        <td>email</td>

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
            <td><?php echo $row['firstName']?></td>
            <td><?php echo $row['lastName']?></td>
            <td><?php echo $row['fatherName']?></td>
            <td><?php echo $row['motherName']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dateOfBirth']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['nationalId']?></td>
            <td><?php echo $row['presentAddress']?></td>
            <td><?php echo $row['permanentAddress']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>

            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

