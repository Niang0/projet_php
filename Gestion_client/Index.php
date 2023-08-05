<?php
// index.php
require_once 'controllers/ClientController.php';

// Créer une instance du contrôleur ClientController
$clientController = new clientController();

// Vérifier l'action à effectuer en fonction du paramètre "action" passé dans l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'ajouter':
            // Afficher le formulaire d'ajout d'un nouveau client
            $clientController->afficherFormulaireAjout();
            break;
        case 'modifier':
            if (isset($_GET['id'])) {
                // Afficher le formulaire de modification pour un client spécifique
                $clientController->afficherFormulaireModification($_GET['id']);
            } else {
                // Rediriger vers la liste des clients si l'ID n'est pas spécifié
                header('Location: index.php?action=liste');
            }
            break;
        case 'supprimer':
            if (isset($_GET['id'])) {
                // Supprimer le client spécifié
                $clientController->supprimerClient($_GET['id']);
            } else {
                // Rediriger vers la liste des clients si l'ID n'est pas spécifié
                header('Location: index.php?action=liste');
            }
            break;
        case 'liste':
        default:
            // Afficher la liste des clients
            $clientController->listeClients();
            break;
    }
} else {
    // Par défaut, afficher la liste des clients
    $clientController->listeClients();
}