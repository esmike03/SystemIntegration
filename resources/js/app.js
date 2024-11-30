import './bootstrap';
import Alpine from 'alpinejs';
import 'animate.css';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const drawerToggle = document.querySelector('[data-drawer-toggle]');
    const sidebar = document.querySelector('#default-sidebar');

    drawerToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
});

function data() {
    return {
        dark: false,
        toggleDarkMode() {
            this.dark = !this.dark;
            document.documentElement.classList.toggle('theme-dark', this.dark);
        },
    };
}

