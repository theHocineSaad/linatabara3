
// form js
const wilayaSelect = document.getElementById('wilayaSelect')
const userWilayaCode = document.getElementById('userWilayaCode')
wilayaSelect.value = userWilayaCode.innerText

const dairaSelect = document.getElementById('dairaSelect')
const userDairaCode = document.getElementById('userDairaCode')

const [html] = document.getElementsByTagName("html")
const lang = html.getAttribute("lang");

const xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        let dairas = JSON.parse(this.responseText);

        dairas.forEach(element => {
            var option = document.createElement("option");
            option.value = element.id;
            option.text = lang === 'ar' ? element.arName : element.name;
            dairaSelect.add(option);
            dairaSelect.removeAttribute("disabled");
        });

        dairaSelect.value = userDairaCode.innerText
    }
};
xhttp.open("GET", "/api/dairas/" + userWilayaCode.innerText, true);
xhttp.send();


const readyToGive = document.getElementById('readyToGive')
const userIsReadyToGive = document.getElementById('userIsReadyToGive')

var boolUserIsReadyToGive = userIsReadyToGive.innerText === "1"
readyToGive.checked = boolUserIsReadyToGive
// form js


// password edit form validation
const currentPassword = document.getElementById("id_password_current_password");
const password = document.getElementById("id_password");
const passwordConfirmation = document.getElementById("id_confirm_password");

const passwordUpdateForm = document.forms[1];

function currentPasswordValidator(){
    if(currentPassword.value.length > 0) {
        currentPassword.classList.remove('is-invalid');
        return true;
    } else{
        currentPassword.classList.add('is-invalid');
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

currentPassword.addEventListener('input', currentPasswordValidator)
password.addEventListener('input', passwordValidator)
passwordConfirmation.addEventListener('input', passwordConfirmationValidator)

function passwordEditFormValidator(){
    if (!currentPasswordValidator()) return false
    if (!passwordValidator()) return false
    if (!passwordConfirmationValidator()) return false
    return true
}

passwordUpdateForm.addEventListener("submit", e => {
    if (!passwordEditFormValidator()){
        e.preventDefault();
        e.stopPropagation();

        window.setTimeout(function () {
            var errors = document.querySelectorAll(".is-invalid");
            if (errors.length) {
                window.scrollTo({ top: errors[0].offsetTop - 100, behavior: 'smooth' });
            }
        }, 0)
    } else passwordUpdateForm.submit();
});
// password edit form validation

// user edit form validation
const wilaya = document.getElementById("wilayaSelect");
const daira = document.getElementById("dairaSelect");
const phone = document.getElementById("id_phone");
const email = document.getElementById("id_email");
const userUpdateForm = document.forms[2];

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

function emailValidator(){
    if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        email.classList.remove('is-invalid');
        return true;
    } else{
        email.classList.add('is-invalid');
        return false;
    }
}

function userEditFormValidator(){
    if (wilayaValidator()){
        if(dairaValidator()){
            if(phoneValidator()){
                if(emailValidator()){
                    return true;
                } else return false;
            } else return false;
        } else return false;
    } else return false;
 }

wilaya.addEventListener('input', wilayaValidator)
daira.addEventListener('input', dairaValidator)
phone.addEventListener('input', phoneValidator)
email.addEventListener('input', emailValidator)

userUpdateForm.addEventListener("submit", e => {
    if (!userEditFormValidator()){
        e.preventDefault();
        e.stopPropagation();

        window.setTimeout(function () {
            var errors = document.querySelectorAll(".is-invalid");
            if (errors.length) {
                window.scrollTo({ top: errors[0].offsetTop - 100, behavior: 'smooth' });
            }
        }, 0)
    } else userUpdateForm.submit();
});
// user edit form validation
