<!-- views/liste_clients.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des clients</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Liste des clients</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>E-mail</th>
            <th>Sexe</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?php echo $client['id']; ?></td>
                <td><?php echo $client['nom']; ?></td>
                <td><?php echo $client['adresse']; ?></td>
                <td><?php echo $client['telephone']; ?></td>
                <td><?php echo $client['email']; ?></td>
                <td><?php echo $client['sexe']; ?></td>
                <td><?php echo $client['statut']; ?></td>
                <td>
                    <a href="index.php?action=modifier&id=<?php echo $client['id']; ?>">Modifier</a>
                    <a href="index.php?action=supprimer&id=<?php echo $client['id']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php?action=ajouter">Ajouter un client</a>
</body>
</html>