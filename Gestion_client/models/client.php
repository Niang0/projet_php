<?php
// models/Client.php
class Client
{
    // Propriétés correspondant aux colonnes de la table clients
    private $id;
    private $nom;
    private $adresse;
    private $telephone;
    private $email;
    private $sexe;
    private $statut;

    // Méthodes pour les opérations CRUD 

// Méthodes d'accès aux propriétés (getter et setter)
public function getId()
{
    return $this->id;
}

public function setId($id)
{
    $this->id = $id;
}

public function getNom()
{
    return $this->nom;
}

public function setNom($nom)
{
    $this->nom = $nom;
}

public function getAdresse()
{
    return $this->adresse;
}

public function setAdresse($adresse)
{
    $this->adresse = $adresse;
}

public function getTelephone()
{
    return $this->telephone;
}

public function setTelephone($telephone)
{
    $this->telephone = $telephone;
}

public function getEmail()
{
    return $this->email;
}

public function setEmail($email)
{
    $this->email = $email;
}

public function getSexe()
{
    return $this->sexe;
}

public function setSexe($sexe)
{
    $this->sexe = $sexe;
}

public function getStatut()
{
    return $this->statut;
}

public function setStatut($statut)
{
    $this->statut = $statut;
}

// Méthode pour ajouter un nouveau client dans la base de données
public function ajouterClient()
{
    $sql = "INSERT INTO clients (nom, adresse, telephone, email, sexe, statut) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$this->nom, $this->adresse, $this->telephone, $this->email, $this->sexe, $this->statut]);
}

// Méthode pour mettre à jour les informations d'un client dans la base de données
public function modifierClient()
{
    $sql = "UPDATE clients SET nom = ?, adresse = ?, telephone = ?, email = ?, sexe = ?, statut = ? WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$this->nom, $this->adresse, $this->telephone, $this->email, $this->sexe, $this->statut, $this->id]);
}

// Méthode pour supprimer un client de la base de données
public function supprimerClient()
{
    $sql = "DELETE FROM clients WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$this->id]);
}

// Méthode pour récupérer la liste de tous les clients depuis la base de données
public function listeClients()
{
    $sql = "SELECT * FROM clients";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Méthode pour récupérer les informations d'un client par son ID depuis la base de données
public function getClientById($id)
{
    $sql = "SELECT * FROM clients WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
