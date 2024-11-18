<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['submit'])){
            $fornamn = $_GET['fornamn'];
            $efternamn = $_GET['efternamn'];
            echo "<h1>Hej $fornamn $efternamn!</h1>";
        }else{
    ?>
    <h1>Formulär</h1>
    <form action="index.php" method="GET">
        <input type="text" name="fornamn" placeholder="Förnamn">
        <input type="text" name="efternamn" placeholder="Efternamn">
        <input type="submit" name="submit" value="Skicka">
    </form>
    <?php   }  ?>
</body>
</html>
<script>
    const forn= document.querySelector('input[name="fornamn"]');
    forn.addEventListener('input', function(){
        if(forn.value === "Charlie"){
            alert("Inget fusk!");
        }
    });
</script>