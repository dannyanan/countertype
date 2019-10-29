
function toggleMenu () {
    let button = document.querySelector(".menuButton");
    let menu = document.querySelector(".sidebar");
    let isOpen = false;

    button.on('click', function() {
        if (isOpen === false) {
            button.style.transform('translateX', '0');
            console.log('clicked');
            menu.style.transform('translateX', '999px');
        };
    });

}

toggleMenu();
