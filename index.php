<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST['hela_storyn'])){
            $story = "";
        }

        if(isset($_POST['btn'])){
            $story = $_POST['hela_storyn'].$_POST['story'];
        }
    ?>
    <h1>Story</h1>
    <p><?=$story?></p>
    <form action="index.php" method="POST">
        <input type="text" name="story" placeholder="Skriv nåt...">
        <input type="hidden" name="hela_storyn" value="<?=$story?>">
        <input type="submit" name="btn" value="Skicka">
    </form>
</body>
</html>