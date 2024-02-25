<?php
            include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

        if(isset($_POST['sub_btn']))
        {

                $q = "insert into stud values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['phone']."','".$_POST['gender']."','".$_POST['city']."','".$_POST['state']."','".$_POST['hobby']."','".$_POST['address']."','".$_POST['dob']."','".$_POST['pincode']."') ";
              $insert =  mysqli_query($con,$q);
                    
        }

    ?>
</head>
<body>
    <center>
    <h2>Registration form</h2>    
    <form method="post" >
            First Name:
            <input type="text" name="name" >
    <br><br>


    
    
    Email :
            <input type="text" name="email" >
    <br><br>

    
    password:
            <input type="password" name="pass" >
    <br><br>

    
    pjone number:
            <input type="number" name="phone" >
    <br><br>

   gender:
            <input type="radio" name="gender" value="male" > male 
            <input type="radio" name="gender" value="female" > female 
    <br><br>

    city:
    
    <select name="city" >
        <option value="surat">surat</option>
        <option value="vapi">vapi</option>
        <option value="pune">pune</option>
    </select>

    state:
    <select name="state" >
        <option value="gujarat">gujart</option>
        <option value="rajasthan">rajasthan</option>
        <option value="maharastra">maharastra</option>
    </select>
    <br><br>

  hobby:
  <input type="checkbox" name="hobby"  value="danceing">danceing
  <input type="checkbox" name="hobby" value="cricket" >cricket
  <input type="checkbox" name="hobby" value="singing">singing
        
  <br><br>

    address:
        <input type="text" name="address" >
        <br><br>
    dob:
        <input type="date" name="dob" >
        <br>
    pincode:
        <input type="number" name="pincode" ><br>

    <input type="submit" value="submit" name="sub_btn">
    <button><a href="display.php">display</a></button>
        </form>
    </center>
</body>
</html>