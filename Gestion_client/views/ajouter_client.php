<!-- views/ajouter_client.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Ajouter un client</h1>
    <form action="index.php?action=ajouter" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" required><br>

        <label for="email">E-mail :</label>
        <input type="email" name="email" required><br>

        <label for="sexe">Sexe :</label>
        <select name="sexe">
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
        </select><br>

        <label for="statut">Statut :</label>
        <select name="statut">
            <option value="actif">Actif</option>
            <option value="inactif">Inactif</option>
        </select><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>