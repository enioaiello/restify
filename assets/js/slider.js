// Merci à ChatGPT et GitHub Copilot de m'avoir aidé à écrire ce code !

const imageLocalisation = './assets/img/companies/';
const imageExtension = '.png';
const container = document.querySelector(".companies-container");
const companies = [
    { "name": "Airbus", "image": imageLocalisation + 'airbus' + imageExtension },
    { "name": "BNP Paribas", "image": imageLocalisation + 'bnp' + imageExtension },
    { "name": "Carrefour", "image": imageLocalisation + 'carrefour' + imageExtension },
    { "name": "Danone", "image": imageLocalisation + 'danone' + imageExtension },
    { "name": "Deezer", "image": imageLocalisation + 'deezer' + imageExtension },
    { "name": "Orange", "image": imageLocalisation + 'orange' + imageExtension },
    { "name": "Renault", "image": imageLocalisation + 'renault' + imageExtension },
    { "name": "République Française", "image": imageLocalisation + 'republique-francaise' + imageExtension },
    { "name": "TotalEnergies", "image": imageLocalisation + 'total' + imageExtension }
];

let current = 0;
let intervalId;

// Création des éléments HTML
const elements = [];
for (let i = 0; i < 5; i++) {
    const element = document.createElement("div");
    element.classList.add("company");
    element.innerHTML = `<img class="company-img">`;
    elements.push(element);
    container.appendChild(element);

    // Ajout des écouteurs d'événements
    element.addEventListener('mouseover', () => clearInterval(intervalId)); // Si le curseur passe par l'un des containers, arrêter le defilement
    element.addEventListener('mouseout', () => intervalId = setInterval(changeImage, 3000)); // Si le curseur quitte le container, reprendre le defilement
}

// Fonction pour mettre à jour les images
function updateImages() {
    for (let i = 0; i < 5; i++) {
        let index = (current + i) % companies.length;
        elements[i].querySelector('img').src = companies[index].image;
        elements[i].classList.remove('slideIn');
        void elements[i].offsetWidth;
        elements[i].classList.add('slideIn');
    }
}


// Fonction pour changer l'image actuellement affichée
function changeImage() {
    current = (current + 1) % companies.length;
    updateImages();
}

// Initialisation des images
updateImages();

// Définition de l'intervalle de temps entre chaque changement d'image
intervalId = setInterval(changeImage, 2500);