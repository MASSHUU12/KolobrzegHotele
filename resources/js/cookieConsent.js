$(() => {
    if (getCookie("cookieConsentRead") == "true") $("#c-window").remove();
});

$("#c-btn").click(() => {
    document.cookie = "cookieConsentRead=true"; //creation of a cookie
    $("#c-window").fadeOut(200, () => {
        $("#c-window").remove();
    });
});

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
