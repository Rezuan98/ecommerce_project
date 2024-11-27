


































const slider = document.getElementById('slider');
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');

let currentPosition = 0;

// Function to determine the number of visible logos
function getVisibleLogosCount() {
  return window.innerWidth <= 768 ? 3 : 6; // 3 for mobile, 6 for desktop
}

// Function to get the width of one logo (including margin)
function getLogoWidth() {
  const logo = slider.querySelector('.logo');
  const style = window.getComputedStyle(logo);
  const marginRight = parseInt(style.marginRight);
  const marginLeft = parseInt(style.marginLeft);
  return logo.offsetWidth + marginLeft + marginRight;
}

// Handle the right arrow click
rightArrow.addEventListener('click', () => {
  const logoWidth = getLogoWidth();
  const visibleLogos = getVisibleLogosCount();
  const maxScroll = slider.scrollWidth - slider.parentElement.offsetWidth;

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























// const slider = document.getElementById('slider');
// const leftArrow = document.getElementById('left-arrow');
// const rightArrow = document.getElementById('right-arrow');

// // Settings
// const logoWidth = slider.querySelector('.logo').offsetWidth + 20; // Logo width + margin
// let currentPosition = 0;

// // Move slider to the right
// rightArrow.addEventListener('click', () => {
//   const maxScroll = slider.scrollWidth - slider.parentElement.offsetWidth; // Total scrollable width
//   if (Math.abs(currentPosition) < maxScroll) {
//     currentPosition -= logoWidth * 2; // Scroll by 6 logos
//     slider.style.transform = `translateX(${currentPosition}px)`;
//   }
// });

// // Move slider to the left
// leftArrow.addEventListener('click', () => {
//   if (currentPosition < 0) {
//     currentPosition += logoWidth * 2; // Scroll back by 6 logos
//     slider.style.transform = `translateX(${currentPosition}px)`;
//   }
// });




































// const slider = document.getElementById('slider');
// const leftArrow = document.getElementById('left-arrow');
// const rightArrow = document.getElementById('right-arrow');


// const columnWidth = slider.querySelector('.column').offsetWidth + 20; 
// let currentPosition = 0;


// rightArrow.addEventListener('click', () => {
//   const maxScroll = -(slider.scrollWidth - slider.parentElement.offsetWidth);
//   if (currentPosition > maxScroll) {
//     currentPosition -= columnWidth;
//     slider.style.transform = `translateX(${currentPosition}px)`;
//   }
// });

// // Move slider to the left
// leftArrow.addEventListener('click', () => {
//   if (currentPosition < 0) {
//     currentPosition += columnWidth;
//     slider.style.transform = `translateX(${currentPosition}px)`;
//   }
// });
