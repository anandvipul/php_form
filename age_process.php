<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligible to Vote?</title>
</head>
<body>
    <h1>Eligible to Vote ???</h1>
    <?php
    if ($_GET['age'] >= 18) {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
</body>
</html>