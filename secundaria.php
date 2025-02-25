<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/icono.ico" type="image/x-icon">
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

        .course-item i {
            color: var(--color1);
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .bg-plomo {
            background-color: #f4f5f7;
        }

        .tableover {
            max-height: 600px;
            overflow: auto;
        }

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

        .card {
            transition: ease-in-out .8s;
        }

        .card:hover {
            transform: scale(1.1);
        }
    </style>

    <?php include_once './includes/header.php'; ?>


    <section class="container-fluid p-0">
        <div>
            <img src="./img/web/portada_secundaria.png" width="100%" alt="">
        </div>
    </section>

    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-graduation-cap"></i></div>
                <div class="sep_title">Bienvenidos al Nivel Secundaria</div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-lg-5 d-flex"> 
                        <img src="./img/web/bienvenidos_sec.png" width="85%">
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                    
                        <div class="my-2">
                            <div class="row">
                                <div class="col-md-7">
                                    <ul class="course-list">
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Desarrollo personal, ciudadanía y cívica
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Ciencias Sociales
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Educación física
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Arte y Cultura
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Ciudadanía y Cívica
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Comunicación
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Educación para el Trabajo
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Matemática
                                        </li> 
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="course-list">
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Inglés
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Ciencia y Tecnología
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Física
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Química
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Educación Religiosa
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Talleres
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Psicología
                                        </li>
                                        <li class="course-item my-2">
                                            <i class="fas fa-check-circle"></i> Filosofía
                                        </li>
                                    </ul>
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
                                    <img src="./img/icons/taller_pedagogico.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Recuperación Pedagogica</h4>
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
                                    <img src="./img/icons/taller_academia.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Academia</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   <br><br><br>

   <section class="container" id="servicios2">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-laptop"></i></div>
            <div class="sep_title">Ejes educativos para el Nivel Secundaria</div>
        </div>
    </section>
    
    <br><br><br>
    <section class="container">
        <div class="col-lg">
            <div class="row d-flex justify-content-evenly align-items-center mt-5">
                <div class="col-lg-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./img/web/propuesta_sec_of.jpg" width="90%" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                <div>
                            <p class="text-justify line" style="font-size: 19.5px;">
                            Nuestra propuesta educativa para la Asociación Educativa es de fomentar un ambiente de aprendizaje dinámico y participativo que desarrolle habilidades críticas, creativas y colaborativas en los estudiantes de secundaria.
                            </p>
                        </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush1" style="border-color:red;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                    <div class="w-100 title-pe">Metodologías Activas</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                            Implementar técnicas como el aprendizaje basado en proyectos (ABP), donde los estudiantes trabajen en proyectos interdisciplinarios que aborden problemas reales de su comunidad
                                            </p>
                                        </span>
                                    </div>                                                                                                  
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush2" style="border-color:white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                    <div class="w-100 title-pe">Integracion de Tecnología.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Incorporar herramientas digitales en el aula, como plataformas de aprendizaje en línea.</p>
                                        </span>
                                    </div>                                                                   
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush3" style="border-color:white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                    <div class="w-100 title-pe">Educación Socioemocional.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Implementar un sistema de evaluación que contemple no solo exámenes, sino también proyectos, presentaciones y autoevaluaciones, para valorar el proceso de aprendizaje.</p>
                                        </span>
                                    </div>                                                                                     
                               </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush4" style="border-color:white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                    <div class="w-100 title-pe">Rol de la Familia Jesusina.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Se promoverá la participación de los padres en el proceso educativo a través de reuniones, talleres y apoyo en casa.</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include_once './complementarios.php'; ?>

    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>