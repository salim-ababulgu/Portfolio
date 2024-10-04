// Objets de traduction
const translations = {
    fr: {
        title: "Salim ABABULGU",
        subtitle: "Développeur web",
        description: "Actuellement en cursus préparatoire à l'école La Plateforme à Martigues, je suis à la recherche d'une entreprise qui saura reconnaître mon potentiel pour un bachelor en développement web.",
        downloadCV: "Télécharger mon CV",
        contact: "Contactez moi",
        // Ajoutez d'autres traductions ici
    },
    en: {
        title: "Salim ABABULGU",
        subtitle: "Web Developer",
        description: "Currently in a preparatory course at La Plateforme school in Martigues, I am looking for a company that will recognize my potential for a bachelor's degree in web development.",
        downloadCV: "Download my CV",
        contact: "Contact me",
        // Add other translations here
    }
};

// Fonction pour changer la langue
function changeLanguage(lang) {
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    // Mettre à jour la langue du document
    document.documentElement.lang = lang;
}

// Écouteur d'événement pour le sélecteur de langue
document.getElementById('languageSelect').addEventListener('change', function() {
    changeLanguage(this.value);
});

// Appeler changeLanguage avec la langue par défaut au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    changeLanguage('fr'); // Ou 'en' pour l'anglais par défaut
});