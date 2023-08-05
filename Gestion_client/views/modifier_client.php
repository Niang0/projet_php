<!-- views/modifier_client.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un client</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Modifier un client</h1>
    <form method="post" action="index.php?action=modifier">
        <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
        <label>Nom:</label>
        <input type="text" name="nom" value="<?php echo $client['nom']; ?>"><br>
        <label>Adresse:</label>
        <input type="text" name="adresse" value="<?php echo $client['adresse']; ?>"><br>
        <label>Téléphone:</label>
        <input type="text" name="telephone" value="<?php echo $client['telephone']; ?>"><br>
        <label>E-mail:</label>
        <input type="text" name="email" value="<?php echo $client['email']; ?>"><br>
        <label>Sexe:</label>
        <input type="radio" name="sexe" value="Homme" <?php echo ($client['sexe'] == 'Homme') ? 'checked' : ''; ?>>Homme
        <input type="radio" name="sexe" value="Femme" <?php echo ($client['sexe'] == 'Femme') ? 'checked' : ''; ?>>Femme<br>
        <label>Statut:</label>
        <select name="statut">
            <option value="actif" <?php echo ($client['statut'] == 'actif') ? 'selected' : ''; ?>>Actif</option>
            <option value="inactif" <?php echo ($client['statut'] == 'inactif') ? 'selected' : ''; ?>>Inactif</option>
        </select><br>
        <input type="submit" value="Modifier">
    </form>
    <br>
    <a href="index.php?action=liste">Retour à la liste des clients</a>
</body>
</html>