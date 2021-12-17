function searchbarDropdown() {
    var url = window.location.pathname.split("/");
    url.shift();
    url.shift();
    url = url.join('/');

    if (url == "" || url == "search" || url == "/" || url == "search/") {
        var filterBoxes = document.querySelectorAll(".searchbar-filter");
        var dropdowns = document.querySelectorAll(".filter-dropdown");
        var dropdownActive = 0;

        function IconCloseAnimation(icon) {
            gsap.to(icon, {duration: 0.5, y: '0', x: '0', transform: 'scale(1)', ease: 'slowmo'})
        }

        filterBoxes.forEach((filterBox) => {
            var inputTextValue = filterBox.querySelector(".range-value");
            var valueToChange = filterBox.querySelectorAll(".filter-end-value");
            if (inputTextValue.innerHTML != 'bez znaczenia') {
                valueToChange[0].innerHTML = inputTextValue.innerHTML;
            }

            filterBox.addEventListener('click', () => {
            var dropdown = filterBox.querySelectorAll(".filter-dropdown");
            var filterIcon = filterBox.querySelectorAll(".filter-icon");
            if (dropdown[0].classList.contains("trigger-flex")) {
                dropdown[0].classList.remove("trigger-flex");
                IconCloseAnimation(filterIcon[0]);
                var endValue = filterBox.querySelectorAll(".filter-end-value");
                gsap.from(endValue[0], {duration: 1, opacity: '0', ease: 'slowmo'});
                gsap.from(endValue[0], {duration: 0.2, y: '5px', ease: 'slowmo'});

                dropdownActive = 0;
            }
            else {
                dropdown[0].classList.add("trigger-flex");
                var options = dropdown[0].querySelectorAll(".filter-dropdown-element");
                var hiddenInput = filterBox.querySelectorAll(".search-input");
                
                

                gsap.from(dropdown[0], {duration: 0.5, opacity: '0.3', y: '-10px', ease: 'expo'})
                gsap.to(filterIcon[0], {duration: 0.5, y: '-9px', x: '5px', transform: 'scale(0.7)', ease: 'slowmo'})
                dropdownActive = 1;
                hiddenInput[0].addEventListener('input', () => {
                    valueToChange[0].innerHTML = inputTextValue.innerHTML;
                });
            }
            });
        });

        //hides the active dropdown if clicks outside of the dropdown
        document.addEventListener('click', (event) => {
            if(event.target.closest(".filter-dropdown")) return;
            if(event.target.closest(".searchbar-filter")) return;

            if (dropdownActive == 1) {
                dropdowns.forEach((dropdown) => {
                    dropdown.classList.remove("trigger-flex");
                    var filterIcons = document.querySelectorAll(".filter-icon");
                    filterIcons.forEach((filterIcon) => {
                        IconCloseAnimation(filterIcon);
                    });
                })
            }
        });
    }
}

searchbarDropdown();
