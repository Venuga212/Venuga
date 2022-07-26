<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && (isset($_POST["add"]))){
    
$conn=mysqli_connect("localhost","root","","training") or die("connection failed" .mysqli_connect_error()); 
if(isset($_POST["name"]) && isset($_POST["details"]) && isset($_POST["language_id"]) && isset($_POST["birth_date"])
&&isset($_POST["gender"]) && isset($_POST["tech_language"])){
    
$Name=$_POST["name"];
$Details=$_POST["details"];
$Language=$_POST["language_id"];
$Birth=$_POST["birth_date"];
$Tech=$_POST["tech_language"];
$Gender=$_POST["gender"];
$sql="INSERT INTO employees(name,details,language_id,gender,birth_date,tech_language) VALUES ('$Name','$Details','$Language','$Birth','$Tech','$Gender')";
  $query=mysqli_query($conn,$sql);
if ($query) {
    echo "successful";
} else {
    echo "Error";
}
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
<body><form method="POST">
    <table>
        <tbody>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Details:</label></td>
                <td><input type="textarea" name="details"></td>
            </tr>
            <tr>
                <td><label>Languages:</label></td>
                <td><input type="checkbox" name="language_id[]" class="one">
                <label for="one" value="1">Tamil</label>
                <input type="checkbox" name="language_id[]" class="two">
                <label for ="two" value="2">English</label></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td><input type="radio" name="gender[]" class="thr">
                <label for="thr" value="1">Male</label>
                <input type="radio" name="gender[]"class="for">
                <label for="for" value="2">Female</label></td>
            </tr>
            <tr>
                <td><label>DOB:</label></td>
                <td><input type="date" name="birth_date"></td>
            </tr>
            <tr>
                <td><label>Technical languages:</label></td>
                <td><select name="tech_language">
                    <option value="1">Python</option>
                    <option value="2">C</option>
                    <option value="3">C++</option>
                    <option value="4">Java</option></select></td>
            </tr>
            <tr>
                <td><input type="submit" name="add"></td>
                
            </tr>
        </tbody>
    </table></form>
    
</body>
</html>