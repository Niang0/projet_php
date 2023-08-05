<?php
// controllers/ClientController.php
require_once 'models/Client.php';

class clientController
{
    public function listeClients()
    {
        // Créer une instance du modèle Client
        $clientModel = new Client();

        // Récupérer la liste de tous les clients depuis la base de données
        $clients = $clientModel->listeClients();

        // Inclure la vue "liste_clients.php" pour afficher la liste des clients
        include 'views/liste_clients.php';
    }

    public function afficherFormulaireAjout()
    {
        // Inclure la vue "ajouter_client.php" pour afficher le formulaire d'ajout
        include 'views/ajouter_client.php';
    }

    public function ajouterClient($donnees)
    {
        // Valider les données du formulaire
        $nom = $donnees['nom'];
        $adresse = $donnees['adresse'];
        $telephone = $donnees['telephone'];
        $email = $donnees['email'];
        $sexe = $donnees['sexe'];
        $statut = $donnees['statut'];

        // Créer une instance du modèle Client
        $clientModel = new Client();

        // Définir les propriétés du client avec les valeurs du formulaire
        $clientModel->setNom($nom);
        $clientModel->setAdresse($adresse);
        $clientModel->setTelephone($telephone);
        $clientModel->setEmail($email);
        $clientModel->setSexe($sexe);
        $clientModel->setStatut($statut);

        // Ajouter le nouveau client dans la base de données
        $clientModel->ajouterClient();

        // Redirection vers la liste des clients après l'ajout
        header('Location: index.php?action=liste');
    }

    public function afficherFormulaireModification($id)
    {
        // Créer une instance du modèle Client
        $clientModel = new Client();

        // Récupérer les informations du client par son ID depuis la base de données
        $client = $clientModel->getClientById($id);

        // Inclure la vue "modifier_client.php" pour afficher le formulaire de modification
        include 'views/modifier_client.php';
    }

    public function modifierClient($donnees)
    {
        // Valider les données du formulaire
        $id = $donnees['id'];
        $nom = $donnees['nom'];
        $adresse = $donnees['adresse'];
        $telephone = $donnees['telephone'];
        $email = $donnees['email'];
        $sexe = $donnees['sexe'];
        $statut = $donnees['statut'];

        // Créer une instance du modèle Client
        $clientModel = new Client();

        // Définir les propriétés du client avec les valeurs du formulaire
        $clientModel->setId($id);
        $clientModel->setNom($nom);
        $clientModel->setAdresse($adresse);
        $clientModel->setTelephone($telephone);
        $clientModel->setEmail($email);
        $clientModel->setSexe($sexe);
        $clientModel->setStatut($statut);

        // Mettre à jour les informations du client dans la base de données
        $clientModel->modifierClient();

        // Redirection vers la liste des clients après la modification
        header('Location: index.php?action=liste');
    }

    public function supprimerClient($id)
    {
        // Créer une instance du modèle Client
        $clientModel = new Client();

        // Définir l'ID du client à supprimer
        $clientModel->setId($id);

        // Supprimer le client de la base de données
        $clientModel->supprimerClient();

        // Redirection vers la liste des clients après la suppression
        header('Location: index.php?action=liste');
    }
}
?>