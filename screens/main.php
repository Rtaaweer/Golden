<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Languages</title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        @import '~@fortawesome/fontawesome-free/css/all.min.css';
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        .card, .values-card {
            background: rgba(56, 55, 55, 0.8);
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card {
            flex: 1 1 calc(50% - 2rem);
            max-width: calc(50% - 2rem);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card h3, .values-card h3 {
            color: #E1BE08;
            font-size: 2rem;
        }
        .card p, .values-card p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .values-card {
            margin-top: 2rem;
        }
        .hero h2, .info h2 {
            font-size: 2.5rem;
        }
        .map {
            margin-top: 2rem;
        }
        #map {
            height: 400px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .carousel {
    position: relative;
    width: 100vw; /* Asegura que el carrusel use el ancho completo de la ventana */
    overflow: hidden;
}

.carousel-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.carousel-images {
    display: flex;
    width: 100%;
    transition: transform 0.5s ease;
}

.carousel-images img {
    width: 100vw; /* Cada imagen ocupa el 100% del ancho de la ventana */
    height: auto;
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 1rem;
    cursor: pointer;
    z-index: 1000;
    font-size: 1.5rem;
}

#prevBtn {
    left: 10px;
}

#nextBtn {
    right: 10px;
}

.discounts {
    background: #f3f4f6;
    padding: 4rem 0;
    border-top: 5px solid #E1BE08;
}

.discounts h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: #333;
    font-weight: bold;
}

.discounts-content {
    display: flex;
    justify-content: space-around;
    gap: 2rem;
    flex-wrap: wrap;
}

.discount-card {
    background: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    flex: 1 1 calc(45% - 2rem);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}

.discount-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.discount-icon {
    background: #E1BE08;
    border-radius: 50%;
    padding: 1rem;
    display: inline-block;
    margin-bottom: 1rem;
}

.discount-icon img {
    width: 50px;
    height: 50px;
}

.discount-card h3 {
    color: #E1BE08;
    font-size: 1.8rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

.discount-card p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
    margin: 0.5rem 0;
}

.discount-card strong {
    color: #E1BE08;
    font-weight: bold;
}

.cta-button {
    background-color: #E1BE08;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    margin-top: 1rem;
}

.cta-button:hover {
    background-color: #d1a50a;
}

.discount-icon {
    background: #E1BE08;
    border-radius: 50%;
    padding: 1rem;
    display: inline-block;
    margin-bottom: 1rem;
    color: #fff;
    font-size: 2rem; /* Tamaño del ícono */
    text-align: center;
}

.discount-icon i {
    line-height: 1; /* Ajusta el espaciado del ícono */
}
footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    background-color: #333;
    color: #fff;
    text-align: center;
}

footer .social-icon {
    color: #E1BE08; /* Color del icono */
    font-size: 1.5rem; /* Tamaño del icono */
    text-decoration: none;
    margin-left: 1rem;
    transition: color 0.3s ease;
}

footer .social-icon:hover {
    color: #fff; /* Color al pasar el ratón */
}
.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header-icon {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 1rem;
}

.header-icon i {
    font-size: 24px;
    color: black; /* Cambia el color del icono si es necesario */
}

.icon-text {
    font-size: 12px;
    color: black; /* Cambia el color del texto si es necesario */
}
.map-button-container {
    text-align: center;
    margin-top: 1rem;
}

