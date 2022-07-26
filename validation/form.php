<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
$fullname=$gender=$age=$number=$email=$comment="";
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname= test_input($_POST["name"]);
    $gender= test_input($_POST["gender"]);
    $age= test_input($_POST["age"]);
    $number= test_input($_POST["number"]);
    $email= test_input($_POST["email"]);
    $comment= test_input($_POST["comment"]);
}
function  test_input($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}   
?>

<h2>Form Validation</h2>
<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
    Full Name:<input type="text" name="name">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="1">Female
    <input type="radio" name="gender" value="2">Male
    <br><br>
    Age:
    <input type="text" name="age">
    <br><br>
    Number(optional):
    <input type="text" name="number">
    <br><br>
    Email:
    <input type="email" name="email">
    <br><br>
    Comment:
    <textarea name="comment"></textarea>
    <br><br>
    <input type="submit" name="click">

<?php
echo "<h2>Your Input</h2>";
echo $fullname ."<br>";
echo $gender ."<br>";
echo $age ."<br>";
echo $number ."<br>";
echo $email. "<br>";
echo $comment;
?>
</form>
</body>
</html>