var image = document.getElementById("main-image");

var newImage = image.getAttribute("data-src");

image.src = newImage

gsap.registerPlugin(ScrollTrigger);
var features = document.querySelectorAll(".feature-both");

features.forEach((feature) => {
    var img = feature.querySelector(".feature-image");
    var text = feature.querySelector(".feature-text");
    

    gsap.from(feature, {
        scrollTrigger: {
            trigger: text,
            toggleActions: 'play complete none reset',
            start: 'center bottom'
        },
        duration: 1,
        opacity: 0,
        y: '100px',
    });

    gsap.from(img, {
        scrollTrigger: {
            trigger: text,
            toggleActions: 'play complete none reset',
            start: 'bottom bottom'
        },
        duration: 1,
        x: '-50px'
    });

    gsap.from(text, {
        scrollTrigger: {
            trigger: text,
            toggleActions: 'play complete none reset',
            start: 'bottom bottom'
        },
        duration: 1,
        x: '50px'
    });

});



