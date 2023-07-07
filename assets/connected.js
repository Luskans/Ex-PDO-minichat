document.addEventListener('DOMContentLoaded', function() {
    if (connected) {
        signin.classList.add('d-none');
        login.classList.add('d-none');
        connectName.classList.add('d-inline-block');
        logout.classList.add('d-inline-block');
        formulaire.classList.add('d-inline-block');
        formulaire2.innerHTML = "";
    } else {
        signin.classList.add('d-inline-block');
        login.classList.add('d-inline-block');
        connectName.classList.add('d-none');
        logout.classList.add('d-none');
        formulaire.classList.add('d-none')
        formulaire2.innerHTML = "Veuillez vous connecter pour participer au chat !";
    };
});