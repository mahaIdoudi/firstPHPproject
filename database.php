<?php
$db_server = "localhost";
$db_user = "amine";
$db_pass = "amine33349E ";
$db_name = "internships";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;
?>
















<--?php
    $sql= "SELECT `name``ville``numtel`  FROM `internship`" ;
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo  $row["name"] $row["ville"] $row["numtel"]."<br>";
        }
    }
?>

    <--?php
    $data = require 'index.php';
    $results = $data['results'];
    foreach ($results as $result) {
        echo "<p>" . $result['name'] . " " . $result['ville'] . " " . $result['numtel'] . "<br></p><hr>";
    }
    ?>