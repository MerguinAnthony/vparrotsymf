// SERVICES IMAGES

// Modifier la case à cocher pour supprimer l'image

const label = document.querySelector('label[for="service_imageFile_delete"]');
const checkbox = document.querySelector("#service_imageFile_delete");

label.textContent = "Supprimer ?";
label.style.color = "var(--clr-secondary)";
label.style.marginRight = "1rem";
label.style.marginBottom = "1rem";
label.classList.add("form-check-label");

checkbox.addEventListener("change", function () {
  if (checkbox.checked) {
    label.textContent = "Oui, je veux supprimer l'image";
  } else {
    label.textContent = "Supprimer ?";
  }
});

// Modifier le lien download pour l'image

const links = document.querySelectorAll("a[download]");

if (links.length >= 2) {
  const firstLink = links[0];
  const secondLink = links[1];

  const firstImage = firstLink.querySelector("img");
  firstImage.classList.add("img-fluid");

  secondLink.textContent = "Télécharger l'image";
  secondLink.classList.add(
    "btn",
    "btn-primary",
    "mt-2",
    "d-flex",
    "justify-content-center",
    "align-items-center",
    "w-50",
    "mx-auto"
  );
}
