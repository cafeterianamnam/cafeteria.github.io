document.addEventListener('DOMContentLoaded', () => {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    let total = 0;

    // Función para añadir un item al carrito
    function addToCart(name, price) {
        // Crear un nuevo elemento de lista para el item
        const li = document.createElement('li');
        li.textContent = `${name} - $${price}`;
        cartItems.appendChild(li);

        // Actualizar el total
        total += parseFloat(price);
        cartTotal.textContent = `Total: $${total.toFixed(2)}`;
    }

    // Añadir eventos a los botones de añadir al carrito
    const buttons = document.querySelectorAll('.add-to-cart');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const price = button.getAttribute('data-price');
            addToCart(name, price);
        });
    });
});
