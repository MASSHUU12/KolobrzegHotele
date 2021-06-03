function accuracyBars() {
    if (window.location.pathname == "/search") {
        
        var listingsBar = document.querySelectorAll('.search-single-listing');
    
        listingsBar.forEach(listing => {
            var bar = listing.querySelector('.large-inner-bar');
            var accuracy = bar.getAttribute('accuracy');
    
            var score = 100 - accuracy*(accuracy);
            scorePercent = score+"%";
    
            gsap.to(bar, {delay: 0.1, duration: 2, width: scorePercent, ease: 'slowmo'});
        });
    }
}

accuracyBars();

