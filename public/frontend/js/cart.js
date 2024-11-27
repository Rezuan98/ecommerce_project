function addToCart(productId, name, price, image) {
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            product_id: productId,
            name: name,
            discount_price: price, // Ensure this matches the backend expectation
            image: image,
            quantity: 1, // Default quantity
        }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success);
                // Optionally update cart count in navbar
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.innerText = data.cart.length;
                }
            } else {
                alert('Failed to add product to cart.');
            }
        })
        .catch(error => console.error('Error:', error));
}



function updateQuantity(productId, change) {
    const cartItem = document.querySelector(`.cart-item[data-id="${productId}"]`);
    const quantityInput = cartItem.querySelector('.quantity-input');
    const itemTotal = cartItem.querySelector('.item-total p');
    const price = parseFloat(cartItem.dataset.price);

    let newQuantity = parseInt(quantityInput.value) + change;

    if (newQuantity <= 0) return; // Prevent quantity less than 1

    fetch('/cart/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({ product_id: productId, quantity: newQuantity }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update quantity in the input field
                quantityInput.value = newQuantity;

                // Update item total price
                itemTotal.textContent = `$${(price * newQuantity).toFixed(2)}`;

                // Update the cart total dynamically
                updateCartTotal(data.cart);
            }
        })
        .catch(error => console.error('Error:', error));
}

function removeItem(productId) {
    fetch('/cart/remove', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({ product_id: productId }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the cart item from the DOM
                const cartItem = document.querySelector(`.cart-item[data-id="${productId}"]`);
                cartItem.remove();

                // Update the cart total dynamically
                updateCartTotal(data.cart);
            }
        })
        .catch(error => console.error('Error:', error));
}

function updateCartTotal(cart) {
    let total = 0;

    for (const productId in cart) {
        const item = cart[productId];
        total += item.price * item.quantity;
    }

    // Update the cart total in the DOM
    const cartTotal = document.getElementById('total');
    if (cartTotal) {
        cartTotal.textContent = `$${total.toFixed(2)}`;
    }
}


