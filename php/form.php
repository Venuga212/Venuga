<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Blood donation camp</h1>
<body bgcolor="#FF3377">
    <div><h2>Registration Form</h2></div>
    <form action='connect.php' method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone Num:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Blood Group:</label><br>
        <input type="text" name="blood" required><br><br>

        <input type="submit" name="submit">

    </form>
    
    
</body>
</html>