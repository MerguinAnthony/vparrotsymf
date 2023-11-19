// VEHICULES IMAGES

// Modifier la case à cocher pour supprimer l'image

const labelVehicule1 = document.querySelector(
  'label[for="vehicles_image1_delete"]'
);
const checkboxVehicule1 = document.querySelector("#vehicles_image1_delete");
const labelVehicule2 = document.querySelector(
  'label[for="vehicles_image2_delete"]'
);
const checkboxVehicule2 = document.querySelector("#vehicles_image2_delete");
const labelVehicule3 = document.querySelector(
  'label[for="vehicles_image3_delete"]'
);
const checkboxVehicule3 = document.querySelector("#vehicles_image3_delete");

labelVehicule2.textContent = "Supprimer ?";
labelVehicule1.style.color = "var(--clr-secondary)";
labelVehicule1.style.marginRight = "1rem";
labelVehicule1.style.marginBottom = "1rem";
labelVehicule1.classList.add("form-check-label");

labelVehicule2.textContent = "Supprimer ?";
labelVehicule2.style.color = "var(--clr-secondary)";
labelVehicule2.style.marginRight = "1rem";
labelVehicule2.style.marginBottom = "1rem";
labelVehicule2.classList.add("form-check-label");

labelVehicule3.textContent = "Supprimer ?";
labelVehicule3.style.color = "var(--clr-secondary)";
labelVehicule3.style.marginRight = "1rem";
labelVehicule3.style.marginBottom = "1rem";
labelVehicule3.classList.add("form-check-label");

// Modifier le lien download pour l'image

const links = document.querySelectorAll("a[download]");

if (links.length >= 6) {
  const firstLink = links[0];
  const secondLink = links[1];
  const thirdLink = links[2];
  const fourthLink = links[3];
  const fifthLink = links[4];
  const sixthLink = links[5];

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
    "mx-auto",
    "rounded-0"
  );

  const secondImage = thirdLink.querySelector("img");
  secondImage.classList.add("img-fluid");

  fourthLink.textContent = "Télécharger l'image";
  fourthLink.classList.add(
    "btn",
    "btn-primary",
    "mt-2",
    "d-flex",
    "justify-content-center",
    "align-items-center",
    "w-50",
    "mx-auto",
    "rounded-0"
  );

  const thirdImage = fifthLink.querySelector("img");
  thirdImage.classList.add("img-fluid");

  sixthLink.textContent = "Télécharger l'image";
  sixthLink.classList.add(
    "btn",
    "btn-primary",
    "mt-2",
    "d-flex",
    "justify-content-center",
    "align-items-center",
    "w-50",
    "mx-auto",
    "rounded-0"
  );
}
