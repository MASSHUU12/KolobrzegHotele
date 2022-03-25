$(() => {
    if (getCookie("helpBannerDisplayed") == "true") $("#h-window").remove();
});

$("#h-btn").click(() => {
    document.cookie = "helpBannerDisplayed=true"; //creation of a cookie
    $("#h-window").fadeOut(200, () => {
        $("#h-window").remove();
    });
});

function help(show) {
    show
        ? $("#h-container").css("display", "flex")
        : $("#h-container").css("display", "none");
}

// A function to search for a cookie and return its contents
function getCookie(cname) {
    let name = cname + "=";
    let ca = decodeURIComponent(document.cookie).split(";");

    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];

        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }

        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
