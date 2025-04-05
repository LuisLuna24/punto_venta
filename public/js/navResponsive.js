const nav = document.getElementById('nav');
const button = document.getElementById('toggleButton');
const boxShadow = document.getElementById('box_shadow');

// Clases CSS que usaremos
const HIDDEN_CLASS = 'hidden';
const TRANSLATE_CLASS = '-translate-x-full';

function openMenu() {
    nav.classList.remove(TRANSLATE_CLASS);
    boxShadow.classList.remove(HIDDEN_CLASS);
    document.body.style.overflow = 'hidden'; // Evita scroll del body cuando el menú está abierto
}

function closeMenu() {
    nav.classList.add(TRANSLATE_CLASS);
    boxShadow.classList.add(HIDDEN_CLASS);
    document.body.style.overflow = ''; // Restaura el scroll del body
}

function toggleMenu() {
    if (nav.classList.contains(TRANSLATE_CLASS)) {
        openMenu();
    } else {
        closeMenu();
    }
}

// Event listeners
button.addEventListener('click', toggleMenu);
boxShadow.addEventListener('click', closeMenu);

// Manejo del resize
function handleResize() {
    if (window.innerWidth >= 768) {
        // Pantalla grande - asegurar menú visible
        nav.classList.remove(TRANSLATE_CLASS);
        boxShadow.classList.add(HIDDEN_CLASS);
        document.body.style.overflow = '';
    } else {
        // Pantalla pequeña - asegurar menú oculto
        closeMenu();
    }
}

// Escuchar cambios de tamaño
window.addEventListener('resize', handleResize);

// Inicializar estado según el tamaño de pantalla
handleResize();

// Cerrar menú al presionar Escape
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !nav.classList.contains(TRANSLATE_CLASS) && window.innerWidth < 768) {
        closeMenu();
    }
});