.map-button {
    display: inline-flex;
    align-items: center;
    background-color: #E1BE08; /* Color de fondo del botón */
    color: #fff; /* Color del texto */
    padding: 0.75rem 1.5rem;
    border-radius: 4px;
    text-decoration: none;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.map-button i {
    margin-right: 0.5rem;
    font-size: 1.2rem;
}

.map-button:hover {
    background-color: #ccaa06; /* Color de fondo al pasar el ratón */
}
    </style>
</head>
<body>  
<header>
    <div class="container">
        <div class="header-content">
            <a href="https://www.instagram.com/goldlanguage212/" target="_blank" class="header-icon">
                <i class="fab fa-instagram"></i>
                <span class="icon-text">Síguenos</span>
            </a>
            <h1>Golden Languages</h1>
            <img src="../images/logo.png" alt="Logo" class="logo">
        </div>
    </div>
</header>




    <main>
        <section class="hero">
            <div class="container">
                <h2>¡Bienvenido a Golden Languages!</h2>
                <p>Te ofrecemos el mejor aprendizaje para tu desarrollo academico y manejo de idiomas.</p>
            </div>
        </section>

        <section class="discounts">
    <div class="container">
        <h2>¡Ofertas Especiales en Cursos de Idiomas!</h2>
        <div class="discounts-content">
            <div class="discount-card">
                <div class="discount-icon">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <h3>¡Aprende en Solo 1 Año!</h3>
                <p>Liquida en una sola exhibición y llévate un <strong>20% de descuento</strong> en nuestros cursos intensivos.</p>
                <p>¡No te pierdas esta oportunidad para dominar un nuevo idioma!</p>
                <button class="cta-button">¡Aprovecha Ahora!</button>
            </div>
            <div class="discount-card">
                <div class="discount-icon">
                    <i class="fas fa-money-check-alt"></i>
                </div>
                <h3>Pagos Flexibles y Horarios Adaptables</h3>
                <p>Disfruta de <strong>pagos mensuales</strong> y <strong>horarios flexibles</strong> para adaptarnos a tu ritmo de vida.</p>
                <p>Nuestros maestros están altamente capacitados para ofrecerte una experiencia educativa de primera.</p>
                <button class="cta-button">Consulta Disponibilidad</button>
            </div>
        </div>
    </div>
</section>



        <section class="carousel">
    <div class="carousel-container">
        <div class="carousel-images">
            <img src="../images/carr1.jpg" alt="Image 1">
            <img src="../images/carr2.jpg" alt="Image 2">
            <img src="../images/carr4.jpg" alt="Image 3">
           
        </div>
        <button id="prevBtn" class="carousel-btn">‹</button>
        <button id="nextBtn" class="carousel-btn">›</button>
    </div>
</section>

        <section class="info">
            <div class="container">
                <h2>Sobre nosotros</h2>
                <div class="cards-container">
                    <div class="card">
                        <h3>MISIÓN</h3>
                        <p>Formar estudiantes con habilidades lingüísticas y culturales para una comunicación eficaz y participación global. Ofrecemos educación de calidad con métodos innovadores y un entorno inclusivo y motivador.</p>
                    </div>
                    <div class="card">
                        <h3>VISIÓN</h3>
                        <p>Ser líderes en educación de idiomas, transformando vidas y creando oportunidades a través de enseñanza innovadora. Buscamos que cada estudiante alcance su máximo potencial y se convierta en ciudadano global comprometido.</p>
                    </div>
                </div>
                <div class="values-card">
                    <h3>VALORES</h3>
                        <p>- Excelencia Académica: Promovemos la continua mejora en la enseñanza y aprendizaje de idiomas.</p>
                        <p>- Innovación: Fomentamos un enfoque proactivo y creativo, utilizando métodos y tecnologías avanzadas.</p>
                        <p>- Inclusividad: Aseguramos un ambiente de aprendizaje respetuoso para todos los estudiantes.</p>
                        <p>- Diversidad Cultural: Valoramos y celebramos la diversidad cultural, promoviendo la comprensión y el respeto por las diferentes culturas.</p>
                        <p>- Responsabilidad: Fomentamos la ética y el compromiso en el aprendizaje y la enseñanza.</p>
                        <p>- Trabajo en Equipo: Promovemos la colaboración y el apoyo mutuo entre estudiantes y profesores para alcanzar metas comunes.</p>
                </div>
            </div>
        </section>

        <section class="map">
    <div class="container">
        <h2>Encuéntranos</h2>
        <div id="map"></div>
        <div class="map-button-container">
            <a href="https://www.google.com.mx/maps/place/Campestre+San+Juan,+76803+San+Juan+del+R%C3%ADo,+Qro./@20.4126455,-100.0132841,18.13z/data=!4m6!3m5!1s0x85d30cb77f2eef5d:0xc227afd201e9ecd2!8m2!3d20.4127277!4d-100.0121947!16s%2Fg%2F1tklqxc2?entry=ttu" target="_blank" class="map-button">
                <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
            </a>
        </div>
    </div>
</section>


        

    </main>

    <footer>
    <div class="container">
        <p>&copy; 2024 Página Informativa. Todos los derechos reservados.</p>
        <a href="https://www.instagram.com/goldlanguage212/x    " target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([20.412717, -100.012051], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([20.412717, -100.012051]).addTo(map)
                .bindPopup('Golden Languages')
                .openPopup();
        });

        document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelector('.carousel-images');
    const totalImages = images.children.length;
    let currentIndex = 0;

    document.getElementById('nextBtn').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

    function updateCarousel() {
        images.style.transform = `translateX(-${currentIndex * 100}vw)`;
    }
});

    </script>
</body>
</html>
