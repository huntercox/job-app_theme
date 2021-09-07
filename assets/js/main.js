/**
 * Sticky Header
 *
 */

// Update Scroll preview
// function updateScrollPosition() {
//   document.getElementById('showScroll').innerHTML = window.pageYOffset + 'px';
// }

// Detect scrolling
function detectScroll() {
  if (window.pageYOffset > 46) {
    //console.log('scrolled to 46px');
    showStickyHeader();
  } else {
    hideStickyHeader();
  }
}

// Show Header
function showStickyHeader() {
  const header = document.querySelector('.header--sticky');
  header.classList.add('show');
}
// Hide Header
function hideStickyHeader() {
  const header = document.querySelector('.header--sticky');
  header.classList.remove('show');
}

window.addEventListener('scroll', function () {
  //updateScrollPosition();
  detectScroll();
});


/**
 * Hamburger & Mobile Nav
 *
 */
window.onload = function () {

  // Header - Mobile Nav Menu
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('#navMenu');

  if (hamburger) {
    hamburger.addEventListener('click', function (event) {
      hamburger.classList.toggle('is-active');
      nav.classList.toggle('showNav');
    }, false);
  }

}//window.onload
