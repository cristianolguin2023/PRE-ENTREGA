<section class="about container">
    <h2 class="subtitle">Sobre Nosotros</h2>

    <div class="about__content">
        <p class="about__intro">Somos <strong>InnoTech</strong>, tu aliado tecnológico. Nacimos con una misión clara:
            ayudarte a crecer. Creamos soluciones de software y hardware innovadoras para potenciar tu negocio.</p>

        <h3 class="about__commitment-title">Nuestro Compromiso</h3>
        <ul class="about__commitment-list">
            <li>Ayudarte a alcanzar tus objetivos</li>
            <li>Proporcionarte tecnología de vanguardia</li>
            <li>Ofrecerte servicio personalizado</li>
        </ul>

        <div class="about__motto">
            <blockquote>"Si te va bien, nos va bien."</blockquote>
        </div>

        <p class="about__cta-text">¡Únete a nuestra comunidad! Descubre cómo podemos ayudarte a prosperar.</p>
        <a href="#" class="about__cta-btn">Conocer más</a>
    </div>
</section>

<style>
    .about {
        text-align: center;
        padding: 40px 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
    }

    .about__content {
        max-width: 800px;
        margin: 0 auto;
    }

    .about__intro {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .about__commitment-title {
        font-size: 1.5rem;
        color: #007bff;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .about__commitment-list {
        list-style: none;
        padding: 0;
        font-size: 1rem;
        color: #333;
        margin-bottom: 30px;
    }

    .about__commitment-list li {
        margin: 10px 0;
        padding-left: 15px;
        position: relative;
    }

    .about__commitment-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #007bff;
        font-size: 1.2rem;
    }

    .about__motto {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin: 30px 0;
        background-color: #e7f3ff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .about__motto blockquote {
        margin: 0;
        font-style: italic;
        color: #007bff;
    }

    .about__cta-text {
        font-size: 1.1rem;
        margin: 20px 0;
        color: #555;
    }

    .about__cta-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .about__cta-btn:hover {
        background-color: #0056b3;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .about__content {
            padding: 10px;
        }
    }
</style>