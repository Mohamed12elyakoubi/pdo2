<?php
$host = 'localhost:3307';
$db   = 'Winkel';
$user = 'root';
$pass = 'test';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>

// database code
//CREATE TABLE Producten (
  product_code INT PRIMARY KEY,
  product_naam VARCHAR(255),
  prijs_per_stuk DECIMAL(10, 2),
  omschrijving TEXT
);//
