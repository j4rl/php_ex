<?php
    if(isset($_POST['btn'])){
        $txt = $_POST['txt'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$txt?></h1>
</body>
</html>