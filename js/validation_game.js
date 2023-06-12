function showConfirmation() {
    if (confirm("Êtes-vous sûr du résultat du match ?")) {
        // L'utilisateur a confirmé, soumettre le formulaire
        document.querySelector('form').submit();
    } else {
        // L'utilisateur a annulé, ne rien faire
    }
}

// Ajouter un gestionnaire d'événement sur le bouton de validation du formulaire
const submitButton = document.querySelector('.create-match-cta');
submitButton.addEventListener('click', function (event) {
    event.preventDefault(); // Empêcher l'envoi du formulaire par défaut
    showConfirmation(); // Afficher la fenêtre pop-up de confirmation
});