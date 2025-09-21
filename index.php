<?php 
$page_title = "CINCO SAS - Inicio";

include 'header.php'; 
?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <section class="cinco-hero">
            <div class="container-slider py-5">
                <!-- <h1>Soluciones Integrales para su Empresa</h1>
                <p>Innovación, tecnología y compromiso social para transformar su negocio</p>
                <a href="contacto.php" class="cinco-cta-button">Contáctenos</a>
            </div> -->

                <!-- <section class="swiper-container mb-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(img/slider/PHOTO-2024-10-05-10-02-10.jpg);">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Experiencia</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Soluciones integrales con el respaldo de un equipo sólido y experimentado.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/slider/Tecnicos_moto_feed.jpeg);">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">¿Tienes moto?</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Súmate a nuestra familia y crece con nosotros en telecomunicaciones.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/slider/PHOTO-2024-09-04-08-43-48.jpg);">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Personal Capacitado</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Respaldado por años de experiencia en telecomunicaciones.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/slider/PHOTO-2024-12-24-08-37-571.jpg);">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Estabilidad</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Celebramos nuestros logros mientras seguimos construyendo un futuro más conectado.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/slider/PHOTO-2024-09-04-08-43-46.jpg);">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Equipo</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Trabajando en equipo para brindar soluciones que marcan la diferencia. 🤝📡</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </section> -->

                <swiper-container class="mySwiper" pagination="true" navigation="true" loop="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
                    <swiper-slide>
                    <img src=" https://swiperjs.com/demos/images/nature-1.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                    </swiper-slide>
                </swiper-container>


        </section>

        <section class="btn_info-container mt-4 py-3">
            <div class="btn_info">
                <div class="buttons_info">  
                    <button class="neumorphic">
                        <p>9,458</p>
                        <span>Empleos Generados</span>
                    </button>
                    <button class="neumorphic">
                        <p>1,689</p>
                        <span>Colaboradores</span>
                    </button>
                    <button class="neumorphic">
                        <p>1,123</p>
                        <span>Familias</span>
                    </button>
                    <button class="neumorphic">
                        <p>245</p>
                        <span>Transportadores</span>
                    </button>
                    <button class="neumorphic">
                        <p>7,653</p>
                        <span>Empleos Indirectos</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="features my-5" id="features">
            <div class="container">
                <h2 class="text-center">Nuestros Servicios</h2>
                <p class="text-center">Descubre cómo podemos ayudarte a destacar.</p>
                <div class="features-grid">
                    <!-- Tarjeta 1 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Infraestructura de Telecomunicaciones</h3>
                        <p>Soluciones completas para sus necesidades de conectividad.</p>
                    </div>
                    
                    <!-- Tarjeta 2 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Responsabilidad Social</h3>
                        <p>Compromiso con el desarrollo sostenible de nuestras comunidades.</p>
                    </div>
                    
                    <!-- Tarjeta 3 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Beneficios para Trabajadores</h3>
                        <p>Programas diseñados para el bienestar de su equipo.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- <section class="cinco-about">
            <div class="container">
                <div class="about-content">
                    <h2>Quiénes Somos</h2>
                    <p>CINCO SAS es una empresa líder en soluciones integrales, combinando innovación tecnológica con un firme compromiso social. Nuestra trayectoria nos avala como socios estratégicos para el crecimiento de su negocio.</p>
                    <a href="nosotros.php" class="cinco-learn-more">Conózcanos más</a>
                </div>
            </div>
        </section> -->
        <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

        <script>
var sliderSelector = '.swiper-container',
options = {
    init: false,
    loop: true,
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 60,
        modifier: 1,
        slideShadows: true,
    },
    grabCursor: true,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        767: {
            slidesPerView: 2,
            spaceBetween: -80
        }        
    }
};
var mySwiper = new Swiper(sliderSelector, options);
mySwiper.init();

        </script>

<?php include 'footer.php'; ?>
