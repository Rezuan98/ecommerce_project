const slider = document.getElementById('slider');
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');

let currentPosition = 0;

// Function to determine the number of visible logos dynamically
function getVisibleLogosCount() {
  if (window.innerWidth <= 576) {
    return 1; // 1 logo for very small devices
  } else if (window.innerWidth <= 768) {
    return 2; // 2 logos for small screens
  } else if (window.innerWidth <= 992) {
    return 3; // 3 logos for tablets
  } else if (window.innerWidth <= 1200) {
    return 4; // 4 logos for medium screens
  } else {
    return 6; // 6 logos for large screens
  }
}

// Function to get the width of one logo (including margin)
function getLogoWidth() {
  const logo = slider.querySelector('.logo');
  if (!logo) return 0;
  const style = window.getComputedStyle(logo);
  const marginRight = parseInt(style.marginRight, 10);
  const marginLeft = parseInt(style.marginLeft, 10);
  return logo.offsetWidth + marginLeft + marginRight;
}

// Function to adjust transform limits
function getMaxScroll() {
  const logoWidth = getLogoWidth();
  const totalLogos = slider.children.length;
  const visibleLogos = getVisibleLogosCount();
  return logoWidth * (totalLogos - visibleLogos);
}

// Handle the right arrow click
rightArrow.addEventListener('click', () => {
  const logoWidth = getLogoWidth();
  const visibleLogos = getVisibleLogosCount();
  const maxScroll = getMaxScroll();

  if (Math.abs(currentPosition) < maxScroll) {
    currentPosition -= logoWidth * visibleLogos; // Move by visible logos count
    slider.style.transform = `translateX(${currentPosition}px)`;
  }
});

// Handle the left arrow click
leftArrow.addEventListener('click', () => {
  const logoWidth = getLogoWidth();
  const visibleLogos = getVisibleLogosCount();

  if (currentPosition < 0) {
    currentPosition += logoWidth * visibleLogos; // Move back by visible logos count
    slider.style.transform = `translateX(${currentPosition}px)`;
  }
});

// Handle screen resizing
window.addEventListener('resize', () => {
  // Reset currentPosition to prevent overflow
  currentPosition = 0;
  slider.style.transform = 'translateX(0)';
});
