// Placeholder functions for applying filters and sorting
function applyFilters() {
    const priceMin = document.getElementById("price_min").value;
    const priceMax = document.getElementById("price_max").value;
    const brand = document.getElementById("brand").value;
    const color = document.getElementById("color").value;

    // Logic to filter products based on selected filters (you would use an API or static data here)
    console.log("Applying filters:", { priceMin, priceMax, brand, color });
}

function applySorting() {
    const sortValue = document.getElementById("sort").value;

    // Logic to sort products based on selected sorting option (you would use an API or static data here)
    console.log("Applying sorting:", sortValue);
}








// js code start for message modal
// Open the modal
function openChat() {
    const modal = document.getElementById("messageModal");
    if (modal) {
        modal.style.display = "flex";
    }
}

// Close the modal
function closeMessageModal() {
    const modal = document.getElementById("messageModal");
    if (modal) {
        modal.style.display = "none";
    }
}

// Submit form
document.getElementById("messageForm").addEventListener("submit", function (e) {
    // Prevent page refresh

    // Here you can handle form submission logic (e.g., send the message via AJAX)
   

    // Close the modal after submission
    closeModal();
});

// end the message modal