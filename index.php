<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

echo "<h1> Forms </h1>";

?>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-main: <input type="text" name="email"><br>
<input type="submit">
</form>
<hr>
<form action="age_process.php" method="get">
    Your Age: <input type="number" name="age">
    <input type="submit" >
</form>
</body>
</html>

