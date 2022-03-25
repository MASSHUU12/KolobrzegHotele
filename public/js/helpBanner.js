/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/helpBanner.js ***!
  \************************************/
$(function () {
  if (getCookie("helpBannerDisplayed") == "true") $("#h-window").remove();
});
$("#h-btn").click(function () {
  document.cookie = "helpBannerDisplayed=true"; //creation of a cookie

  $("#h-window").fadeOut(200, function () {
    $("#h-window").remove();
  });
});

function help(show) {
  show ? $("#h-container").css("display", "flex") : $("#h-container").css("display", "none");
} // A function to search for a cookie and return its contents


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