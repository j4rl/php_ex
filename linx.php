<!DOCTYPE html>
<?php
    $user="root";
    $pass="";
    $server="localhost";
    $db="php_ex";
    $conn=new mysqli($server,$user,$pass,$db);

    if(isset($_POST['btn'])){
        $url=$_POST['url'];
        $description=$_POST['description'];
        $sql="INSERT INTO linx(url,description) VALUES('$url','$description')";
        $conn->query($sql);
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="linx.php" method="post">
        <input type="text" name="url" placeholder="URL">
        <input type="text" name="description" placeholder="Beskrivning">
        <input type="submit" name="btn" value="Spara">
    </form>
<?php
    $sql="SELECT * FROM linx";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<a href='".$row['url']."'>".$row['description']."</a> <i>inlagd ".$row['date_stored']."<i><br>";
    }
?>

</body>
</html>