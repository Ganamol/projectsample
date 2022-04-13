<?php
include 'connection.php';
$id=$_GET['id'];
$data=mysqli_query($con,"select * from studreg_tb  where id='$id'");

$row=mysqli_fetch_assoc($data);
$gender= $row['gender'];

$qualification=$row['qualification'];
$qua = explode(',',$qualification);
// var_dump($qua);
//  exit();

$data1=mysqli_query($con,"select * from login where id='$id'");

$row1=mysqli_fetch_assoc($data1);



if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
   $email=$_POST['email'];
   $phone=$_POST['phone_no'];
   $u_name=$_POST['u_name'];
   $pwd=$_POST['pwd'];
   $qualification=$_POST['qualification'];

  
   mysqli_query($con,"UPDATE studreg_tb SET name='$name',dob='$dob',email='$email',phone_no='$phone',qualification='$qualification' WHERE id='$id'");
   mysqli_query($con,"update login set u_name='$u_name',pwd='$pwd' where id='$id'");
  
     echo "<script>alert('Update successfully')</script>";
   echo "<script>window.location.href='view.php';</script>";

}
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
<form method="POST">
Name: <input type="text" value="<?php echo $row['name'];?>"  name="name"><br>
 DOB: <input type="date" value="<?php echo $row['dob'];?>" name="dob"> <br>
gender: <input type="radio" name="gender" value="male" <?php if($gender=='Male') echo 'checked="checked"'?>>male
<input type="radio" name="gender" value="female" <?php if($gender=='Female') echo 'checked="checked"'?>>female
<br>


Email: <input type="email" value="<?php echo $row['email'];?>" name="email"> <br>
phone: <input type="text" value="<?php echo $row['phone_no'];?>" name="phone_no"><br>

username: <input type="text" value="<?php echo $row1['u_name'];?>" name="u_name"> <br>
Password: <input type="text" value="<?php echo $row1['pwd'];?>" name="pwd"> <br>


Qualification: <input type="checkbox" name="qualification" value="SSLC" <?php if(in_array("SSLC",$qua)){echo "checked";}?>>SSLC
<input type="checkbox" name="qualification" value="PLUS TWO" <?php if(in_array("PLUS TWO",$qua)){echo "checked";}?>>PLUSTWO

<button name="submit">Update</button>

</form>
</body>
</html>