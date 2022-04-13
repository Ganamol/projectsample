<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $pic=$_FILES['f1']['name'];
  
    if($pic!="")
    {
        $filearray=pathinfo($_FILES['f1']['name']);
        $file1=rand();
        $file_ext=$filearray["extension"];

        $filenew=$file1 .".".$file_ext;


        move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);

    }
    else
    {
        echo "<script>alert('please try again')</script>";
    }
    mysqli_query($con,"INSERT INTO `fileup`(  `file`) VALUES ('$filenew')");




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
    
<!-- file upload -->
<form method="post"  enctype="multipart/form-data">

<input type="file" id="image_id" name="f1" placeholder="image" >

<button name="submit">Submit</button>
<a href="fileuploadview.php">view</a>




</form>

</body>
</html>