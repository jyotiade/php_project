<?php
$stuname=$_POST["nm"];
$city=$_POST["city"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightblue">
    <?php
    echo "<h1>Student name= $stuname </h1>";
    echo "<h1>City name= $city </h1>";
    ?>
</body>
</html>