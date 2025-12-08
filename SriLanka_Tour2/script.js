let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
//service
document.querySelectorAll('.service-box').forEach(box => {
    box.addEventListener('mouseover', () => {
        box.style.backgroundColor = '#6b765a'; // Subtle color change on hover
    });
    box.addEventListener('mouseout', () => {
        box.style.backgroundColor = '#43372f'; // Revert to original
    });
});



