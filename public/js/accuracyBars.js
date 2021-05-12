const listingsBar = document.querySelectorAll('.search-single-listing');

listingsBar.forEach(listing => {
    const bar = listing.querySelector('.large-inner-bar');
    const accuracy = bar.getAttribute('accuracy');

    

    const score = 100 - accuracy*(accuracy);
    console.log(accuracy);
    scorePercent = score+"%";

    gsap.to(bar, {delay: 0.1, duration: 2, width: scorePercent, ease: 'slowmo'});
});