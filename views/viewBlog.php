<section class="blog-coming-soon container">
    <h2 class="subtitle">Blog Próximamente</h2>

    <div class="blog-coming-soon__content">
        <p class="blog-coming-soon__text">¡Estamos preparando algo especial para ti! Nuestro blog estará lleno de
            contenido útil, consejos tecnológicos, y las últimas tendencias en innovación.</p>

        <div class="blog-coming-soon__countdown">
            <p class="countdown__message">Faltan:</p>
            <div class="countdown__timer">
                <div class="countdown__item">
                    <span id="days">00</span>
                    <p>Días</p>
                </div>
                <div class="countdown__item">
                    <span id="hours">00</span>
                    <p>Horas</p>
                </div>
                <div class="countdown__item">
                    <span id="minutes">00</span>
                    <p>Minutos</p>
                </div>
                <div class="countdown__item">
                    <span id="seconds">00</span>
                    <p>Segundos</p>
                </div>
            </div>
        </div>

        <p class="blog-coming-soon__cta-text">Suscríbete para ser el primero en enterarte.</p>
        <a href="#" class="blog-coming-soon__cta-btn">Suscribirse</a>
    </div>
</section>

<style>
    .blog-coming-soon {
        text-align: center;
        padding: 50px 20px;
        background-color: #f4f4f4;
        border-radius: 8px;
    }

    .blog-coming-soon__content {
        max-width: 800px;
        margin: 0 auto;
    }

    .blog-coming-soon__text {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .blog-coming-soon__countdown {
        margin: 30px 0;
        background-color: #e7f3ff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .countdown__message {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .countdown__timer {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .countdown__item {
        text-align: center;
    }

    .countdown__item span {
        font-size: 2rem;
        color: #007bff;
        font-weight: bold;
    }

    .countdown__item p {
        font-size: 1rem;
        color: #555;
    }

    .blog-coming-soon__cta-text {
        font-size: 1.1rem;
        margin: 20px 0;
        color: #555;
    }

    .blog-coming-soon__cta-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .blog-coming-soon__cta-btn:hover {
        background-color: #0056b3;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .countdown__timer {
            flex-wrap: wrap;
        }

        .countdown__item {
            flex: 1 1 40%;
            margin-bottom: 10px;
        }
    }
</style>