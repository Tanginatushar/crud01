<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "applicants");

$query = "select * from personalInformation ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list_personal_information.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
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
            <td> <a href="edit_personal_information.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete_personal_information.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view_personal_information.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

