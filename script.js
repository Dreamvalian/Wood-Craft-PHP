


// Smooth scrolling behavior when clicking on the links
document.querySelectorAll('.link-to a').forEach(link => {
  link.addEventListener('click', smoothScroll);
});

function smoothScroll(event) {
  event.preventDefault();
  const targetId = this.getAttribute('href');
  const targetElement = document.querySelector(targetId);

  if (targetElement) {
    window.scrollTo({
      top: targetElement.offsetTop,
      behavior: 'smooth'
    });
  }
}