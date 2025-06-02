import "./bootstrap";

const sidebarToggle = document.getElementById("sidebar-toggle");
const sidebar = document.getElementById("sidebar");
const mainContent = document.getElementById("main-content");
sidebarToggle.addEventListener("click", () => {
    // sidebar.classList.toggle("w-64");
    sidebar.classList.toggle("lg:w-64");
    mainContent.classList.toggle("lg:ml-64");
});
