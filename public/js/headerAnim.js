document.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        gsap.to('header', {duration: 0.3, backgroundColor: '#00385E', padding: '10px 150px 10px 120px', ease: 'slow-mo'});
    }
    else {
        gsap.to('header', {duration: 0.3, backgroundColor: 'transparent', padding: '30px 150px 30px 120px', ease: 'slow-mo'});
    }
});