// Sort vehicles table in backoffice
document.addEventListener("DOMContentLoaded", function () {
  const sortDate = document.getElementById("sortDate");
  const sortDenom = document.getElementById("sortDenom");
  const sortPrice = document.getElementById("sortPrice");

  let sortDateDirection = 1;
  let sortDenomDirection = 1;
  let sortPriceDirection = 1;

  sortDate.addEventListener("click", function () {
    sortTable("td-date", sortDateDirection);
    sortDateDirection *= -1;
  });

  sortDenom.addEventListener("click", function () {
    sortTable("td-denom", sortDenomDirection);
    sortDenomDirection *= -1;
  });

  sortPrice.addEventListener("click", function () {
    sortTable("td-price", sortPriceDirection);
    sortPriceDirection *= -1;
  });

  function sortTable(className, direction) {
    const table = document.querySelector("table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));

    rows.sort((a, b) => {
      const valueA = a.querySelector("." + className).textContent.trim();
      const valueB = b.querySelector("." + className).textContent.trim();
      if (className === "td-date") {
        // Pour trier par date, convertissez les chaînes en objets Date
        const dateA = new Date(valueA);
        const dateB = new Date(valueB);
        return (dateA - dateB) * direction;
      } else if (className === "td-price") {
        // Pour trier par prix, convertissez les chaînes en nombres
        const priceA = parseFloat(valueA);
        const priceB = parseFloat(valueB);
        return (priceA - priceB) * direction;
      } else {
        // Tri alphabétique pour "Dénomination"
        return valueA.localeCompare(valueB) * direction;
      }
    });

    rows.forEach((row) => {
      tbody.appendChild(row);
    });
  }
});

// Sort avis table in backoffice

document.addEventListener("DOMContentLoaded", function () {
  const table = document.querySelector("table");
  const tableBody = table.querySelector("tbody");
  const rows = Array.from(tableBody.querySelectorAll("tr"));

  let currentSortColumn = null;
  let sortDirection = "asc";

  function sortByColumn(columnIndex) {
    if (currentSortColumn === columnIndex) {
      sortDirection = sortDirection === "asc" ? "desc" : "asc";
    } else {
      sortDirection = "asc";
    }

    rows.sort((a, b) => {
      const cellA = a.querySelectorAll("td")[columnIndex].textContent;
      const cellB = b.querySelectorAll("td")[columnIndex].textContent;

      return cellA.localeCompare(cellB) * (sortDirection === "asc" ? 1 : -1);
    });

    currentSortColumn = columnIndex;

    tableBody.innerHTML = "";
    rows.forEach((row) => tableBody.appendChild(row));
  }

  const headers = table.querySelectorAll(
    "#sortlastname, #sortFirstname, #sortFuction"
  );
  headers.forEach((header, columnIndex) => {
    header.addEventListener("click", () => {
      sortByColumn(columnIndex);
    });
  });
});

// sort avis table in backoffice

document.addEventListener("DOMContentLoaded", function () {
  const sortDate = document.getElementById("sortDate");
  const sortLastname = document.getElementById("sortlastname");
  const sortFirstname = document.getElementById("sortfirstname");
  const sortRank = document.getElementById("sortRank");

  let sortDateDirection = 1;
  let sortLastnameDirection = 1;
  let sortFirstnameDirection = 1;
  let sortRankDirection = 1;

  sortDate.addEventListener("click", function () {
    sortTable("td-date", sortDateDirection);
    sortDateDirection *= -1;
  });

  sortLastname.addEventListener("click", function () {
    sortTable("td-lastname", sortLastnameDirection);
    sortLastnameDirection *= -1;
  });

  sortFirstname.addEventListener("click", function () {
    sortTable("td-firstname", sortFirstnameDirection);
    sortFirstnameDirection *= -1;
  });

  sortRank.addEventListener("click", function () {
    sortTable("td-rank", sortRankDirection);
    sortRankDirection *= -1;
  });

  function sortTable(className, direction) {
    const table = document.querySelector("table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));

    rows.sort((a, b) => {
      const valueA = a.querySelector("." + className).textContent.trim();
      const valueB = b.querySelector("." + className).textContent.trim();

      if (className === "td-date") {
        // Pour trier par date, convertissez les chaînes en objets Date
        const dateA = new Date(valueA);
        const dateB = new Date(valueB);
        return (dateA - dateB) * direction;
      } else if (className === "td-rank") {
        // Pour trier par rang, convertissez les chaînes en nombres
        const rankA = parseFloat(valueA);
        const rankB = parseFloat(valueB);
        return (rankA - rankB) * direction;
      } else {
        // Tri alphabétique pour les autres colonnes
        return valueA.localeCompare(valueB) * direction;
      }
    });

    // Mettez à jour le tableau avec les nouvelles lignes triées
    tbody.innerHTML = "";
    rows.forEach((row) => {
      tbody.appendChild(row);
    });
  }
});
