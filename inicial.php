<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>Asociación Educativa "De Jesús"</title>
</head>

<body>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <style>
        .course-list {
            list-style: none;
            padding: 0;
            max-width: 400px;
            margin: 0 auto;
        }

        /* .course-item {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
 */
        .course-item i {
            color: var(--color1);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* para ocultar los iconos por defecto*/
        .accordion-button:not(.collapsed)::after {
            content: "";
            background-image: url("");
        }

        .accordion-button::after {
            width: 0px;
            height: 0px;
            content: "";
            background-image: url("");
            background-size: 0px;
        }

        /* color y tamaño en modo activo */
        .accordion-button:not(.collapsed) div.boton-icono {
            color: var(--color3);
            font-size: 20px;
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        /* color y tamaño */
        .accordion-button div.boton-icono {
            color: var(--color2);
            font-size: 20px;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
        }

        .accordion-button {
            color: var(--color2);
            font-size: 17.5px;
        }

        .accordion-button:hover {
            color: var(--color3);
        }

        .accordion-flush .accordion-item {
            border-bottom: 0;
        }

        .accordion-button:not(.collapsed) {
            color: var(--color3);
        }

        .fa-circle {
            font-size: 8px;
            color: var(--color2);
        }

        .title-pe {
            font-size: 22px;
        }

        .bg-plomo {
            background-color: #f4f5f7;
        }

        /* focus accordion */
        .accordion-button:focus {
            box-shadow: none;
        }

        .bg-plomo {
            background-color: #f4f5f7;
        }

        .icon div i {
            color: #a6aaad;
        }

        .icon:hover div i {
            color: #008fd1;
        }

        .icon p {
            color: #a6aaad;
        }

        .icon:hover p {
            color: #ff7315;

        }

        .hvr-grow {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform;
            transition-property: transform;
        }

        .hvr-grow:hover,
        .hvr-grow:focus,
        .hvr-grow:active {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        /* valores */
        #valores .flip {
            height: 172px;
            padding: 0.6em;
        }

        #valores .card {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);
        }

        #valores .front,
        #valores .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {
            color: #fff;
            border: 2px solid #ececec;
        }

        #valores .back {
            color: white;
            transform: rotateY(180deg);
            border: 2px solid #ececec;
            padding: 0.5em;
        }
    </style>

    <?php include_once './includes/header.php'; ?>

    <section class="container-fluid p-0">
        <div>
            <img src="./img/web/inicial_portada.png" width="100%" alt="">
        </div>
    </section>


    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-graduation-cap"></i></div>
                <div class="sep_title">Bienvenidos al Nivel Inicial</div>
            </div>
            <div class="row justify-content-around d-flex align-items-center">
                <div class="col-lg-5">
                    <img src="./img/web/inicial_propuesta.png" width="90%">
                    <!-- style="border-radius: 350px 80px 350px;" -->
                </div>
                <div class="col-lg-6 mt-lg-0 pt-5">
                    <div>
                        <p class="text-justify line" style="font-size: 19.5px;">
                            El nivel inicial es una etapa clave en el desarrollo infantil, ya que sienta las bases para el aprendizaje futuro y el desarrollo emocional, social y cognitivo. Esta propuesta busca ofrecer un ambiente seguro, afectuoso y estimulante donde los niños puedan explorar, descubrir y aprender a través del juego y la experimentación y sentar las bases para el nivel primaria.
                        </p>
                    </div>
                    <br>
                    <div class="my-2">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Personal Social
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Comunicación
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Ciencia y Tecnología
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Psicomotriz
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Matemática
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Arte/Danza
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Ingles
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Psicomotocidad
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="mt-lg-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush1" style="border-color:red;">
                                    <button class="accordion-button collapsed" style="background-color: #f4f5f7; " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                        <div class="w-100 title-pe">Nuestros Objetivos.</div>
                                        <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                    </button>
                                </h2>
                                <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="background-color: #f4f5f7;">
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    Fomentar el aprendizaje a través del juego.
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    Desarrollar el lenguaje, la creatividad y la autonomía.
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    Promover valores y habilidades sociales.
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    Involucrara a la familia en la educación.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush2" style="border-color:red;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7; " type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                    <div class="w-100 title-pe">Nuestra Metodología.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Aprendizaje lúdico y experiencial.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Actividades artísticas, musicales y motoras.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Exploración del entorno y experimentación sensorial.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Desarrollo del lenguaje mediante cuentos y canciones.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush3" style="border-color:red;">
                            <button class="accordion-button collapsed" style="background-color: #f4f5f7; " type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                <div class="w-100 title-pe">Rol de los padres Jesusinos.</div>
                                <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                            </button>
                        </h2>
                        <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="background-color: #f4f5f7;">
                                <div class="d-flex flex-row">
                                    <span class="me-3"><i class="fas fa-circle"></i></span>
                                    <span>
                                        <p>
                                            Participación activa en actividades y refuerzo en el hogar.
                                        </p>
                                    </span>
                                </div>



                            </div>
                        </div>
                    </div>




                </div>
            </div>
    </div>
    </section>
    </div>

    <br><br><br>

    <section class="container-fluid" id="valores">
        <?php include_once './includes/valores.php'; ?>
    </section>

    <br><br><br>


    <section class="container" id="servicios">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-laptop"></i></div>
            <div class="sep_title">Talleres</div>
        </div>
        <br>
        <br>
        <br>
        <div class="container-fluid" style="margin-top: -60px;">
            <div class="row mx-0 d-flex justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100" style="background-color: var(--color3);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./img/icons/arte.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Arte/Danza</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100" style="background-color: var(--color1);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./img/icons/ingles.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Inglés</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100" style="background-color: var(--color3);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./img/icons/computadora.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Psicomotocidad</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100" style="background-color: var(--color3);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>


    <?php include_once './complementarios.php'; ?>
        <div class="separador">
            <div class="sep_box"><i class="fas fa-laptop"></i></div>
            <div class="sep_title">Servicios Complementarios</div>
        </div>


        <br><br><br>

        
    <?php include_once './includes/footer.php'; ?>

</body>

</html>