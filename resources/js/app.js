import "./bootstrap";


document.addEventListener('livewire:navigated', () => { 
    // Tu lógica para abrir/cerrar el sidebar aquí
    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebarClose = document.getElementById("sidebar-close-toggle");
    const sidebar = document.getElementById("sidebar");
    const bgOpacity = document.getElementById("bg-opacity");
    const mainContent = document.getElementById("main-content");
    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("w-0");
        sidebar.classList.toggle("w-64");
        sidebar.classList.toggle("lg:w-64");
        sidebar.classList.toggle("lg:w-0");
        mainContent.classList.toggle("lg:ml-64");
        bgOpacity.classList.toggle("hidden");
    });

    sidebarClose.addEventListener("click", () => {
        sidebar.classList.toggle("w-0");
        sidebar.classList.toggle("w-64");
        bgOpacity.classList.toggle("hidden");
    });

    bgOpacity.addEventListener("click", () => {
        sidebar.classList.toggle("w-0");
        sidebar.classList.toggle("w-64");
        mainContent.classList.toggle("lg:ml-64");
        bgOpacity.classList.toggle("hidden");
    });
});
