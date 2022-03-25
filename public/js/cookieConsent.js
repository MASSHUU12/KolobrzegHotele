/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/cookieConsent.js ***!
  \***************************************/
$(function () {
  if (getCookie("cookieConsentRead") == "true") $("#c-window").remove();
});
$("#c-btn").click(function () {
  document.cookie = "cookieConsentRead=true"; //creation of a cookie

  $("#c-window").fadeOut(200, function () {
    $("#c-window").remove();
  });
}); // A function to search for a cookie and return its contents

function getCookie(cname) {
  var name = cname + "=";
  var ca = decodeURIComponent(document.cookie).split(";");

  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];

    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }

  return "";
}
/******/ })()
;