const buttons = document.querySelectorAll('button');
const signin = buttons[0];
const login = buttons[1];
const connectName = buttons[2];
const logout = buttons[3];
const signinAlert = buttons[4];
const loginAlert = buttons[5];
const logoutAlert = buttons[6];

const formulaire = document.querySelector('#message_form');
const formulaire2 = document.querySelector('#message_text');

signin.addEventListener('click', () => {
    const signin = document.querySelector('#nav_form');
    signin.setAttribute('action', './process/signin_user.php');
    
    const title = document.querySelector('.modal h1');
    title.innerHTML = 'INSCRIPTION';

    const button = document.querySelector('#nav_form button');
    button.innerHTML = 'Créer un compte';
});

login.addEventListener('click', () => {
    const login = document.querySelector('#nav_form');
    login.setAttribute('action', './process/login_user.php')

    const title = document.querySelector('.modal h1');
    title.innerHTML = 'CONNEXION';

    const button = document.querySelector('#nav_form button');
    button.innerHTML = 'Se connecter';
    
});

// logout.addEventListener('click', () => {
//     connected = false;
//     let url = new URL(window.location.href);
//     let urlParam = new URLSearchParams(url.search);
//     urlParam.set('disconnected', 'Vous avez été déconnecté !');
//     url.search = urlParam.toString();
//     window.location.href = url.href;
// });