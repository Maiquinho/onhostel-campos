
// Show password 

const showPasswordButton = document.querySelector('#show-password');
const inputPasswordType = document.querySelector('input[type="password"]');

showPasswordButton.addEventListener('click', () => {
    
    if(inputPasswordType.getAttribute('type') == 'password'){
        inputPasswordType.setAttribute('type', 'text');

        showPasswordButton.classList.remove('fa-eye');
        showPasswordButton.classList.add('fa-eye-slash');

    }else {
        inputPasswordType.setAttribute('type', 'password');

        showPasswordButton.classList.remove('fa-eye-slash');
        showPasswordButton.classList.add('fa-eye');

    }

});

// Show password 