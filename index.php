<?php
$dbsevername = 'localhost';
$username = "root"; 
$password = ""; 
$dbname = "Winkel"; 

$conn =  mysqli_connect($servername, $username, $password, $dbname);
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
echo "Connected to database ($dbname).";
$conn->close();
?>

// database code
//CREATE TABLE Producten (
  product_code INT PRIMARY KEY,
  product_naam VARCHAR(255),
  prijs_per_stuk DECIMAL(10, 2),
  omschrijving TEXT
);//
