<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/escudo.ico" type="image/x-icon">
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
            height: 210px;
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
            <a href="https://api.whatsapp.com/send?phone=51923496395" title="Whatsapp"><i
                    class="fab fa-whatsapp"></i></a>
        </div>
        <div class="bg-info text-white py-2 d-flex justify-content-center">
            <a href="https://www.facebook.com/pitagorasjl" target="_blank" title="Facebook"><i
                    class="fab fa-facebook-square"></i></a>
        </div>
        <!-- <div class="text-white py-2 d-flex justify-content-center" style="background-color: rgb(248, 63, 125);">
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div> -->
        <div class="bg-danger text-white py-2 d-flex justify-content-center">
            <a href="https://www.youtube.com/channel/UCnkJWL5kwbS_yZvTLhtEkGg/featured" target="_blank"
                title="Youtube"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="text-white py-2 d-flex justify-content-center"
            style="border-bottom-left-radius: 9px; background-color: rgb(213, 182, 216);">
            <a href="#" target="_blank" title="Cubicol"><img src="./img/icons/cubo.png" height="28"></a>
        </div>
    </section>

    <section class="container-fluid p-0">
        <a href="admision.php">
            <img src="./img/banner/banner_prueba3.jpg" class="w-100">
        </a>
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
                                <img src="./img/web/boton_inicial.png" width="100%">
                                <span>INICIAL</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card-niveles">
                        <div class="thumb">
                            <a href="primaria.php">
                                <img src="./img/web/boton_primaria.png" width="100%">
                                <span>PRIMARIA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card-niveles">
                        <div class="thumb">
                            <a href="secundaria.php">
                                <img src="./img/web/boton_secundaria.png" width="100%">
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/1_centro educativo.gif" height="80">
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/2_valores cristianos.gif" height="80">
                        </div>
                        <div class="col-md-10" s="">
                            <div class="card-body"  style="display:flex;justify-content:center;align-items:center;" > 
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/8_Curriculo nacional.gif" height="80">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;" >
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/4_proyectos innovadores.gif" height="80">
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/5_educación superior exitosa.gif" height="80">
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color2)">
                    <div class="row g-0">
                        <div class="col-md-10">
                            <div class="card-body" style="display:flex;justify-content:center;align-items:center;">
                                <div>
                                <li>Educación personalizada según el ritmo de aprendizaje.</li>
                                <li>Clases interactivas con proyectos y dinámicas</li>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/6_menciones honrosas.gif" height="80">
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
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/3_metodologia activa.gif" height="80">
                        </div>
                    </div>
                </div>
                <!-- <div class="card mb-3" style="border-radius: 30px; border: 4px dashed var(--color4)">
                    <div class="row g-0">
                        <div class="col-md-10">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <p class="card-text "></p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img src="https://jesussalvador.edu.pe//assets/img/icons/7_premio.gif" height="80">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- <section class="container" id="servicios">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-laptop"></i></div>
            <div class="sep_title">Servicios tecnológicos</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-2">
                <img src="https://gestion.pe/resizer/LOnv9z2WGZfpAtpXcBa2gJYl8aY=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/SNAX3ENF5BBS3IFCYFAOU4JDZU.jpg"
                    class="rounded shadow" width="100%" height="290">
            </div>
            <div class="col-lg-5 my-2">
                <video src="./img/video/VIDEO_CUBICOL.mp4" class="shadow rounded" width="100%" autoplay muted
                    loop></video>
            </div>
        </div>
    </section> -->

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
            <div class="col-md-3 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/noticias/noticia_1 .jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="#">
                            <h5>ciclo repaso 2021</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">13-10-2021</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/noticias/noticia_2 .png" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="#">
                            <h5>feliz día del niño</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">13-10-2021</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/noticias/noticia_3 .jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="#">
                            <h5>Matricula abierta Repaso 2021</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">13-10-2021</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/noticias/noticia_4.png" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="#">
                            <h5>día internacional de la familia</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">13-10-2021</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <?php include_once './includes/valores.php'; ?>

</body>

</html>