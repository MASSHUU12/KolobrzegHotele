//get the current url
var url = window.location.pathname.split("/");
url.shift();
url.shift();
url = url.join('/');

//assign the color depending on the url
var color = '#00385E';

if (url == "" || url == "search" || url == "/" || url == "search/" || url == "searchquery" || url == "searchquery/") {
    color = 'transparent';
}

//get the header and apply the color
var header = document.querySelector('header');

header.style.backgroundColor = color;

//handle header animation on scroll
document.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        gsap.to('header', {duration: 0.3, backgroundColor: '#00385E', padding: '10px 150px 10px 120px', ease: 'slowmo'});
    }
    else {
        gsap.to('header', {duration: 0.3, backgroundColor: color, padding: '30px 150px 30px 120px', ease: 'slowmo'});
    }
});

//header language flags
var urlLang = document.location.href.split('/');
urlLang = urlLang[3];
var lang = document.getElementById('language-main-flag');
if (urlLang == 'en') {
    lang.src = lang.getAttribute('data-en');
}
else if (urlLang == 'de') {
    lang.src = lang.getAttribute('data-de');
}
else {
    lang.src = lang.getAttribute('data-pl');
}



