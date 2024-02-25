<?php
        include 'connect.php';
    $uid=$_GET['id'];


    
    if(isset($_GET['id']))
    {
        $qry="select * from stud where id='".$uid."'";
        $data=mysqli_query($con,$qry);
        $row=mysqli_fetch_array($data);
    }

    if(isset($_POST['sub_btn']))
    {

            $q = "update stud set name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['pass']."',phone='".$_POST['phone']."',gender='".$_POST['gender']."',city='".$_POST['city']."',state='".$_POST['state']."',hobby='".$_POST['hobby']."',address='".$_POST['address']."',dob='".$_POST['dob']."',pincode='".$_POST['pincode']."' where id='".$uid."' ";
          mysqli_query($con,$q);

           header("location:display.php");
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <center>
    <h2>update form</h2>    
    <form method="post" >
            First Name:
            <input type="text" name="name" value=<?php echo $row['name']; ?> >
    <br><br>


    
    
    Email :
            <input type="text" name="email"  value=<?php echo $row['email']; ?>>
    <br><br>

    
    password:
            <input type="password" name="pass"  value=<?php echo $row['password']; ?> >
    <br><br>

    
    phone number:
            <input type="number" name="phone" value=<?php echo $row['phone']; ?> >
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
        <input type="text" name="address" value=<?php echo $row['address']; ?> >
        <br><br>
    dob:
        <input type="date" name="dob" value=<?php echo $row['dob'];?> >
        <br>
    pincode:
        <input type="number" name="pincode" value=<?php echo $row['pincode'];?> ><br>

    <input type="submit" value="submit" name="sub_btn">
    <button><a href="display.php">display</a></button>
        </form>
    </center>
</body>
</html>