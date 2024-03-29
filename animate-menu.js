function menuAnimate() {
    var menu = document.getElementById("mobile-menu-links");
    if (menu.classList.contains("open")) {
        menu.classList.remove("open");
    } else {
        menu.classList.add("open");
    }
}

// Adiciona um event listener para cada link dentro do menu móvel
document.querySelectorAll('.mobile-menu-links a').forEach(link => {
    link.addEventListener('click', () => {
        var menu = document.getElementById("mobile-menu-links");
        menu.classList.remove("open");
    });
});