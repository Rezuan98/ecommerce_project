// Get elements
const showModalBtn = document.getElementById('show-modal');
const modal = document.getElementById('payment-modal');
const closeModalBtn = document.getElementById('close-modal');

// Show modal when the button is clicked
showModalBtn.addEventListener('click', () => {
    modal.style.display = 'flex'; // Show the modal (flex centers it)
});

// Close modal when the close button is clicked
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none'; // Hide the modal
});

// Close modal when clicking outside the modal content
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none'; // Hide the modal
    }
});

  