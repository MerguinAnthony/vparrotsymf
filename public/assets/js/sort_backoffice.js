// Sort vehicles table in backoffice

document.addEventListener("DOMContentLoaded", function () {
  const table = document.querySelector("table");
  const tableBody = table.querySelector("tbody");
  const rows = Array.from(tableBody.querySelectorAll("tr"));

  let currentSortColumn = null;
  let sortDirection = "asc";

  function parseDate(dateString) {
    const [day, month, year] = dateString.split("/");
    return new Date(`${year}-${month}-${day}`);
  }

  function sortByColumn(columnIndex) {
    if (currentSortColumn === columnIndex) {
      sortDirection = sortDirection === "asc" ? "desc" : "asc";
    } else {
      sortDirection = "asc";
    }

    rows.sort((a, b) => {
      const cellA = a.querySelectorAll("td")[columnIndex].textContent;
      const cellB = b.querySelectorAll("td")[columnIndex].textContent;

      if (columnIndex === 2) {
        // Colonne des prix
        const priceA = parseFloat(cellA.replace("€", "").replace(",", ""));
        const priceB = parseFloat(cellB.replace("€", "").replace(",", ""));
        return (priceA - priceB) * (sortDirection === "asc" ? 1 : -1);
      } else if (columnIndex === 0) {
        // Colonne des dates (exemple : première colonne)
        const dateA = parseDate(cellA);
        const dateB = parseDate(cellB);
        return (dateA - dateB) * (sortDirection === "asc" ? 1 : -1);
      } else {
        return cellA.localeCompare(cellB) * (sortDirection === "asc" ? 1 : -1);
      }
    });

    currentSortColumn = columnIndex;

    tableBody.innerHTML = "";
    rows.forEach((row) => tableBody.appendChild(row));
  }

  const headers = table.querySelectorAll(".th-date, .th-denom, .th-price");
  headers.forEach((header, columnIndex) => {
    header.addEventListener("click", () => {
      sortByColumn(columnIndex);
    });
  });
});

// Sort employee table in backoffice

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
