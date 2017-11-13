module.exports = function () {
  const ajax = require('codex.ajax');

  document.querySelector('.js-navigation__menu-opener').addEventListener('click', function () {
    document.querySelector('.js-header-drawer').classList.toggle('is-visible');
    document.querySelector('.page').classList.toggle('move');
  });

  /**
     *
     */
  function sendForm() {
    let data = {
      name: document.getElementById('name').value,
      phone: document.getElementById('phone').value,
      email: document.getElementById('email').value
    };

    ajax.call({
      type: 'POST',
      url: '/',
      data: data,
      success(response) {
        document.getElementById('reg-form').classList.add('hide');
        document.getElementById('reg-form-message').classList.remove('hide');
      }
    });
  }

  return {
    sendForm
  };
}();
