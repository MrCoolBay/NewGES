let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
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

setInterval(changeImage, 2000); // Change l'image toutes les 5 secondes (5000ms)

function flipCard() {
  var cardInner = document.getElementById('cardInner');
  cardInner.style.transform = 'rotateY(180deg)';
  setTimeout(function() {
    cardInner.style.transform = 'rotateY(0deg)';
  }, 5000); // Attendre 800ms avant de retourner la carte
}

setInterval(function() {
  flipCard();
}, 11000); // Appel de flipCard toutes les 4 secondes (2 secondes pour chaque face)
