document.addEventListener("DOMContentLoaded", function () {
    // Navbar toggler
    $(document).ready(function () {
        $(".navbar-toggler").click(function () {
            $(".navbar-collapse").toggleClass("collapsing");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});

// admin document filtering
function filterTable() {
    var table, rows, i, j, cells, filter, found;
    table = document.getElementById("document-list");
    rows = table.rows;

    var typeFilter = document.getElementById("type").value;

    for (i = 1; i < rows.length; i++) {
        cells = rows[i].getElementsByTagName("TD");
        found = true;

        if (
            typeFilter !== "" &&
            cells[2].innerHTML
                .toLowerCase()
                .indexOf(typeFilter.toLowerCase()) === -1
        ) {
            found = false;
        }

        if (found) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

document.getElementById("type").addEventListener("change", filterTable);

function resetFilters() {
    document.getElementById("type").value = "";
    filterTable();
}
document
    .getElementById("preview-button")
    .addEventListener("click", function () {
        document.getElementById("loading-spinner").style.display =
            "inline-block";
        setTimeout(function () {
            document.getElementById("loading-spinner").style.display = "none";
        }, 2000); // adjust the timeout value as needed
    });
