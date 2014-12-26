<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contactInfo");

$query = "select * from contactinfo ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list.php">Go to Home</a>
<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New </a> </li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>

        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>Country</td>
        <td>Mobile</td>
        <td>email</td>
        <td>hasPassport</td>

        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
       ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['presentAddress']?></td>
            <td><?php echo $row['permanentAddress']?></td>
            <td><?php echo $row['country']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['hasPassport']?></td>
            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

