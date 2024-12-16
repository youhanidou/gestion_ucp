<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$port = "5432";
$dbname = "gestion_tp";
$user = "postgres";
$password = "5334";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Succès";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
