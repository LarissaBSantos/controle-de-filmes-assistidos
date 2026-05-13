/* =====================
  FORMS (CREATE)
===================== */
function showForm() {
  document.querySelector('.form-container.hidden').classList.remove('hidden');
}

const renderedForm = document.querySelector('.form-container');
const btnCloseForm = document.querySelector('.btn-close');

btnCloseForm.addEventListener('click', () => {
  renderedForm.classList.add('hidden');
});

document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('.add-movie');
  const createForm = document.querySelector('.form-container.create');

  button.addEventListener('click', () => {
    if(renderedForm != createForm) return;
    showForm();
  });
});

const selectStatus = document.getElementById('status');
const divRating = document.querySelector('.form-group.range');  

selectStatus.addEventListener('change', () => {
  divRating.classList.toggle('hidden');
});

const inputRating = document.getElementById('rating');
const numberRating = document.querySelector('.bubble');

function showNumberRating() {
  numberRating.innerHTML = inputRating.value;

  const val = inputRating.value;
  const min = inputRating.min;
  const max = inputRating.max;
  const newValue = Number(((val - min) * 100) / (max - min));
  
  numberRating.style.left = `calc(${newValue}% + (${8 - newValue * 0.15}px))`;
}

inputRating.addEventListener('change', () => {
  showNumberRating();
});

document.addEventListener('DOMContentLoaded', () => {
  showNumberRating();
});

/* =====================
  INDEX (CARDS)
===================== */

const optionBtns = document.querySelectorAll('.options');

optionBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    const menu = btn.nextElementSibling;
    const menuOpen = document.querySelector('.card .menu:not(.hidden)');
    if (menuOpen && menuOpen !== menu) {
      menuOpen.classList.add('hidden');
    }
    menu.classList.toggle('hidden');
  });
});

document.addEventListener('click', (e) => {
  const menuOpen = document.querySelector('.card .menu:not(.hidden)');
  if (!menuOpen) return;
  const card = menuOpen.closest('.card');
  if (!card.contains(e.target)) menuOpen.classList.add('hidden');
});