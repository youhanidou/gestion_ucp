<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $errors = [];

    if (empty($nom)) {
        $errors[] = "Le nom est requis.";
    }

    if (empty($prenom)) {
        $errors[] = "Le prénom est requis.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Un email valide est requis.";
    }

    if (empty($password)) {
        $errors[] = "Le mot de passe est requis.";
    }

    if (empty($errors)) {
        // Code pour ajouter l'utilisateur à la base de données
        echo "Utilisateur ajouté avec succès.";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
