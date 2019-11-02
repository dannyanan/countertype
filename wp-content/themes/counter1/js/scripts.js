document.addEventListener('DOMContentLoaded', function() {
     function toggleMenu() {
          console.log('button loaded');
          let button = document.getElementById("menuButton");
          let menu = document.getElementById("sidebar");
          let isOpen = false;

          button.addEventListener("click", function() {
          if (isOpen === false) {
               button.style.display = "none";
               console.log('clicked');
               menu.style.display = "block";
          }
          });

     };

});

