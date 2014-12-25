<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "applicants");

$query = "select * from emails ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list.php">Go to Home</a><table border="1" width="50%">
    <tr>
        <td>id</td>
        <td>emails</td>
        <td>created</td>

        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        print_r($row) ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['emails']?></td>
            <td><?php echo $row['created']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> </td>
            <td><a href="view.php?id=<?php echo $row['id']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

