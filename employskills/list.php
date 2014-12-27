<?php
//$ID=$_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "employskills");

$query = "select * from empskilref ";

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
        <td>Company Name</td>
        <td>Company Business</td>
        <td>Address</td>
        <td>Designation</td>
        <td>Department</td>
        <td>Employment Duration</td>
        <td>Responsibility</td>
        <td>Experience Category</td>
        <td>Skill Description</td>
        <td>Extracurricular Activity</td>
        <td>Name</td>
        <td>Organisation</td>
        <td>Address</td>
        <td>Relation</td>
        <td>Mobile</td>
        <td>Email</td>



        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
       ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['comName']?></td>
            <td><?php echo $row['comBusiness']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['des']?></td>
            <td><?php echo $row['dep']?></td>
            <td><?php echo $row['emDu']?></td>
            <td><?php echo $row['res']?></td>
            <td><?php echo $row['exCat']?></td>
            <td><?php echo $row['skillDes']?></td>
            <td><?php echo $row['exAct']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['org']?></td>
            <td><?php echo $row['add']?></td>
            <td><?php echo $row['relation']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>






            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>

