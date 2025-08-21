document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('[data-toggle="nav"]');
  const nav = document.getElementById('site-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true' || false;
      toggle.setAttribute('aria-expanded', (!expanded).toString());
      nav.classList.toggle('is-open');
    });
  }
});
