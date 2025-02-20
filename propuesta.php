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
    </style>

    <?php include_once './includes/header.php'; ?>

    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container ">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-hotel"></i></div>
                <div class="sep_title">Propuesta Pedagógica</div>
            </div>
            <div class="row d-flex justify-content-evenly align-items-center mt-5">
                <div class="col-lg-4">
                    <img src="./img/web/propuesta_educativa.png" width="90%" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush1" style="border-color:red;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7; " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                    <div class="w-100 title-pe">Infraestructura.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                            Nuestro colegio cuenta con amplias aulas equipadas con sistema multimedia e internet
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                           Salas con pizarras inteligentes y laboratorio de ciencia de acorde a las exigencias de nuestros alumnos.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                            Cada nivel tiene un patio, contando con modernos juegos recreativos en el nivel Inicial.
                                            </p>
                                        </span>
                                    </div>
                                   <!--  <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Se comunica con las familias y organiza entrevistas personales para hacer conocer todo lo
                                                referente a sus hijos y toma de decisiones.
                                            </p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush2" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                    <div class="w-100 title-pe">Profesores especializados.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>En cada una de sus áreas y materias; con una amplia experiencia y comprometidos con la enseñanza de nuestros alumnos</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Para el nivel secundaria la enseñanza estará orientada a una formación preuniversitaria, incluyendo en este nivel un incremento en las horas de matemática dentro de la propuesta escolar.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Nos preocupamos por brindar a nuestros estudiantes una educación que haga de ellos personas exitosas a nivel académico, espiritual y moral con competencias suficientes para enfrentar con éxito al cambiante y competitivo mundo actual.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Nuestro colegio refuerza permanentemente los valores que nuestros estudiantes adquieren en sus hogares (fomentando en ellos, la orientación y ejemplo de sus maestros en una práctica permanente).</p>
                                        </span>
                                    </div>
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Empático</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Líder</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Intuitivo y observador</p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush3" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                    <div class="w-100 title-pe">Uso constante de las TICS.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Trabajamos con recursos audiovisuales, computadoras, softwares modernos, plataformas educativas, proyectores, el SISTEMA CUBICOL multimedia, entre otros.</p>
                                        </span>
                                    </div>
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Realiza evaluaciones individuales o grupales según las necesidades de los estudiantes o la institución.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Sostener y aportar al crecimiento emocional de los alumnos.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Crear, aplicar e implementar programas socioemocionales.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Orientación, Asesoramiento Profesional y Vocacional.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Actividades Preventivas.</p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush4" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                    <div class="w-100 title-pe">Recursos pedagógicos adecuados.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Contamos con amplias aulas, pizarras acrílicas, carpetas adecuadas, gratos ambientes ventilados y bien iluminados.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Pizarras inteligentes.</p>
                                        </span>
                                    </div>
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Exámenes bimestrales.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Simulacros Tipo exámenes de admisión.</p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush5" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                    <div class="w-100 title-pe">Departamento Psicológico.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Se encarga de apoyar y evaluar a toda la población escolar, orientando en forma permanente a la comunidad educativa para facilitar el desarrollo óptimo de nuestros estudiantes y padres de familia.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                            Sirve de fuente consultiva de derivación y asesoramiento en el desarrollo formativo y psicológico a través de distintos programas que, buscan promover la salud mental y emocional, bienestar psicológico integral y el buen clima institucional.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush6" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item6" aria-expanded="false" aria-controls="item6">
                                    <div class="w-100 title-pe">Laboratorio de Ciencias.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item6" class="accordion-collapse collapse" aria-labelledby="flush6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Los cursos de ciencia contarán con horas de práctica en laboratorio según las temáticas a desarrollar, fortaleciendo sus aprendizajes científicos mediante sus experimentos en el laboratorio.</p>
                                        </span>
                                    </div>
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Día de la madre / Día del Padre.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Día del Maestro.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario patrio.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Actividades de Responsabilidad Social.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Festival de Expresión Artística.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Debate escolar.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Olimpiadas Académicas.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario del colegio.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Clausura del año escolar.</p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush7" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item7" aria-expanded="false" aria-controls="item7">
                                    <div class="w-100 title-pe">Certificación de Ingles.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item7" class="accordion-collapse collapse" aria-labelledby="flush7" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Con el compromiso de seguir fortaleciendo la calidad educativa de nuestros estudiantes, nos complace informarles que el colegio brindará asesoramiento especializado para la obtención de certificados internacionales en el idioma ingles en el presente año.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Este programa tiene como objetivo preparar a los estudi antes para exámenes reconocidos internacionalmente, tales como : Cambdrige english, TOEFL O IELTS entre otros, que son altamente valorados en el ámbito académico y profesional.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Dirigido a: Estudiantes interesados en rendir certifica ciones internacionales de inglés. (nivel secundaria)</p>
                                        </span>
                                    </div>
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario patrio.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Actividades de Responsabilidad Social.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Festival de Expresión Artística.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Debate escolar.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Olimpiadas Académicas.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario del colegio.</p>
                                        </span>
                                    </div> -->
                                    <!-- <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Clausura del año escolar.</p>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>
        <br><br><br>
    </div>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>