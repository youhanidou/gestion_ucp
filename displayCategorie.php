// Afficher la liste des catégories
<?php
$conn = new PDO("pgsql:host=localhost;dbname=mydb", "user", "password");
$sql = "SELECT * FROM categories";
foreach ($conn->query($sql) as $row) {
    echo $row['id'] . " " . $row['libelle'] . "<br>";
}
?>
