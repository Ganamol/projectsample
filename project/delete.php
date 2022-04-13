<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"delete from studreg_tb where id='$id'");
mysqli_query($con,"delete from login where id='$id'");
echo "<script>alert('delete successfully')</script>";
echo "<script>window.location.href='view.php';</script>";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>