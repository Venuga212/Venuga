<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.error{color:#FF0000;}</style>
</head>
<body>
<?php
$nameErr=$emailErr=$genderErr=$websiteErr="";
$name=$email=$gender=$comment=$website="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_name["name"])){
        $nameErr="please enter your name";
    }else{
        $name=test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr="only letters and white space allowed";
        }
    }
}
if(empty($_POST["email"])){
    $emailErr="Valid Email Address";
}else{
    $email=test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr="The email address is incorrect";
    }
}
if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
function  test_input($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
return $data;
}   
?>
<h2>PHP Form Validation</h2>
<p><span class="error">*required field </span></p>
<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
Full Name:<input type="text" name="name">
<span class="error">*<?php echo $nameErr;?></span>  
    <br><br>
    Gender:
    <input type="radio" name="gender" value="1">Female
    <input type="radio" name="gender" value="2">Male
    <span class="error">*<?php echo $genderErr;?></span> 
    <br><br>
    Email:
    <input type="email" name="email">
    <span class="error">*<?php echo $emailErr;?></span> 
    <br><br>
    Website:
    <input type="website" name="website">
    <span class="error">*<?php echo $websiteErr;?></span> 
    <br><br>
    Comment:
    <textarea name="comment"></textarea>
    <br><br>
    <input type="submit" name="click">
</form>
<?php
echo "<h2>Your Input</h2>";
echo $name ."<br>";
echo $gender ."<br>";
echo $website ."<br>";
echo $email. "<br>";
echo $comment;
?>
    
    
</body>
</html>