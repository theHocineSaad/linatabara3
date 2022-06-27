/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/donorsPage.js ***!
  \************************************/
searchResult = document.querySelector(".searchResult");
noDonorsMsg = document.getElementsByClassName("noDonorsMsg");
donorCard = document.getElementsByClassName("donorCard");

if (noDonorsMsg.length || donorCard.length) {
  window.scrollTo({
    top: searchResult.offsetTop - 100,
    behavior: 'smooth'
  });
}
/******/ })()
;