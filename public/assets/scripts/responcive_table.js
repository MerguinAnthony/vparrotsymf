// Si la largeur d'écran est inférieure à 768px, on affiche la card, sinon on affiche le tableau

if (window.matchMedia("(max-width: 768px)").matches) {
  document.getElementById("card").classList.remove("d-none");
  document.getElementById("table").classList.add("d-none");
} else {
  document.getElementById("card").classList.add("d-none");
  document.getElementById("table").classList.remove("d-none");
}
window.addEventListener("resize", function () {
  if (window.matchMedia("(max-width: 768px)").matches) {
    document.getElementById("card").classList.remove("d-none");
    document.getElementById("table").classList.add("d-none");
  } else {
    document.getElementById("card").classList.add("d-none");
    document.getElementById("table").classList.remove("d-none");
  }
});
