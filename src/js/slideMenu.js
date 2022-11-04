const toggler = document.querySelector('.js-menu_toggler');
const menu = document.querySelector('.js-menu');

toggler.addEventListener('click', () => {

  toggler.classList.toggle('active');

  menu.classList.toggle('active');

})