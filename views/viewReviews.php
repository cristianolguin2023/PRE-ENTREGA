<section class="reviews container">
    <h2 class="subtitle">Lo que dicen nuestros clientes</h2>

    <div class="reviews__grid">
        <div class="review__card">
            <p class="review__text">"El servicio es excelente. Muy fácil de usar y eficiente."</p>
            <p class="review__author">- Juan Pérez</p>
        </div>

        <div class="review__card">
            <p class="review__text">"Altamente recomendable, su soporte al cliente es excepcional."</p>
            <p class="review__author">- Ana Gómez</p>
        </div>

        <div class="review__card">
            <p class="review__text">"Desde que utilizo este producto, mi productividad ha aumentado."</p>
            <p class="review__author">- Carlos López</p>
        </div>

        <div class="review__card">
            <p class="review__text">"Increíble, superó todas mis expectativas."</p>
            <p class="review__author">- María Fernández</p>
        </div>
    </div>
</section>

<style>
    .reviews {
        text-align: center;
        padding: 40px 20px;
        background-color: #f4f4f4;
        border-radius: 8px;
    }

    .reviews__grid {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        /* Adaptación responsiva */
        justify-content: center;
    }

    .review__card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .review__text {
        font-size: 1rem;
        color: #333;
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .review__author {
        font-size: 0.9rem;
        color: #555;
        font-weight: bold;
        text-align: right;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .reviews {
            padding: 20px 10px;
        }
    }

    @media (max-width: 480px) {
        .review__card {
            padding: 15px;
        }
    }
</style>