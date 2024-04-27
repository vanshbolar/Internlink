const navLinkEls = document.querySelectorAll('.navbar-item');
navLinkEls.forEach(navLinkEl => {
    navLinkEl.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior
        document.querySelector('.active')?.classList.remove('active');
        this.classList.add('active');
    });
});