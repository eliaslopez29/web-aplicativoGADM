menuToggle = document.querySelector(".menu-toggle");
menuToggle.onclick=function() { 
        navbar=document.querySelector(".nav-bar")
        navbar.classList.toggle("active")

    }







// Función para mostrar/ocultar la información al hacer clic
function toggleInfo(sectionId) {
    const info = document.getElementById(sectionId + "Info");
    if (info.style.display === "none" || info.style.display === "") {
        info.style.display = "block";
    } else {
        info.style.display = "none";
    }
}

// Agrega un evento de clic a cada botón de flecha
document.addEventListener("DOMContentLoaded", function() {
    const toggleButtons = document.querySelectorAll(".toggle-button");
    toggleButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const sectionId = this.getAttribute("data-section");
            toggleInfo(sectionId);
        });
    });
});

