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
        function h(?string $value): string
        {
            return htmlspecialchars($value ?? "", ENT_QUOTES, "UTF-8");
        }

        $story = (string) ($_POST['hela_storyn'] ?? "");

        if(isset($_POST['btn'])){
            $story = trim($story." ".(string) ($_POST['story'] ?? ""));
        }
    ?>
    <div class="container">
        <h1>Storyn:</h1>
        <p><?=h($story)?></p>
    </div>
    <form action="index.php" method="POST">
        <input type="text" name="story" placeholder="Skriv nåt...">
        <input type="hidden" name="hela_storyn" value="<?=h($story)?>">
        <input type="submit" name="btn" value="Skicka">
    </form>
</body>
</html>
