// js/script.js

// Fonction pour afficher une boîte de dialogue lorsque le formulaire d'ajout est soumis
function afficherMessageAjoutReussi() {
    alert('Le client a été ajouté avec succès !');
}

// Code pour écouter l'événement de soumission du formulaire d'ajout
document.getElementById('form-ajout-client').addEventListener('submit', function(event) {
    // Empêcher l'action par défaut du formulaire (rechargement de la page)
    event.preventDefault();

    // Afficher le message de réussite d'ajout
    afficherMessageAjoutReussi();
});