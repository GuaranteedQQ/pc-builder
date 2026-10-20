// Přepínač světlého / tmavého režimu.
// Tlačítko v hlavičce má atribut data-theme-toggle.

const toggle = document.querySelector('[data-theme-toggle]');

if (toggle) {
    toggle.addEventListener('click', () => {
        const root = document.documentElement;
        const next = root.dataset.theme === 'dark' ? 'light' : 'dark';

        root.dataset.theme = next;
        localStorage.setItem('theme', next); // zapamatujeme si volbu
    });
}
