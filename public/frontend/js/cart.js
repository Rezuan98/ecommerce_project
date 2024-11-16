document.addEventListener("DOMContentLoaded", function () {
    const cartItems = document.querySelectorAll(".cart-item");
    const totalElement = document.getElementById("total");

    function calculateTotal() {
        let total = 0;
        cartItems.forEach(item => {
            const price = parseFloat(item.dataset.price);
            const quantity = parseInt(item.querySelector(".quantity-input").value);
            total += price * quantity;
        });
        totalElement.textContent = `$${total.toFixed(2)}`;
    }

    cartItems.forEach(item => {
        const decreaseButton = item.querySelector(".decrease");
        const increaseButton = item.querySelector(".increase");
        const quantityInput = item.querySelector(".quantity-input");
        const itemTotalElement = item.querySelector(".item-total p");

        decreaseButton.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                const price = parseFloat(item.dataset.price);
                itemTotalElement.textContent = `$${(price * quantity).toFixed(2)}`;
                calculateTotal();
            }
        });

        increaseButton.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
            const price = parseFloat(item.dataset.price);
            itemTotalElement.textContent = `$${(price * quantity).toFixed(2)}`;
            calculateTotal();
        });
    });

    // Initial calculation
    calculateTotal();
});
