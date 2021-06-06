
function searchDetails() {
    var url = window.location.pathname.split("/");
    url.shift();
    url.shift();
    url = url.join('/');
    if (url == "search" || url == "search/" || url == "searchquery" || url == "searchquery/") {
        //select listing on search page
        var listings = document.querySelectorAll(".search-single-listing-inner");

        //iterate over the listings
        listings.forEach((listing) => {
            //select all the needed elements
            var button = listing.querySelector(".button-secondary");
            var image = listing.querySelector("img");
            var icons = listing.querySelector(".listing-bottom-icons");
            var name = listing.querySelector(".listing-name");

            var bottom = listing.querySelector(".listing-active-bottom");

            //animate when the button is pressed
            button.addEventListener('click', () => {
                if (listing.classList.contains("active")) {
                    listing.classList.remove("active");
                    icons.classList.remove("active");
                    gsap.to(listing, {duration: 0.8, height: '180px', ease: 'power4'});
                    gsap.to(image, {duration: 0.8, height: '150px', width: '200px', y: '0', ease: 'power4'});
                    gsap.to(listing, {delay: 0.8, duration: 0.1, zIndex: 1});
                    gsap.to(button, {duration: 0.8, y:'0', ease: 'power4'});
                    gsap.to(icons, {duration: 0, opacity: 0});
                    gsap.to(icons, {delay: 0.8, duration: 0.8, opacity: 1, ease: 'slowmo'});
                    if (window.innerWidth > 500) {
                        gsap.to(name, { delay: 0, duration: 0, opacity: 0, ease: 'slowmo' });
                        gsap.to(name, { delay: 0.1, duration: 0.1, x: '0', y: '0', ease: 'slowmo' });
                        gsap.to(name, { delay: 0.6, duration: 0.4, opacity: 1, ease: 'slowmo' });
                    }
                    button.innerHTML = "więcej";

                    bottom.classList.remove("active");
                }
                else {
                    listing.classList.add("active");
                    icons.classList.add("active");
                    gsap.to(listing, {duration: 0.8, height: '390px', ease: 'power4'});
                    gsap.to(image, {duration: 0.8, height: '270px', width: '350px', y: '50px', ease: 'power4'});
                    gsap.to(listing, {duration: 0.01, zIndex: 50});
                    gsap.to(button, {duration: 0.8, y:'165px', ease: 'power4'});
                    gsap.to(icons, {duration: 0, opacity: 0});
                    gsap.to(icons, {delay: 0.8, duration: 0.5, opacity: 1, ease: 'slowmo'});
                    gsap.from(icons, {delay: 0.8, duration: 0.5, y: '-30px', ease: 'slowmo'});
                    if (window.innerWidth > 500) {
                        gsap.to(name, { delay: 0, duration: 0.1, opacity: 0, ease: 'slowmo' });
                        gsap.to(name, { delay: 0.1, duration: 0.1, x: '-360px', y: '10px', ease: 'slowmo' });
                        gsap.to(name, { delay: 0.6, duration: 0.4, opacity: 1, y: '-10px', ease: 'slowmo' });
                    }
                    button.innerHTML = "mniej";

                    setTimeout(() => { bottom.classList.add("active"); }, 500);
                }
            })
        });
    }
}

searchDetails()
