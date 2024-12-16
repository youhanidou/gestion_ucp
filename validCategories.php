<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libelle = trim($_POST["libelle"]);

    $errors = [];

    if (empty($libelle)) {
        $errors[] = "Le libellé de la catégorie est requis.";
    }

    if (empty($errors)) {
        // Code pour ajouter la catégorie à la base de données
        echo "Catégorie ajoutée avec succès.";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
