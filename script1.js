function animatedForm() {
  const arrows = document.querySelectorAll('.fa-arrow-down');

  arrows.forEach(arrow => {
    arrow.addEventListener('click', () => {
      const input = arrow.previousElementSibling;
      const parent = arrow.parentElement;
      const nextForm = parent.nextElementSibling;

      //check vaidaton
      if (input.type === 'text' && validateUser(input)) {
        nextSlide(parent, nextForm);
      } else if (input.type === 'email' && validateEmail(input)) {
        nextSlide(parent, nextForm);
      } else if (input.type === 'text' && validateUser(input)) {
        nextSlide(parent, nextForm);
      } else {
        parent.style.animation = 'shake 0.3s ease-in-out';
      }

      //animation
      parent.addEventListener('animationend', () => {
        parent.style.animation = '';
      });
    });
  });
}

function validateUser(user) {
  // let input = document.getElementsByTagName('input');
  if (user.value.length < 6) {
    user.placeholder = '6 caractères minimum.';
    user.parentElement.style.border = '1px solid red';
    user.previousElementSibling.style.color = 'red';
    error();
  } else {
    error();
    return true;
  }
}

function validateEmail(email) {
  const validation = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (validation.test(email.value)) {
    error();
    return true;
  } else {
    email.placeholder = 'Email invalide';
    email.previousElementSibling.style.color = 'red';
    email.parentElement.style.border = '1px solid red';
    error();
  }
}

function nextSlide(parent, nextForm) {
  parent.classList.add('inactive');
  parent.classList.remove('active');
  nextForm.classList.add('active');
}

function error() {
  document.body.style.animation = 'shake 0s ease-in-out';
}

function menuToggle() {
  let nav = document.getElementById('navBar');
  nav.classList.toggle('active');
}

animatedForm();