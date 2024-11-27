window.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    const body = document.body;

    preloader.style.cssText = `
        display: unset;
        opacity: 0;
        visibility: hidden;
        
    `;

    body.style.overflowY = 'scroll';

})