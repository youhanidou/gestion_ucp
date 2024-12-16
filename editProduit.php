// Formulaire pour modifier un produit
<form method="post" action="update_product.php">
    ID: <input type="text" name="id" required><br>
    Nom: <input type="text" name="nom"><br>
    Description: <input type="text" name="description"><br>
    Prix: <input type="number" name="prix"><br>
    Quantité: <input type="number" name="quantite"><br>
    Catégorie: <select name="id_categorie">
        <?php
        $sql = "SELECT * FROM categories";
        foreach ($conn->query($sql) as $row) {
            echo "<option value='" . $row['id'] . "'>" . $row['libelle'] . "</option>";
        }
        ?>
    </select><br>
    <input type="submit" value="Modifier">
</form>
