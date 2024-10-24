document.addEventListener('DOMContentLoaded', function() {
    // Cargar el carrito desde el almacenamiento local
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Función para actualizar el carrito en la UI
    function updateCart() {
        const cartContainer = document.getElementById('sidecart');
        const cartList = cartContainer.querySelector('.cart_items');
        cartList.innerHTML = ''; // Limpiar los elementos actuales del carrito
        
        let subtotal = 0;
        let totalItems = 0;

        cart.forEach(item => {
            subtotal += item.price * item.quantity;
            totalItems += item.quantity;
            cartList.innerHTML += `
                <div class="cart_item">
                    <div class="remove_item" data-id="${item.id}">&times;</div>
                    <div class="item_img"><img src="${item.image}" alt=""></div>
                    <div class="item_details">
                        <p>${item.name}</p>
                        <strong>$${item.price}</strong>
                        <div class="qty">
                            <span class="decrease" data-id="${item.id}">-</span>
                            <strong>${item.quantity}</strong>
                            <span class="increase" data-id="${item.id}">+</span>
                        </div>
                    </div>
                </div>
            `;
        });

        // Actualizar la cuenta de productos y el subtotal
        document.querySelector('.cart_count span').innerText = totalItems;
        document.querySelector('.cart_price').innerText = `$${subtotal.toFixed(2)}`;
        cartContainer.querySelector('#subtotal_price').innerText = subtotal.toFixed(2);
    }

    // Manejo de eventos de clic
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('agregar-carrito')) {
            event.preventDefault();
            const id = event.target.getAttribute('data-id');
            const productElement = event.target.closest('.gallery-single');
            const name = productElement.querySelector('h4').innerText;
            const price = parseFloat(productElement.querySelector('.precio span').innerText);
            const image = productElement.querySelector('img').getAttribute('src');

            let item = cart.find(item => item.id === id);
            if (item) {
                alert('Lo siento, el producto ya está en el carrito');
                return;
            }

            cart.push({ id, name, price, quantity: 1, image });
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCart();
        }

        if (event.target.classList.contains('remove_item')) {
            const id = event.target.getAttribute('data-id');
            cart = cart.filter(item => item.id !== id);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCart();
        }

        if (event.target.classList.contains('increase') || event.target.classList.contains('decrease')) {
            const id = event.target.getAttribute('data-id');
            const item = cart.find(item => item.id === id);

            if (event.target.classList.contains('increase')) {
                item.quantity++;
            } else {
                item.quantity = Math.max(1, item.quantity - 1);
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCart();
        }
    });

    // Actualizar el carrito al cargar la página
    updateCart();
});
