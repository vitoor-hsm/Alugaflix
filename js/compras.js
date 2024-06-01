document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const cartItemsElement = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');

    document.querySelectorAll('.adicionar').forEach(button => {
        button.addEventListener('click', () => {
            const productElement = button.parentElement;
            const productId = productElement.getAttribute('data-id');
            const productName = productElement.getAttribute('data-name');
            const productPrice = parseFloat(productElement.getAttribute('data-price'));

            const cartItem = {
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1
            };

            const existingItem = cart.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push(cartItem);
            }

            renderCart();
        });
    });

    document.querySelectorAll('.remover').forEach(button => {
        button.addEventListener('click', () => {
            const productElement = button.parentElement;
            const productId = productElement.getAttribute('data-id');

            const existingItemIndex = cart.findIndex(item => item.id === productId);
            if (existingItemIndex !== -1) {
                const existingItem = cart[existingItemIndex];
                if (existingItem.quantity > 1) {
                    existingItem.quantity--;
                } else {
                    cart.splice(existingItemIndex, 1);
                }
            }

            renderCart();
        });
    });

    function renderCart() {
        cartItemsElement.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - R$ ${item.price.toFixed(2)} x ${item.quantity}`;
            cartItemsElement.appendChild(li);
            total += item.price * item.quantity;
        });

        cartTotalElement.textContent = total.toFixed(2);
    }
});
    document.getElementById('irpara').addEventListener('click', function() {
        const parametro = document.getElementById('cart-items').innerText;
        window.location.href = `carrinho.html?parametro=${(parametro)}`;
    });