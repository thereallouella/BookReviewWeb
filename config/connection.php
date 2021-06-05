<? php

$host = "localhost";
$username = "root";
$password = "";
$database = "booksdb";

$conn = mysqli_connect($host,$username,$password, $database);

if ($conn === false){
    die("Error: Could not connect " . mysqli_connect_error());
}

echo 'Connected Successfully';
?>