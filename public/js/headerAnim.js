const tl = gsap.timeline({ paused: true });
tl.from("header", { scale: 0.7, autoAlpha: 0 });

// The start and end positions
const startY = innerHeight / 2;
const finishDistance = innerHeight / 5;

// Listen to the scroll event
document.addEventListener("scroll", function () {
    // Prevent the update from happening too often (throttle the scroll event)
    if (!requestId) {
        requestId = requestAnimationFrame(update);
    }
});

update();

function update() {
    // Update animation
    tl.progress((scrollY - startY) / finishDistance);
    gsap.to("header", { duration: 0.7, backgroundColor: "rgba(0, 75, 125, 0.7)", delay: 0.7});

    // Let the scroll event fire again
    requestId = null;
}