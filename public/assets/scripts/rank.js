// Récupérer les voitures
const rankCar = document.getElementById("rank-car");
const cars = rankCar.children;
const rankInput = document.getElementById("{{ form.rank.vars.id }}");

// Fonction pour mettre à jour la couleur des voitures en fonction de la valeur
function updateCarColor() {
  const value = rankInput.value;
  for (let i = 0; i < cars.length; i++) {
    if (i < value) {
      cars[i].style.color = "var(--clr-secondary)";
    } else {
      cars[i].style.color = "var(--clr-tertiary)";
    }
  }
}

// Ajouter un event listener pour le survol de la souris
rankCar.addEventListener("mouseover", function (e) {
  const target = e.target;
  if (target.tagName === "I") {
    const value = target.getAttribute("data-value");
    rankInput.value = value;
    updateCarColor();
  }
});

// Appeler la fonction lors du chargement initial de la page
updateCarColor();
