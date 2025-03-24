<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/niveles.css">
    <title>Asociación Educativa "De Jesús"</title>
</head>

<body>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <style>
        #elegirnos .card {
            vertical-align: middle;
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            transition-duration: 0.3s;
        }

        #elegirnos .card:hover {
            transform: translateY(-6px);
        }

        #elegirnos .card-body {
            height: 120px;
        }

        #elegirnos {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #elegirnos h6 {
            font-weight: bold;
            text-align: justify;
            margin-bottom: 0px;
        }

        #elegirnos .card {
            vertical-align: middle;
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            transition-duration: 0.3s;
        }

        #elegirnos .card:hover {
            transform: translateY(-6px);
        }

        #elegirnos .card-body {
            height: 120px;
        }

        #elegirnos {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #elegirnos h6 {
            font-weight: bold;
            text-align: justify;
            margin-bottom: 0px;
        }

        #redes {
            position: fixed;
            width: 45px;
            min-width: 45px;
            max-width: 45px;
            top: 50%;
            right: 0;
            transform: translateY(-75%);
            z-index: 99;
        }

        #redes a {
            font-size: 21px;
            color: white;
        }

        #niveles {
            background-color: var(--color1);
        }



        #noticias .card {
            border-color: #fff;
            background: linear-gradient(rgb(255, 255, 255), rgb(243, 243, 243));
            box-shadow: 0 0 5px rgb(161, 161, 161);
            transition: transform 0.3s;
        }

        #noticias .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 5px rgb(134, 134, 134);
        }

        #noticias img.cover {
            /*  height: 210px; */
            height: 350px;
            object-fit: cover;
        }

        #noticias h5 {
            color: var(--color3);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.93em;
        }

        #noticias .detalle {
            font-size: 0.85em;
            text-align: justify;
        }

        #noticias .card-footer {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: transparent;
            font-size: 0.8em;
            padding-top: 11px;
            padding-bottom: 11px;
        }

        #noticias .card-footer i {
            font-size: 1.2em;
        }
    </style>

    <?php include_once './includes/header.php'; ?>

    <section id="redes">
        <div class="bg-success text-white py-2 d-flex justify-content-center" style="border-top-left-radius: 9px;">
            <a href="https://wa.me/+51983330558" target="_blank"  title="Whatsapp"><i
                    class="fab fa-whatsapp"></i></a>
        </div>
        <div class="bg-info text-white py-2 d-flex justify-content-center">
            <a href="https://www.facebook.com/profile.php?id=100040278324313" target="_blank" title="Facebook"><i
                    class="fab fa-facebook-square"></i></a>
        </div>
        <div class="text-white py-2 d-flex justify-content-center" style="background-color: rgb(248, 63, 125);">
            <a href="https://www.instagram.com/asociacioneducativadejesus?igsh=MWdjMjBiMDVuMDcxeA%3D%3D&utm_source=qr" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="text-white py-2 d-flex justify-content-center" style="background-color: rgb(38, 33, 69);">
            <a href="https://www.tiktok.com/@dejesus9252?_t=ZM-8uqc0rhv46v&_r=1" target="_blank" title="TikTok"><img src="./img/icons/tiktok.png" height="28"></a>
        </div>
        <!-- <div class="bg-danger text-white py-2 d-flex justify-content-center">
            <a href="https://www.youtube.com/channel/UCnkJWL5kwbS_yZvTLhtEkGg/featured" target="_blank"
                title="Youtube"><i class="fab fa-youtube"></i></a>
        </div> -->
        <div class="text-white py-2 d-flex justify-content-center"
            style="border-bottom-left-radius: 9px; background-color: rgb(213, 182, 216);">
            <a href="https://asociaciondejesus.cubicol.pe/principal/login" target="_blank" title="Cubicol"><img src="./img/icons/cubo.png" height="28"></a>
        </div>
    </section>

    <section class="container-fluid content-banner px-0">
        <div id="carouselBanner" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class=""></button>
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/banner/banner1.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
                <div class="carousel-item ">
                    <img src="./img/banner/banner2.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-hotel"></i></div>
            <div class="sep_title">Bienvenidos</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 py-2">
                <!--<p class="text-justify line">
                    <b>Estimados alumnos y padres de familia.</b>
                </p>-->

                <p class="text-justify line">
                    Es un honor recibirlos en este nuevo año académico 2025. Cada uno de ustedes es parte fundamental de nuestra institución, y juntos construimos un ambiente de aprendizaje, respeto y crecimiento. Este es un espacio donde cada día tiene el potencial de ser una nueva oportunidad para aprender.
                    <br>A los nuevos estudiantes, les extendemos una cálida bienvenida. Este es el lugar donde podrán desafiarse a sí mismos, desarrollar sus talentos y forjar un futuro brillante. A nuestros estudiantes más experimentados, les agradecemos su compromiso y dedicación. Al personal docente y administrativo, gracias por su esfuerzo continuo para ofrecer una educación de calidad. Cada uno de ustedes juega un papel crucial en el éxito de nuestra comunidad educativa

                </p>
            </div>
            <div class="col-lg-6 text-end my-auto">
                <div style="display:flex;justify-content:center;align-items:center;">
                    <img src="./img/web/bienvenido1.png" class="rounded shadow" width="80%" alt="portada_bienvenida">
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="container-fluid py-3" id="niveles">
        <div class="container py-4">
            <div class="separador" style="border-color: white;">
                <div class="sep_box text-white" style="border-color: white;"><i class="fas fa-graduation-cap"></i></div>
                <div class="sep_title text-white">Niveles</div>
            </div>
            <div class="row mt-4 pt-4 d-flex">
                <div class="col-lg-4 my-3">
                    <div class="card-niveles">
                        <div class="thumb">
                            <a href="inicial.php">
                                <img src="./img/web/boton_inicial.jpg" width="100%">
                                <span>INICIAL</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card-niveles">
                        <div class="thumb">
                            <a href="primaria.php">
                                <img src="./img/web/boton_primaria.jpg" width="100%">
                                <span>PRIMARIA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card-niveles">
                        <div class="thumb">
                            <a href="secundaria.php">
                                <img src="./img/web/boton_secundaria.jpg" width="100%">
                                <span>SECUNDARIA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <br><br><br>
    <section class="container " id="elegirnos">
        <div class="row py-5">
            <h2 class="text-center" style="margin-bottom: 4rem; color: var(--color2);">¿Por Qué Elegirnos?</h2>
            <div class="col-md">
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color4)">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/1_centro educativo.gif" height="80">
                        </div>
                        <!-- <div class="col-md-10" style="background-color: var(--color4); border-radius: 10;"> -->
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">

                                <div>
                                    <li>Aulas cómodas con equipos multimedia</li>
                                    <li>Pizarras interactivas, laboratorios con equipos multimedia</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color3)">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/2_valores cristianos.gif" height="80">
                        </div>
                        <div class="col-md-10" s="">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                    <li>Psicólogos escolares para apoyo emocional.</li>
                                    <li>Programas contra el bullying y educación en convivencia.</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color2)">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/8_Curriculo nacional.gif" height="80">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                    <li>Educación personalizada según el ritmo de aprendizaje.</li>
                                    <li> Clases interactivas con proyectos y dinámicas. </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color1)">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/4_proyectos innovadores.gif" height="80">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <p class="card-text "></p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md">
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color1)">
                    <div class="row g-0">
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                    <p class="card-text "> • Metodologías de enseñanza innovadoras.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/5_educación superior exitosa.gif" height="80">
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color2)">
                    <div class="row g-0">
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                    <li>Asesoría académica y orientación vocacional.</li>
                                    <li>Becas y apoyos financieros.</li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/6_menciones honrosas.gif" height="80">
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color3)">
                    <div class="row g-0">
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                    <li>Uso de plataformas digitales para el aprendizaje</li>
                                    <li>Enseñanza de idiomas extranjeros (inglés)</li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="./img/icons/3_metodologia activa.gif" height="80">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br><br><br>

    <section class="container-fluid" id="valores">
        <?php include_once './includes/valores.php'; ?>
    </section>

    <br><br><br>


    <section class="container" id="noticias">
        <div class="separador">
            <div class="sep_box"><i class="far fa-newspaper"></i></div>
            <div class="sep_title">Noticias</div>
        </div>

        <div class="row mt-4 pt-3">
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia1.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=1">
                            <h5>Inicio de clases 2025</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">25-02-2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia2.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=2">
                            <h5>Dile No a la Piratería</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">21-02-2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia3.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=3">
                            <h5>Matrículas Abiertas 2025</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">17-12-2025</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <br><br><br>
    <section class="container" id="ubicanos">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-map-marked-alt"></i></div>
            <div class="sep_title">Ubícanos</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg">
                <div class="card border-0 shadow">
                    <div class="card-body p-3 pb-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.4219959622037!2d-76.9852525!3d-12.0144424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5bfbb41a1cd%3A0x23eef1a984b4fd8d!2sAv.%20Mangomarca%20499%2C%20Lima%2015427!5e0!3m2!1ses!2spe!4v1740496971405!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="shadow-sm"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <?php include_once './includes/footer.php'; ?>

</body>

</html>