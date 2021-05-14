const listings = document.querySelectorAll(".search-single-listing-inner");

listings.forEach((listing) => {
    const button = listing.querySelector(".button-secondary");
    const image = listing.querySelector("img");
    const icons = listing.querySelector(".listing-bottom-icons");
    const name = listing.querySelector(".listing-name");

    const bottom = listing.querySelector(".listing-active-bottom");

    button.addEventListener('click', () => {
        if (listing.classList.contains("active")) {
            listing.classList.remove("active");
            icons.classList.remove("active");
            gsap.to(listing, {duration: 0.5, height: '192px', ease: 'slowmo'});
            gsap.to(image, {duration: 0.5, height: '150px', width: '200px', y: '0', ease: 'slowmo'});
            gsap.to(listing, {delay: 0.5, duration: 0.1, zIndex: 1});
            gsap.to(button, {duration: 0.5, y:'0', ease: 'slowmo'});
            gsap.to(icons, {duration: 0, opacity: 0});
            gsap.to(icons, {delay: 0.5, duration: 0.5, opacity: 1, ease: 'slowmo'});
            gsap.to(name, {delay: 0, duration: 0, opacity: 0, ease: 'slowmo'});
            gsap.to(name, {delay: 0.1, duration: 0.1, x: '0', y: '0', ease: 'slowmo'});
            gsap.to(name, {delay: 0.6, duration: 0.4, opacity: 1, ease: 'slowmo'});
            button.innerHTML = "więcej";

            bottom.classList.remove("active");
        }
        else {
            listing.classList.add("active");
            icons.classList.add("active");
            gsap.to(listing, {duration: 0.5, height: '420px', ease: 'slowmo'});
            gsap.to(image, {duration: 0.5, height: '230px', width: '350px', y: '50px', ease: 'slowmo'});
            gsap.to(listing, {duration: 0.01, zIndex: 50});
            gsap.to(button, {duration: 0.5, y:'180px', ease: 'slowmo'});
            gsap.to(icons, {duration: 0, opacity: 0});
            gsap.to(icons, {delay: 0.5, duration: 0.5, opacity: 1, ease: 'slowmo'});
            gsap.from(icons, {delay: 0.5, duration: 0.5, y: '-30px', ease: 'slowmo'});       
            gsap.to(name, {delay: 0, duration: 0.1, opacity: 0, ease: 'slowmo'});
            gsap.to(name, {delay: 0.1, duration: 0.1, x: '-360px', y: '10px', ease: 'slowmo'});
            gsap.to(name, {delay: 0.6, duration: 0.4, opacity: 1, y: '-10px', ease: 'slowmo'});
            button.innerHTML = "mniej";
            
            setTimeout(() => { bottom.classList.add("active"); }, 500);
        }
    })
});
