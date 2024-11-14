<section class="products container">
    <h2 class="subtitle">Nuestros Productos</h2>

    <div class="products__grid">
        <div class="product__card">
            <p class="product__name">Producto 1</p>
            <h3 class="product__price">Gratis</h3>

            <div class="product__features">
                <p class="product__item">Característica 1</p>
                <p class="product__item">Característica 2</p>
                <p class="product__item">Característica 3</p>
            </div>

            <a href="#" class="product__cta">Ver más</a>
        </div>

        <div class="product__card product__card--highlight">
            <p class="product__name">Producto 2</p>
            <h3 class="product__price">$20/mes</h3>

            <div class="product__features">
                <p class="product__item">Característica 1</p>
                <p class="product__item">Característica 2</p>
                <p class="product__item">Característica 3</p>
            </div>

            <a href="#" class="product__cta">Ver más</a>
        </div>

        <div class="product__card">
            <p class="product__name">Producto 3</p>
            <h3 class="product__price">$30/mes</h3>

            <div class="product__features">
                <p class="product__item">Característica 1</p>
                <p class="product__item">Característica 2</p>
                <p class="product__item">Característica 3</p>
            </div>

            <a href="#" class="product__cta">Ver más</a>
        </div>
    </div>
</section>

<style>
    .products {
        text-align: center;
    }

    .products__grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .product__card {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        max-width: 300px;
        flex: 1 1 calc(33.333% - 40px);
        /* Tres columnas en pantallas grandes */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .product__card--highlight {
        border-color: #007bff;
        background-color: #e7f3ff;
    }

    .product__name {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product__price {
        font-size: 1.5rem;
        color: #333;
        margin: 10px 0;
    }

    .product__features {
        margin-bottom: 20px;
    }

    .product__item {
        font-size: 0.9rem;
        margin: 5px 0;
    }

    .product__cta {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .product__cta:hover {
        background-color: #0056b3;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .product__card {
            flex: 1 1 calc(50% - 20px);
            /* Dos columnas en pantallas medianas */
        }
    }

    @media (max-width: 480px) {
        .product__card {
            flex: 1 1 100%;
            /* Una columna en pantallas pequeñas */
        }
    }
</style>