let carrito = [];

function agregarAlCarrito(id) {
    const producto = productos.find((producto) => producto.id === id);
    const estaEnCarrito = carrito.find((item) => item.id === id);

    if (estaEnCarrito) {
        alert('Este producto ya ha sido añadido al carrito.');
    } else {
        carrito.push(producto);
        mostrarCarrito();
    }
}

function mostrarCarrito() {
    const carritoItems = document.getElementById('carritoItems');
    carritoItems.innerHTML = '';
    
    carrito.forEach((producto) => {
        carritoItems.innerHTML += `
            <div class="row mt-3">
                <div class="col">
                    ${producto.id}
                </div>
                <div class="col">
                    <img src="${producto.imagen}" alt="${producto.descripcion}" style="width: 100px; height: 100px;" />
                </div>
                <div class="col">
                    ${producto.nombre}
                </div>
                <div class="col">
                    ${producto.descripcion}
                </div>
                <div class="col">
                    ${producto.precio}
                </div>
                <div class="col">
                    <button class="btn btn-danger" onclick="removerDelCarrito(${producto.id})">Remover</button>
                </div>
            </div>`;
    });
}

function removerDelCarrito(id) {
    carrito = carrito.filter((producto) => producto.id !== id);
    mostrarCarrito();
}