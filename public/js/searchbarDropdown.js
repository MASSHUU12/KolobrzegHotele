const filterBoxes = document.querySelectorAll(".searchbar-filter");
const dropdowns = document.querySelectorAll(".filter-dropdown");
var dropdownActive = 0;

function IconCloseAnimation(icon) {
    gsap.to(icon, {duration: 0.5, y: '0', x: '0', transform: 'scale(1)', ease: 'slowmo'})
}

filterBoxes.forEach((filterBox) => {
    filterBox.addEventListener('click', () => {
      const dropdown = filterBox.querySelectorAll(".filter-dropdown");
      const filterIcon = filterBox.querySelectorAll(".filter-icon");
      if (dropdown[0].classList.contains("trigger-flex")) {
        dropdown[0].classList.remove("trigger-flex");
        IconCloseAnimation(filterIcon[0]);
        const endValue = filterBox.querySelectorAll(".filter-end-value");
        gsap.from(endValue[0], {duration: 1, opacity: '0', ease: 'slowmo'});
        gsap.from(endValue[0], {duration: 0.2, y: '5px', ease: 'slowmo'});

        dropdownActive = 0;
      }
      else {
        dropdown[0].classList.add("trigger-flex");
        const options = dropdown[0].querySelectorAll(".filter-dropdown-element");
        const hiddenInput = filterBox.querySelectorAll(".search-input");
        const valueToChange = filterBox.querySelectorAll(".filter-end-value");

        gsap.from(dropdown[0], {duration: 0.5, opacity: '0.3', y: '-10px', ease: 'expo'})
        gsap.to(filterIcon[0], {duration: 0.5, y: '-9px', x: '5px', transform: 'scale(0.7)', ease: 'slowmo'})
        dropdownActive = 1;
        var delay = 0.2;
        options.forEach((option) => {
            gsap.from(option, {delay: delay, duration: 0.4, opacity: '0', x: '-5px', ease: 'slowmo'})
            delay = delay+0.1;
            const optionValue = option.querySelectorAll("p");
            option.addEventListener('click', () => {
                const optionText = optionValue[0].innerHTML;
                hiddenInput[0].value = optionText;
                valueToChange[0].innerHTML = optionText;
            });
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
            const filterIcons = document.querySelectorAll(".filter-icon");
            filterIcons.forEach((filterIcon) => {
                IconCloseAnimation(filterIcon);
            });
        })
    }
});