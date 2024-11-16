




document.addEventListener("DOMContentLoaded", function () {

    window.openModal = function () {
        document.getElementById("sizeModal").style.display = "flex"; // Show the modal
    }

    // Close Modal Function
    window.closeModal = function () {
        document.getElementById("sizeModal").style.display = "none"; // Hide the modal
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        const modal = document.getElementById("sizeModal");
        if (event.target === modal) {
            closeModal();
        }
    }

    // Handle form submission
    document.getElementById("sizeForm").onsubmit = function(event) {
        event.preventDefault();
        const selectedSize = document.getElementById("size").value;
        if (selectedSize) {
            alert("Size selected: " + selectedSize);
            closeModal();
            // Additional actions can be added here, such as adding the size to the cart
        }
    };
});
