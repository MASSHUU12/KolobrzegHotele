const cookieBanner = document.querySelector(".cookie-banner");
const cookieButton = document.getElementById("cookie-btn");

const helpBanner = document.querySelector(".help-banner");
const helpButton = document.getElementById("help-btn");

//cookie
cookieButton.addEventListener("click", () => {
    cookieBanner.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if(!localStorage.getItem("cookieBannerDisplayed")) {
        cookieBanner.classList.add("active");
    }
}, 2000);
//

//help
helpButton.addEventListener("click", () => {
    helpBanner.classList.remove("active");
    localStorage.setItem("helpBannerDisplayed", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("helpBannerDisplayed")) {
        helpBanner.classList.add("active");
    }
}, 2000);
//