document.querySelector('.js-navigation__menu-opener').addEventListener('click', function () {
  document.querySelector('.js-header-drawer').classList.toggle('is-visible');
  document.querySelector('.page').classList.toggle('move');
});