<?php
        include 'connect.php';
    $id=$_GET['id'];

    $q="delete from stud where id=$id";
    mysqli_query($con,$q);
    header("location:display.php");
?>