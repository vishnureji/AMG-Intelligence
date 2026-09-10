// Loads shared partials (navbar/footer) into any element with [data-include],
// then marks the current page's nav link active via [data-page] on <body>.
document.addEventListener('DOMContentLoaded', () => {
  const includes = document.querySelectorAll('[data-include]');
  const page = document.body.getAttribute('data-page');

  Promise.all(
    Array.from(includes).map((el) =>
      fetch(el.getAttribute('data-include'))
        .then((res) => res.text())
        .then((html) => { el.innerHTML = html; })
        .catch(() => {
          el.innerHTML = '<p class="text-danger small text-center py-2">Unable to load shared partial — serve this site from a local server (not file://) for includes to work.</p>';
        })
    )
  ).then(() => {
    if (page) {
      const link = document.querySelector(`[data-nav="${page}"]`);
      if (link) link.classList.add('active', 'fw-semibold');
    }
  });
});
