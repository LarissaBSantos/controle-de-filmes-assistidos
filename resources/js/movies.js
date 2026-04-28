/* =====================
  FORMS (CREATE)
===================== */
function showForm() {
  document.querySelector('.form-container.hidden').classList.remove('hidden');
}

function hiddenForm() {
  document.querySelector('.form-container').classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('.add-movie');

  button.addEventListener('click', () => {
    showForm();
  });
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