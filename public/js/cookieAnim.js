var timer;
var tl = gsap.timeline();

function anim() {
    tl.to(".cookiecrumb-1", { duration: 20, rotation: 360, ease: "none" })
        .to(".cookiecrumb-1", { duration: 0, rotation: 0, ease: "none" })
        .eventCallback(anim())
}

//anim();
