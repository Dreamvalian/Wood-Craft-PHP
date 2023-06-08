// Get all the details elements
const accordionItems = document.querySelectorAll('details');

// Add event listener to each accordion item
accordionItems.forEach(function (item) {
  item.addEventListener('click', function () {
    // Collapse all other accordion items
    accordionItems.forEach(function (otherItem) {
      if (otherItem !== item) {
        otherItem.removeAttribute('open');
      }
    });
  });
});


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