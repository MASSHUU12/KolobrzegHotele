var timer;

function anim() {
    gsap.to(".maincookie-crumb", { duration: 3, 360: rotation, ease: "none" });
    gsap.to(".maincookie-crumb", { duration: 3, 0: rotation, ease: "none" });
}

anim();
timer = setInterval(anim, 6000);
