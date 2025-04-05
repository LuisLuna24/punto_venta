document.addEventListener("DOMContentLoaded", function() {
    // Elementos del DOM
    const themeToggle = document.getElementById('themeToggle');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');
    const html = document.documentElement;

    // Función para aplicar el tema
    function setTheme(theme) {
        if (theme === 'dark') {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            iconSun?.classList.remove('hidden');
            iconMoon?.classList.add('hidden');
        } else {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            iconSun?.classList.add('hidden');
            iconMoon?.classList.remove('hidden');
        }
    }

    // Función para alternar entre temas
    function toggleTheme() {
        const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
        setTheme(currentTheme === 'dark' ? 'light' : 'dark');
    }

    // Inicialización del tema al cargar la página
    function initializeTheme() {
        const storedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (storedTheme) {
            setTheme(storedTheme);
        } else {
            setTheme(systemPrefersDark ? 'dark' : 'light');
        }
    }

    // Escuchar cambios en las preferencias del sistema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Asignar evento al botón
    themeToggle?.addEventListener('click', toggleTheme);

    // Inicializar el tema
    initializeTheme();
});
