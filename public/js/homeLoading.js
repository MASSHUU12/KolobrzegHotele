/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/homeLoading.js ***!
  \*************************************/
var url = window.location.pathname.split("/");
url.shift();
url.shift();
url = url.join('/');

if (url == "" || url == "search" || url == "/" || url == "search/" || url == "searchquery" || url == "searchquery/") {
  var image = document.getElementById("main-image");
  var newImage = image.getAttribute("data-src");
  image.src = newImage;
}

if (url == "") {
  gsap.registerPlugin(ScrollTrigger);
  var features = document.querySelectorAll(".feature-both");
  features.forEach(function (feature) {
    var img = feature.querySelector(".feature-image");
    var text = feature.querySelector(".feature-text");
    gsap.from(feature, {
      scrollTrigger: {
        trigger: text,
        toggleActions: 'play complete none reverse',
        start: 'center bottom'
      },
      duration: 1,
      opacity: 0,
      y: '100px'
    });
    gsap.from(img, {
      scrollTrigger: {
        trigger: text,
        toggleActions: 'play complete none reverse',
        start: 'bottom bottom'
      },
      duration: 1,
      x: '-50px'
    });
    gsap.from(text, {
      scrollTrigger: {
        trigger: text,
        toggleActions: 'play complete none reverse',
        start: 'bottom bottom'
      },
      duration: 1,
      x: '50px'
    });
  });
}
/******/ })()
;