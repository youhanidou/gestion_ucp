// Formulaire pour ajouter un produit
<form method="post" action="add_product.php">
    Nom: <input type="text" name="nom" required><br>
    Description: <input type="text" name="description" required><br>
    Prix: <input type="number" name="prix" required><br>
    Quantité: <input type="number" name="quantite" required><br>
    Catégorie: <select name="id_categorie">
        <?php
        $sql = "SELECT * FROM categories";
        foreach ($conn->query($sql) as $row) {
            echo "<option value='" . $row['id'] . "'>" . $row['libelle'] . "</option>";
        }
        ?>
    </select><br>
    <input type="submit" value="Ajouter">
</form>
