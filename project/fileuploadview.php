<?php
include 'connection.php';

$var=mysqli_query($con,"select * from fileup");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,th{
            border:1px solid black;
            border collapse:collapse;
            height=250 width=100
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>Id</th>
        <th>images</th>
  


    <?php
    while($row=mysqli_fetch_assoc($var))
    {
?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><img src="images/<?php echo $row['file'];?>" height="100" width="200"></td>

</tr>
<?php
    }
    ?>
      </table>
</body>
</html>