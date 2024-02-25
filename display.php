<?php
            include 'connect.php';
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <input type="text" name="search" >
    <input type="submit" name="search_btn" value="search">
    
    <a href="reg.php"><input type="button" value="+ADD"></a>
    
    <a href="index.php"><input type="button" value="Login page"></a>
    </form>
    <table border=1 align=center>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>phone</th>
            <th>gender</th>
            <th>city</th>
            <th>state</th>
            <th>hobby</th>
            <th>address</th>
            <th>dob</th>
            <th>pincode</th>
        </tr>
 
 <?php

    if(isset($_POST['search_btn']))
    {
      

          $q = "select * from stud where email='".$_POST['search']."' or name ='".$_POST['search']."' or phone= '".$_POST['search']."' " ;
          $data=mysqli_query($con,$q);
          while($row=mysqli_fetch_array($data))
          {       
            ?>

            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['phone']?></td>
          <td><?php echo $row['gender']?></td>
            <td><?php echo $row['city']?></td>
            <td><?php echo $row['state']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['pincode']?></td>
            
            <td><a href="delete.php?id=<?php echo $row['id']?>">delete/</a></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>

          </tr>
           <?php  
        }
        
    } 
    
    else
   
    {
        $q = "select * from stud  " ;
        $data=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($data))
        {       
          ?>

          <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['password']?></td>
          <td><?php echo $row['phone']?></td>
          <td><?php echo $row['gender']?></td>
          <td><?php echo $row['city']?></td>
          <td><?php echo $row['state']?></td>
          <td><?php echo $row['hobby']?></td>
          <td><?php echo $row['address']?></td>
          <td><?php echo $row['dob']?></td>
          <td><?php echo $row['pincode']?></td>
          
          <td><a href="delete.php?id=<?php echo $row['id']?>">delete/</a></td>
          <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>

        </tr>
         <?php  
      }
    }
        ?>

    </table>
  

</body>
</html>