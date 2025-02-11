
const connexionSection = document.getElementById('connexion');
const creationSection = document.getElementById('creation');
const creerButton = document.querySelector('.button_creer');
creerButton.addEventListener('click', (e) => {
    e.preventDefault(); 

    connexionSection.style.display = 'none';

    creationSection.style.display = 'block';
});

function validerMotdePasse() {
    const mdp = document.getElementsByClassName("mdp").value;

}