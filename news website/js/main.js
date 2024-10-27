// Example JS code for a simple welcome alert
document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname === "/index.html" && sessionStorage.getItem("visited") !== "true") {
        alert("Welcome to the News Website!");
        sessionStorage.setItem("visited", "true");
    }

    // Dark Mode Toggle
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    }
});
