// Afficher la liste des utilisateurs
<?php
$conn = new PDO("pgsql:host=localhost;dbname=mydb", "user", "password");
$sql = "SELECT * FROM users";
foreach ($conn->query($sql) as $row) {
    echo $row['id'] . " " . $row['nom'] . " " . $row['prenom'] . " " . $row['email'] . "<br>";
}
?>
