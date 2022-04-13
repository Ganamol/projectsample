<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    
     $dob=$_POST['dob'];
    
    $gender=$_POST['gender'];
    // var_dump($gender);exit();
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];

    $qualification=implode(',',$_POST['qualification']);
  
   $district=$_POST['district'];

    mysqli_query($con,"INSERT INTO studreg_tb(name,dob,gender,email,phone_no,qualification,district)VALUES('$name','$dob','male','$email','$phone','$qualification','$district')");
    mysqli_query($con,"INSERT INTO login(u_name,pwd) VALUES('$uname','$pwd')");

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
    <table>
       
   <tr>
    <td> Name: </td><td><input type="text"  name="name"  id="name_id" onkeyup="clearmsg(sp1)">  <span id="sp1" style="color:red;"></span> </td><br>
  
  
   
   
   
</tr>
<tr>
    <td> Date of Birth:</td>  <td><input type="date" id="dob_id" name="dob" required >  <span id="sp2" style="color:red;"></span></td><br></tr>

  
  
    <tr> <td> gender:</td>  <td><input type="radio" name="gender"  id="gender_id">Male
     <input type="radio" name="gender"  id="gender_id">Female</td><br></tr> 
 <span id="sp3" style="color:red;" ></span>
 
 <span id="" style=  ></span>
   <tr> <td> email:</td>  <td><input type="email" id="email_id" name="email"><span id="sp4" style="color:red;" ></span></td><br></tr>

   
    <tr><td> phone No:</td> <td> <input type="text" id="phone_id" name="phone"><span id="sp5" style="color:red;" ></span></td><br></tr>

    
   <tr> <td>  username: </td> <td><input type="text" id="uname_id" name="uname"> <span id="sp6" style="color:red;" ></span></td><br></tr> 
  
   <tr><td> password:</td> <td> <input type="password" id="pwd_id" name="pwd">   <span id="sp7" style="color:red;" ></span></td><br></tr> 


   <tr><td> Qualification : </td>  <td> <input type="checkbox" name="qualification[]" id="qualification_id" value="SSLC"> SSLC
   <input type="checkbox" name="qualification[]" value="PLUS TWO" id="qualification_id" >PLUS TWO </td></tr>
   <span id="sp8" style="color:red;" ></span>
  
  <tr><td>District:</td>
  <td> <select name="district" required>
      <option ></option>
<option value="alapuzha" >Alapuzha</option>
<option value="thrissur" >Thrissur</option>
<option value="kozhikode">Kozhikode</option>
<option value="kannur" >Kannur</option>
<option value="kasargod">Kasargod</option>
<option value="vayanad">Vayanad</option>
 </select> <span id="sp9" style="color:red;" ></span>

</td></tr>
   <td></td>



    <td><button name="submit" onclick="return validate()">Submit</button></td>

   



    
</table>
</form>
</body>
<script>
        function validate()
        {
            var name=document.getElementById("name_id").value;
             var dob=document.getElementsById("dob_id").value;
            var gen=document.getElementsById("gender_id").value;
            var email=document.getElementById("email_id").value;
            var phone=document.getElementById("phone_id").value;
            var uname=document.getElementById("uname_id").value;
            var pwd=document.getElementById("pwd_id").value;

             var dis=document.getElementById("dist_id").value;

      var qua[]=document.gerElementById("qualification_id").value;
     
        if(name=="")
        {
            document.getElementById("sp1").innerHTML="Enter name";
            return false;
        }
    

if(dob=="")

{
          // radio vali

          flag=true;
         for(i=0;i<gender_id.length;i++)
         {
             if(gender_id[i].checked==true)
             {
                 flag=false;
                 break;
             }
         }
          if(flag)
          {
              document.getElementById("sp3").innerHTML="SELECT GENDER";
              return false;

          }



}


        if(email=="")
        {
            document.getElementById("sp4").innerHTML="Enter email";
            return false;
        }
        if(phone=="")
        {
            document.getElementById("sp5").innerHTML="Enter phone";
            return false;
        }

        if(uname=="")
        {
            document.getElementById("sp6").innerHTML="Enter uname";
            return false;
        }
        if(pwd=="")
        {
            document.getElementById("sp7").innerHTML="Enter password";
            return false;
        }

    // chekbox vali
if(qua[]=="")
{
          flag=true;
          for(i=0;i<qualification_id.length;i++)
              {
           if(qualification_id[i].checked==true)
             {
            flag=false;
              break;
              }
             }

            if(flag)
          {
              document.getElementById("sp8").innerHTML="SELECT qualification";
              return false;

          }
}

// if(dis=="")
// {
//     document.getElementById("sp9").innerHTML="Select District;
//             return false; 
// }




        function clearmsg(SP)
             {
          document.getElementById(SP).innerHTML="";

             }

            }
      

    </script>
   
</html>