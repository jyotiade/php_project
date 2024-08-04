<?php
$stuname=$_GET["nm"];
$city=$_GET["city"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightpink">
    <?php
    echo "<h1>Student name= $stuname </h1>";
    echo "<h1>City name= $city </h1>";
    ?>
</body>
</html>