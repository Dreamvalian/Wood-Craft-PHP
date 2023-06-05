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