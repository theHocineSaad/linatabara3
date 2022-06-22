/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/donorsSearchFormValidation.js ***!
  \****************************************************/
theForm = document.getElementById('donorsSearchForm');
theForm.addEventListener('submit', function (event) {
  if (!theForm.checkValidity()) {
    event.preventDefault();
    event.stopPropagation();
  }

  theForm.classList.add('was-validated');
}, false);
/******/ })()
;