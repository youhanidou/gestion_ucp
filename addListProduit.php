// Afficher la liste des produits
<?php
$conn = new PDO("pgsql:host=localhost;dbname=mydb", "user", "password");
$sql = "SELECT * FROM products";
foreach ($conn->query($sql) as $row) {
    echo $row['id'] . " " . $row['nom'] . " " . $row['description'] . " " . $row['prix'] . " " . $row['quantite'] . " " . $row['id_categorie'] . "<br>";
}
?>
