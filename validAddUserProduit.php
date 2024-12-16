<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST["nom"]);
    $description = trim($_POST["description"]);
    $prix = trim($_POST["prix"]);
    $quantite = trim($_POST["quantite"]);
    $id_categorie = trim($_POST["id_categorie"]);

    $errors = [];

    if (empty($nom)) {
        $errors[] = "Le nom du produit est requis.";
    }

    if (empty($description)) {
        $errors[] = "La description du produit est requise.";
    }

    if (empty($prix) || !is_numeric($prix) || $prix <= 0) {
        $errors[] = "Un prix valide est requis.";
    }

    if (empty($quantite) || !is_numeric($quantite) || $quantite < 0) {
        $errors[] = "Une quantité valide est requise.";
    }

    if (empty($id_categorie)) {
        $errors[] = "La catégorie est requise.";
    }

    if (empty($errors)) {
        // Code pour ajouter le produit à la base de données
        echo "Produit ajouté avec succès.";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
