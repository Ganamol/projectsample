<?php
 include 'connection.php';
 
 if(isset($_POST['login']))
 {
     $u_name=$_POST['u_name'];
     $pwd=$_POST['pwd'];

     $data=mysqli_query($con,"select * from login where u_name='$u_name' and pwd='$pwd'");
    //  var_dump($u_name);
    //  exit();
     if(mysqli_num_rows($data)>0)
     {
       header("location:forms.php");
     }
     else
     {
        echo "<script>alert('Invalid Username or password')</script>";
  

     }
     
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
<center>
    <table>
        <tr>
        <td>User Name</td><td> <input type="text" name="u_name" value="u_name"></td><br>
<br></tr>
<tr>

        <td>Password</td><td> <input type="text" name="pwd" value="pwd"></td><br>
        
        <br>
        <tr>
        <td><button name="login">submit</button></td></tr>
    </table>
</center>

</form>
</body>

</html>