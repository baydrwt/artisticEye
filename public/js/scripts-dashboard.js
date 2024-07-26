// Sidebar
window.addEventListener("DOMContentLoaded", (event) => {
    const sidebarToggle = document.body.querySelector("#sidebarToggle");
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", (event) => {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
            localStorage.setItem(
                "sb|sidebar-toggle",
                document.body.classList.contains("sb-sidenav-toggled")
            );
        });
    }
});

// Sorted Data Table
document.addEventListener("DOMContentLoaded", function () {
    const dataTable = document.getElementById("data-table");
    const headers = dataTable.querySelectorAll("th[data-column]");

    headers.forEach((header, index) => {
        header.addEventListener("click", () => {
            const column = header.getAttribute("data-column");
            const rows = Array.from(dataTable.querySelectorAll("tbody tr"));

            rows.sort((a, b) => {
                const aValue = a.querySelector(
                    `td:nth-child(${index + 1})`
                ).textContent;
                const bValue = b.querySelector(
                    `td:nth-child(${index + 1})`
                ).textContent;

                return aValue.localeCompare(bValue, undefined, {
                    numeric: true,
                });
            });

            if (header.classList.contains("sorted")) {
                rows.reverse();
            }

            headers.forEach((otherHeader) => {
                if (otherHeader !== header) {
                    otherHeader.classList.remove("sorted");
                }
            });
            header.classList.toggle("sorted");

            rows.forEach((row) => {
                dataTable.querySelector("tbody").appendChild(row);
            });
        });
    });
});

// Update Status
const statusElements = document.querySelectorAll(".status");
const approvedIcons = document.querySelectorAll(".fa-circle-check");
const rejectedIcons = document.querySelectorAll(".fa-circle-xmark");
const pendingIcons = document.querySelectorAll(".fa-clock");

statusElements.forEach((stat, index) => {
    if (stat.textContent.trim() === "success") {
        approvedIcons[index].style.display = "inline";
    } else if (stat.textContent.trim() === "pending") {
        pendingIcons[index].style.display = "inline";
    } else {
        rejectedIcons[index].style.display = "inline";
    }
});
