<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && (isset($_POST["submit"]))){
    $conn=mysqli_connect('localhost','root','','first') or die("connection failed" .mysqli_connect_error());
    if(isset($_POST["name"]) &&isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["blood"])){
        $Name=$_POST["name"];
        $Email=$_POST["email"];
        $Phone=$_POST["phone"];
        $Blood=$_POST["blood"];

     $sql="INSERT INTO blood(name,email,phone,blood_group) VALUES ('$Name','$Email','$Phone','$Blood')";
       $query= mysqli_query($conn,$sql);
     if($query){
        echo "Succeeded";
    }
    else{
        echo "Error occured";
    }
     }  
    }

?>