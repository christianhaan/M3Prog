<?php
    $title = "docker leren";
    $afbeelding = "https://commons.wikimedia.org/wiki/File:PHP-logo.svg";
    $imgtitle = "foto";
    $auther = "christian haan";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1><?= $title?></h1>
        <img src="<?php echo $afbeelding?>" alt="<?php echo $imgtitle?>">
        <p>Auther: <?= $auther?></p>
</body>
</html>