<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

echo "<h1> Forms </h1>";

?>

<?php 

$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    empty($_POST["name"]) ? $nameErr = "name is required" : $name = test_input($_POST["name"]);
    empty($_POST['email']) ? $emailErr = "Email is Required" : $email = test_input($_POST["email"]);
    empty($_POST["gender"]) ? $genderErr = "Gender is required" : $gender = test_input(($_POST["gender"]));
    empty($_POST["website"]) ? $website = "" : $website = test_input($_POST["website"]);
    empty($_POST["comment"]) ? $comment = "" : $comment = test_input($_POST["comment"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<p class="error">* required field</p>
    Name: <input type="text" name="name"><span class="error"><?php echo $nameErr ?> </span><br>
    E-mail: <input type="text" name="email"> <span class="error"> <?php echo $emailErr ?></span><br>
    Website: <input type="text" name="website"><span class="error"><?php echo $websiteErr ?></span><br>
    Comment: <textarea type="comment" name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error"><?php echo $genderErr ?></span>
<br>
    <input type="submit" >
</form>



</body>
</html>

