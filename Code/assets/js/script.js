let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".fa-bars");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

var images = document.querySelectorAll('.grand-rectangle img');
var currentImageIndex = 0;

function changeImage() {
  images[currentImageIndex].style.display = 'none';
  currentImageIndex = (currentImageIndex + 1) % images.length;
  images[currentImageIndex].style.display = 'block';
}

setInterval(changeImage, 6000); // Change l'image toutes les 5 secondes (5000ms)

function flipCard() {
  var cardInner = document.getElementById('cardInner');
  cardInner.style.transform = 'rotateY(180deg)';
  setTimeout(function() {
    cardInner.style.transform = 'rotateY(0deg)';
  }, 5000);
}

setInterval(function() {
  flipCard();
}, 11000);

document.querySelector('.fa-bars').addEventListener('click', function() {
    this.style.transition = 'transform 0.5s';
    if (this.style.transform === 'rotate(90deg)') {
      this.style.transform = 'rotate(0deg)';
    } else {
      this.style.transform = 'rotate(90deg)';
    }
});

let darkModeBtn = document.querySelector("#darkModeBtn");
let darkMode = document.querySelector("#iconbtn");
let body = document.querySelector("body");
let section = document.querySelector("section");
let menu = document.querySelector(".sidebar");
let footer = document.querySelector(".footer");
let menuPink = document.querySelector(".profile-details");
let subMenus = document.querySelectorAll("ul.sub-menu"); // Modified line


darkModeBtn.addEventListener("click", () => {

  if (localStorage.getItem('darkMode') !== 'enabled') {
    body.classList.add("dark-mode");
    section.classList.add("dark-mode");
    menu.classList.add("dark-mode");
    footer.classList.add("dark-mode");
    menuPink.classList.add("dark-mode");
    subMenus.forEach(subMenu => subMenu.classList.add("dark-mode")); // Added line

    // Change le bouton en icône de soleil
    darkMode.classList.remove("fa-moon");
    darkMode.classList.add("fa-sun");
    // Enregistre l'état dans le stockage local
    localStorage.setItem('darkMode', 'enabled');
  } else {
    body.classList.remove("dark-mode");
    section.classList.remove("dark-mode");
    menu.classList.remove("dark-mode");
    footer.classList.remove("dark-mode");
    menuPink.classList.remove("dark-mode");
    subMenus.forEach(subMenu => subMenu.classList.remove("dark-mode")); // Added line

    // Change le bouton en icône de lune
    darkMode.classList.remove("fa-sun");
    darkMode.classList.add("fa-moon");
    // Supprime l'état du stockage local
    localStorage.removeItem('darkMode');
  }
});

document.addEventListener('DOMContentLoaded', (event) => {
  if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add("dark-mode");
    section.classList.add("dark-mode");
    menu.classList.add("dark-mode");
    footer.classList.add("dark-mode");
    menuPink.classList.add("dark-mode");
    subMenus.forEach(subMenu => subMenu.classList.add("dark-mode")); // Added line
    
    darkMode.classList.remove("fa-moon");
    darkMode.classList.add("fa-sun");
  }
});

