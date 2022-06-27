/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/gettingDairas.js ***!
  \***************************************/
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

dairaSelect = document.getElementById('dairaSelect');
wilayaSelect = document.getElementById('wilayaSelect');

var _document$getElements = document.getElementsByTagName("html"),
    _document$getElements2 = _slicedToArray(_document$getElements, 1),
    html = _document$getElements2[0];

var lang = html.getAttribute("lang");
wilayaSelect.addEventListener('change', function () {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var dairas = JSON.parse(this.responseText);

      if (lang === 'ar') {
        dairaSelect.innerHTML = '<option selected hidden style="display:none" value="">الدائرة</option>';
      } else if (lang === 'fr') {
        dairaSelect.innerHTML = '<option selected hidden style="display:none" value="">Daira</option>';
      }

      dairas.forEach(function (element) {
        option = document.createElement("option");
        option.value = element.id;
        option.text = lang === 'ar' ? element.arName : element.name;
        dairaSelect.add(option);
        dairaSelect.removeAttribute("disabled");
      });
    }
  };

  var wilaya = wilayaSelect.value;
  xhttp.open("GET", "/api/dairas/" + wilaya, true);
  xhttp.send();
});
/******/ })()
;