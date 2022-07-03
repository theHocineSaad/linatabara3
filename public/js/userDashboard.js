/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/userDashboard.js ***!
  \***************************************/
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

var queryString = window.location.search;
body = document.body; // form js

wilayaSelect = document.getElementById('wilayaSelect');
userWilayaCode = document.getElementById('userWilayaCode');
wilayaSelect.value = userWilayaCode.innerText;
dairaSelect = document.getElementById('dairaSelect');
userDairaCode = document.getElementById('userDairaCode');

var _document$getElements = document.getElementsByTagName("html"),
    _document$getElements2 = _slicedToArray(_document$getElements, 1),
    html = _document$getElements2[0];

var lang = html.getAttribute("lang");
var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var dairas = JSON.parse(this.responseText);
    dairas.forEach(function (element) {
      option = document.createElement("option");
      option.value = element.id;
      option.text = lang === 'ar' ? element.arName : element.name;
      dairaSelect.add(option);
      dairaSelect.removeAttribute("disabled");
    });
  }
};

xhttp.open("GET", "/api/dairas/" + userWilayaCode.innerText, true);
xhttp.send();
dairaSelect.value = userDairaCode.innerText;
readyToGive = document.getElementById('readyToGive');
userIsReadyToGive = document.getElementById('userIsReadyToGive');
var boolUserIsReadyToGive = userIsReadyToGive.innerText == "1";
readyToGive.checked = boolUserIsReadyToGive; // form js
// password edit form validation

var currentPassword = document.getElementById("id_password_current_password");
var password = document.getElementById("id_password");
var passwordConfirmation = document.getElementById("id_confirm_password");
var passwordUpdateForm = document.forms[1];

function currentPasswordValidator() {
  if (currentPassword.value.length > 0) {
    currentPassword.classList.remove('is-invalid');
    return true;
  } else {
    currentPassword.classList.add('is-invalid');
    return false;
  }
}

function passwordValidator() {
  if (password.value.length >= 8) {
    password.classList.remove('is-invalid');
    return true;
  } else {
    password.classList.add('is-invalid');
    return false;
  }
}

function passwordConfirmationValidator() {
  if (password.value === passwordConfirmation.value) {
    passwordConfirmation.classList.remove('is-invalid');
    return true;
  } else {
    passwordConfirmation.classList.add('is-invalid');
    return false;
  }
}

currentPassword.addEventListener('input', currentPasswordValidator);
password.addEventListener('input', passwordValidator);
passwordConfirmation.addEventListener('input', passwordConfirmationValidator);

function passwordEditFormValidator() {
  if (!currentPasswordValidator()) return false;
  if (!passwordValidator()) return false;
  if (!passwordConfirmationValidator()) return false;
  return true;
}

passwordUpdateForm.addEventListener("submit", function (e) {
  if (!passwordEditFormValidator()) {
    e.preventDefault();
    e.stopPropagation();
    window.setTimeout(function () {
      var errors = document.querySelectorAll(".is-invalid");

      if (errors.length) {
        window.scrollTo({
          top: errors[0].offsetTop - 100,
          behavior: 'smooth'
        });
      }
    }, 0);
  } else passwordUpdateForm.submit();
}); // password edit form validation
// user edit form validation

var wilaya = document.getElementById("wilayaSelect");
var daira = document.getElementById("dairaSelect");
var phone = document.getElementById("id_phone");
var email = document.getElementById("id_email");
var userUpdateForm = document.forms[2];

function wilayaValidator() {
  if (wilaya.options[wilaya.selectedIndex].text === "Wilaya" || wilaya.options[wilaya.selectedIndex].text === "الولاية") {
    wilaya.classList.add('is-invalid');
    return false;
  } else {
    wilaya.classList.remove('is-invalid');
    return true;
  }
}

function dairaValidator() {
  if (daira.options[daira.selectedIndex].text === "Daira" || daira.options[daira.selectedIndex].text === "الدائرة") {
    daira.classList.add('is-invalid');
    return false;
  } else {
    daira.classList.remove('is-invalid');
    return true;
  }
}

function phoneValidator() {
  if (/\D/.test(phone.value) || phone.value.length < 10 || !phone.value.startsWith('05') & !phone.value.startsWith('06') & !phone.value.startsWith('07')) {
    phone.classList.add('is-invalid');
    return false;
  } else {
    phone.classList.remove('is-invalid');
    return true;
  }
}

function emailValidator() {
  if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
    email.classList.remove('is-invalid');
    return true;
  } else {
    email.classList.add('is-invalid');
    return false;
  }
}

function userEditFormValidator() {
  if (wilayaValidator()) {
    if (dairaValidator()) {
      if (phoneValidator()) {
        if (emailValidator()) {
          return true;
        } else return false;
      } else return false;
    } else return false;
  } else return false;
}

wilaya.addEventListener('input', wilayaValidator);
daira.addEventListener('input', dairaValidator);
phone.addEventListener('input', phoneValidator);
email.addEventListener('input', emailValidator);
userUpdateForm.addEventListener("submit", function (e) {
  if (!userEditFormValidator()) {
    e.preventDefault();
    e.stopPropagation();
    window.setTimeout(function () {
      var errors = document.querySelectorAll(".is-invalid");

      if (errors.length) {
        window.scrollTo({
          top: errors[0].offsetTop - 100,
          behavior: 'smooth'
        });
      }
    }, 0);
  } else userUpdateForm.submit();
}); // user edit form validation
/******/ })()
;