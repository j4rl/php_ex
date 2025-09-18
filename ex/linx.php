<!DOCTYPE html>
<?php
    $user="root";
    $pass="";
    $server="localhost";
    $db="php_ex";
    $conn=new mysqli($server,$user,$pass,$db);  // Connect to the database server and select the database to make a database connection

    // Check if del is set in the URL with a GET request
    if(isset($_GET['del'])){
        $id=$_GET['del']; // Get the value of del from the URL
        $sql="DELETE FROM linx WHERE id=$id"; // SQL query to delete the row with the id from the URL
        $conn->query($sql); // Execute the query
    }


    // Check if btn is set in the POST request IE if the form is submitted
    if(isset($_POST['btn'])){
        $url=fixUrl($_POST['url']); // Fix the URL, see function below
        $description=$_POST['description']; 
        $sql="INSERT INTO linx(url,description) VALUES('$url','$description')"; // SQL query to insert the URL and description into the linx table
        $conn->query($sql); // Execute the query
    }

    // Function to fix URL if it doesn't start with https:// and actually who cares about http:// ???
    function fixUrl($url){
        if(strpos($url,"https://")===false){ // If https:// is not found in the URL
            return "https://".$url; // Add https:// to the URL
        }
        return $url; // Return the URL as is
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="linx.php" method="post">
        <input type="text" name="url" placeholder="URL">
        <input type="text" name="description" placeholder="Beskrivning">
        <input type="submit" name="btn" value="Spara" title="Lägger till länk i databasen">
    </form>
    <div class="container">
    <h1>Länkar</h1>
    <p>
<?php
    $sql="SELECT * FROM linx"; // SQL query to select all rows from the linx table
    $result=$conn->query($sql); // Execute the query
    if($result->num_rows==0){ // If there are no rows in the result
        echo "Inga länkar inlagda"; // Print "Inga länkar inlagda"
    }else{ // If there are rows in the result
        while($row=$result->fetch_assoc()){ // Loop through the result until there are no more rows and get the row as an associative array (dictionaries in Python)
            echo 
            "<div class='line'><a href='".$row['url']."' title='Gå till ".$row['url']."'>".$row['description']."</a> 
            <i>inlagd ".$row['date_stored']."</i>
            &nbsp;&nbsp;&nbsp;
            <a href='linx.php?del=".$row['id']."'><i class='gg-trash' title='Ta bort ".$row['description']."'></i></a>
            </div>"; // Print the URL, description, date_stored and a trash can icon to delete the row with the id as a GET parameter in the URL
        }
}
?>
</p></div>
</body>
</html>
