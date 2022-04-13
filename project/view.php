<?php
include 'connection.php';
$data=mysqli_query($con,"select * from studreg_tb JOIN login ON login.id=studreg_tb.id");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,tr,td
        {
      border: 2px solid black;
      border collapse:collapse;

        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
           
            <th>DOB</th>
             <th>Gender</th>
            <th>Email</th>
            <th>Phoneno</th>
            <th>username</th>
            <th>Password</th>
            <th>Qualification</th>.
            <th>District</th>
            <th>Action</th>
            <th>Action</th>


        


        </tr>
        
            <?php
            while($row=mysqli_fetch_assoc($data))
            {
            ?>
        <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone_no'];?></td>
        <td><?php echo $row['u_name'];?></td>
        <td><?php echo $row['pwd'];?></td>
        <td><?php echo $row['qualification'];?></td>
        <td><?php echo $row['district'];?></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>">delete</td>
        <td><a href="Edit.php?id=<?php echo $row['id']?>">Edit</td>
         </tr>

           <?php
            }
            ?>
    </table>
    
</body>
</html>