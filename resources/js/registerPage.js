const theForm = document.forms[0];
const wilaya = document.getElementById("wilayaSelect");
const daira = document.getElementById("dairaSelect");
const phone = document.getElementById("id_phone");
const bloodGroup = document.getElementById("id_blood_group");
const email = document.getElementById("id_email");
const password = document.getElementById("id_password");
const passwordConfirmation = document.getElementById("id_confirm_password");

const [html] = document.getElementsByTagName("html")
const lang = html.getAttribute("lang");

const allFields = [wilaya, daira, phone, bloodGroup, email, password, passwordConfirmation]

function wilayaValidator(){
    if (wilaya.options[wilaya.selectedIndex].text === "Wilaya" || wilaya.options[wilaya.selectedIndex].text === "الولاية"){
        wilaya.classList.add('is-invalid');
        return false;
    } else{
        wilaya.classList.remove('is-invalid');
        return true;
    }
}

function dairaValidator(){
    if (daira.options[daira.selectedIndex].text === "Daira" || daira.options[daira.selectedIndex].text === "الدائرة"){
        daira.classList.add('is-invalid');
        return false;
    } else{
        daira.classList.remove('is-invalid');
        return true;
    }
}

function phoneValidator(){
    if(/\D/.test(phone.value) || phone.value.length < 10 || !phone.value.startsWith('05') & !phone.value.startsWith('06') & !phone.value.startsWith('07')) {
        phone.classList.add('is-invalid');
        return false;
    } else{
        phone.classList.remove('is-invalid');
        return true;
    }
}

function bloodGroupValidator(){
    if (bloodGroup.options[bloodGroup.selectedIndex].text === "Groupe sanguin" || bloodGroup.options[bloodGroup.selectedIndex].text === "فصيلة الدم"){
        bloodGroup.classList.add('is-invalid');
        return false;
    } else{
        bloodGroup.classList.remove('is-invalid');
        return true;
    }
}

function emailValidator(){
    if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        email.classList.remove('is-invalid');
        return true;
    } else{
        email.classList.add('is-invalid');
        return false;
    }
}

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

function signUpFormValidator(){
    if (wilayaValidator()){
        if(dairaValidator()){
            if(phoneValidator()){
                if(bloodGroupValidator()){
                    if(emailValidator()){
                        if(passwordValidator()){
                            if(passwordConfirmationValidator()){
                                return true;
                            } else return false;
                        } else return false;
                    } else return false;
                } else return false;
            } else return false;
        } else return false;
    } else return false;
}

wilaya.addEventListener('input', wilayaValidator)
daira.addEventListener('input', dairaValidator)
phone.addEventListener('input', phoneValidator)
bloodGroup.addEventListener('input', bloodGroupValidator)
email.addEventListener('input', emailValidator)
password.addEventListener('input', () => {
    passwordValidator()
    passwordConfirmationValidator()
})
passwordConfirmation.addEventListener('input', passwordConfirmationValidator)


theForm.addEventListener("submit", e => {
    if (!signUpFormValidator()){
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

