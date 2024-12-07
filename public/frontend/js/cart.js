function addToCart(productId, name, currentProductPrice, image, size,color,) {

    alert(currentProductPrice);
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            product_id: productId, // ID of the product
            name: name,           // Product name
            discount_price: currentProductPrice, // Product price
            image: image,         // Product image URL
            size: size, 
            color:color,
            quantity: 1,          // Default quantity
        }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
            

                // Update cart count in the navbar dynamically
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    const newCount = Object.values(data.cart).reduce((sum, item) => sum + item.quantity, 0);
                    cartCountElement.innerText = newCount;
                }
            } else {
                alert('Failed to add product to cart.');
            }
        })
        .catch(error => console.error('Error:', error));
}
function updateQuantity(productId, size,color, change) {
    // alert('ProductID: ' + productId + ', Size: ' + size);

    // Correct selector: ensure that the cart items have the correct data-id and data-size
    const cartItem = document.querySelector(`.cart-item[data-id="${productId}"][data-size="${size}"][data-color="${color}"]`);

    if (!cartItem) {
        console.error("Cart item not found!");
        return;
    }

    const quantityInput = cartItem.querySelector('.quantity-input');
    const itemTotal = cartItem.querySelector('.item-total p');
    const price = parseFloat(cartItem.dataset.price);

    let newQuantity = parseInt(quantityInput.value) + change;

    if (newQuantity <= 0) return; // Prevent quantity from going below 1

    // Update the cart on the backend
    fetch('/cart/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            product_id: productId,   // Send productId
            size: size,              // Send size
            color:color,
            quantity: newQuantity,   // Updated quantity
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update the quantity in the input field
            quantityInput.value = newQuantity;

            // Update item total price
            itemTotal.textContent = `$${(price * newQuantity).toFixed(2)}`;

            // Update the cart total dynamically
            updateCartTotal(data.cart);

            // Update cart count in the navbar dynamically
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                const newCount = Object.values(data.cart).reduce((sum, item) => sum + item.quantity, 0);
                cartCountElement.innerText = newCount;
            }
        }
    })
    .catch(error => console.error('Error:', error));
}



function removeItem(productId, size,color) {
    // Find the cart item element to remove
    const cartItem = document.querySelector(`.cart-item[data-id="${productId}"][data-size="${size}"][data-color="${color}"]`);

    if (!cartItem) {
        console.error("Cart item not found!");
        return;
    }

    // Send request to remove the item from the cart
    fetch('/cart/remove', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            product_id: productId,  // Send productId
            size: size,             // Send size
            color:color,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Remove the cart item from the DOM
            cartItem.remove();

            // Update the cart total dynamically
            updateCartTotal(data.cart);

            // Update cart count in the navbar dynamically
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                const newCount = Object.values(data.cart).reduce((sum, item) => sum + item.quantity, 0);
                cartCountElement.innerText = newCount;
            }
        } else {
            console.error('Failed to remove item from the cart.');
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