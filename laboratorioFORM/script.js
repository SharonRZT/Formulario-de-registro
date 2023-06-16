const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const apellido1 = document.getElementById('apellido1');
const apellido2 = document.getElementById('apellido2');
const email = document.getElementById('email');
const login = document.getElementById('login');
const password = document.getElementById('password');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    ValideInputs();
});

function ValideInputs(){
    /*resetFormState();*/

    const nombreValue = nombre.value.trim();
    const apellido1Value = apellido1.value.trim();
    const apellido2Value = apellido2.value.trim();
    const emailValue = email.value.trim();
    const loginValue = login.value.trim();
    const passwordValue = password.value.trim();

    //validar input nombre
    if(nombreValue === ''){
        setErrorFor(nombre, 'Rellene este campo');
    } else if (!isText(nombreValue)) {
        setErrorFor(nombre, 'Nombre inválido');
    } else {
        setSuccessFor(nombre);
    }

    //validar input primer apellido
    if(apellido1Value === ''){
        setErrorFor(apellido1, 'Rellene este campo');
    } else if (!isText(apellido1Value)) {
        setErrorFor(apellido1, 'Apellido inválido');
    } else {
        setSuccessFor(apellido1);
    }

    //validar input segundo apellido
    if(apellido2Value === ''){
        setErrorFor(apellido2, 'Rellene este campo');
    } else if (!isText(apellido2Value)) {
        setErrorFor(apellido2, 'Apellido inválido');
    } else {
        setSuccessFor(apellido2);
    }

    //validando input email
    if(emailValue == ''){
        setErrorFor(email, 'Rellene este campo');
    } else if(!isEmail(emailValue)){
        setErrorFor(email, 'Email inválido');
    } else {
        setSuccessFor(email);
    }

        //validar input login
    if(loginValue === ''){
        setErrorFor(login, 'Rellene este campo');
    } else if (!aceptaCaracteres(loginValue)) {
        setErrorFor(login, 'Inválido');
    } else {
        setSuccessFor(login);
    }

        //validando input password
    if(passwordValue === ''){
        setErrorFor(password, 'Rellene este campo');
    }else if(passwordValue.length < 4 || passwordValue.length > 8){
        setErrorFor(password, 'la contraseña debe tener entre 4 y 8 caracteres');
    } else {
        setSuccessFor(password);
    }
     
    if ( nombreValue !== '' && 
    apellido1Value !== '' && 
    apellido2Value !== '' &&
    emailValue !== '' && 
    loginValue !== '' && 
    passwordValue !== '' && 
    isText(nombreValue) === true &&
    isText(apellido1Value) === true && 
    isText(apellido2Value) === true && 
    isEmail(emailValue) === true &&
    aceptaCaracteres(loginValue) === true && 
    passwordValue.length >= 4 &&
    passwordValue.length <= 8) 
    {
    setTimeout(() => { 
    alert('La inscripción ha sido correcta');
    resetForm();
    }, 500);
}


    function setErrorFor(input, message){
    const formControl = input.parentElement;
    const alertError = formControl.querySelector('small');
        
    alertError.innerText = message;
    alertError.style.visibility = 'visible';

    formControl.classList.add('error');
    formControl.classList.remove('success');
    }

    function setSuccessFor(input){
        const formControl = input.parentElement;
        
        formControl.classList.add('success');
        formControl.classList.remove('error');

        const alertError = formControl.querySelector('small');
        alertError.style.visibility = 'hidden';
    }


    function isText (nombre) {
        const ValidName = /^[A-Za-z\s]+$/;
        return ValidName.test(nombre);
    }

    function isEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email)}

    function aceptaCaracteres (login) {
        const ValidLogin = /(.*)/;
        return ValidLogin.test(login);
    }         
}