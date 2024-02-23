import './bootstrap';
const burgerMenu = document.getElementById('burgerMenu');
const miniScreen = document.querySelector('.MiniScreen');
const closeButton = document.getElementById('closeButton');

burgerMenu.addEventListener('click', () => {
    miniScreen.classList.toggle('active');
});

closeButton.addEventListener('click', () => {
    miniScreen.classList.remove('active');
});
