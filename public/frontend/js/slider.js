const slider = document.getElementById('slider');
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');

// Settings
const logoWidth = slider.querySelector('.logo').offsetWidth + 20; // Logo width + margin
let currentPosition = 0;

// Move slider to the right
rightArrow.addEventListener('click', () => {
  const maxScroll = slider.scrollWidth - slider.parentElement.offsetWidth; // Total scrollable width
  if (Math.abs(currentPosition) < maxScroll) {
    currentPosition -= logoWidth * 2; // Scroll by 6 logos
    slider.style.transform = `translateX(${currentPosition}px)`;
  }
});

// Move slider to the left
leftArrow.addEventListener('click', () => {
  if (currentPosition < 0) {
    currentPosition += logoWidth * 2; // Scroll back by 6 logos
    slider.style.transform = `translateX(${currentPosition}px)`;
  }
});




































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
