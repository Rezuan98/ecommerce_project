let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Function to change slide
function changeSlide(direction) {
    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
    updateSlidePosition();
}

// Function to update the slide position
function updateSlidePosition() {
    const slider = document.querySelector('.slider');
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Automatic slide change every 3 seconds
setInterval(() => {
    changeSlide(1);
}, 3000);
