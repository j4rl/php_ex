<?php
if(isset($_GET['toggle'])){
    $varToggle = true;
}else{  
    $varToggle = false;
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
<?php if(isset($varToggle) && $varToggle){ ?>
    <h1>Fått 🐐-variabel</h1>
    <p>Variabeln är: <?=$_GET['toggle']?></p>
<?php }else{ ?>
    <h1>Ingen data</h1>
<?php } ?>
    <a href="test2.php?toggle=true">Tryck här</a>
</body>
</html>