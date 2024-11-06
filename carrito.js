document.addEventListener('DOMContentLoaded', () => {
    const cartItems = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');
    let total = 0;

    // Handle click events on "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));
            
            // Update the cart
            addToCart(name, price);
        });
    });

    // Function to add an item to the cart
    function addToCart(name, price) {
        // Create a new list item
        const item = document.createElement('li');
        item.textContent = `${name} - $${price}`;
        cartItems.appendChild(item);

        // Update the total
        total += price;
        totalElement.textContent = `$${total.toFixed(2)}`;
    }
});
