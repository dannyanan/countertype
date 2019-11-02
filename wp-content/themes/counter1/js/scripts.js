//SCRIPT FOR OPENING/CLOSING MENU

document.addEventListener('DOMContentLoaded', function() {
     console.log('button loaded');
     let openButton = document.getElementById("menuButton");
     let closeButton = document.getElementById("closeMenu");
     let menu = document.getElementById("sidebar");
     let isOpen = false;
     function noScroll() {
          window.scrollTo(0,0);
     }

     openButton.addEventListener("click", function() {
          if (isOpen === false) {
               menu.classList.remove('hidden');
               window.addEventListener('scroll', noScroll); // Disables scroll when user tries to scroll window
               isOpen = true;
          }
     });

     closeButton.addEventListener("click", function() {
          if (isOpen === true) {
               menu.classList.add('hidden');
               window.removeEventListener('scroll', noScroll); // Re-enables scroll once menu is hidden
               isOpen = false;
          }
     })

});

