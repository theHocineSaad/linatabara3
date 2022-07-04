const theForm = document.forms[0];
const password = document.getElementById("id_password");
const passwordConfirmation = document.getElementById("id_confirm_password");

function passwordValidator(){
    if(password.value.length >= 8) {
        password.classList.remove('is-invalid');
        return true;
    } else{
        password.classList.add('is-invalid');
        return false;
    }
}

function passwordConfirmationValidator(){
    if(password.value === passwordConfirmation.value) {
        passwordConfirmation.classList.remove('is-invalid');
        return true;
    } else{
        passwordConfirmation.classList.add('is-invalid');
        return false;
    }
}

password.addEventListener('input', passwordValidator)
passwordConfirmation.addEventListener('input', passwordConfirmationValidator)

function passwordResetFormValidator(){
    if (!passwordValidator()) return false
    if (!passwordConfirmationValidator()) return false
    return true
}

theForm.addEventListener("submit", e => {
    if (!passwordResetFormValidator()){
        e.preventDefault();
        e.stopPropagation();

        window.setTimeout(function () {
            var errors = document.querySelectorAll(".is-invalid");
            if (errors.length) {
                window.scrollTo({ top: errors[0].offsetTop - 100, behavior: 'smooth' });
            }
        }, 0)
    } else theForm.submit();
});
