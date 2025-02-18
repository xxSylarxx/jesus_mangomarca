
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
                <div class="sep_title">Propuesta Educativa</div>
            </div>
            <div class="row d-flex justify-content-evenly align-items-center mt-5">
                <div class="col-lg-4">
                    <img src="./img/web/propuesta-interna.png" width="95%" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush1" style="border-color:red;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7; " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                    <div class="w-100 title-pe">Orientadores educativos.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Responsables del sistema de tutoría de cada salón de clase, motivando y exigiendo a
                                                los estudiantes para cumplir con sus obligaciones académicas.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Orientan a los estudiantes en el proceso de enseñanza – aprendizaje, estimulando al crecimiento
                                                personal para que logren descubrir su vocación o carrera profesional.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Trabajan en el desarrollo personal con el apoyo del departamento Psicopedagógico.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Se comunica con las familias y organiza entrevistas personales para hacer conocer todo lo
                                                referente a sus hijos y toma de decisiones.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush2" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                    <div class="w-100 title-pe">Docentes de especialidad.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Buen comunicador</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Resolutivo</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Paciente</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Dedicado</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Empático</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Líder</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Intuitivo y observador</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush3" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                    <div class="w-100 title-pe">Departamento Psicopedagógico.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Optimiza el proceso de enseñanza-aprendizaje a través de estrategias individuales y grupales.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Realiza evaluaciones individuales o grupales según las necesidades de los estudiantes o la institución.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Sostener y aportar al crecimiento emocional de los alumnos.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Crear, aplicar e implementar programas socioemocionales.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Orientación, Asesoramiento Profesional y Vocacional.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Actividades Preventivas.</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush4" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                    <div class="w-100 title-pe">Evaluaciones integrales.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Evaluaciones Diarias: Test Académico.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Exámenes mensuales.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Exámenes bimestrales.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Simulacros Tipo exámenes de admisión.</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush5" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                    <div class="w-100 title-pe">Comunicación asertiva y efectiva.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>
                                                Contamos con un plan de Comunicación permanente, efectiva y asertiva, donde comunicamos al padre de
                                                familia todo lo referente de sus menores hijos: Asistencia, aprovechamiento, felicitaciones y compromisos
                                                de parte de: Orientadores educativos, docentes, psicóloga, coordinador académico, sub director del estudiante y director.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush6" style="border-color:white;">
                                <button class="accordion-button collapsed" style="background-color: #f4f5f7;" type="button" data-bs-toggle="collapse" data-bs-target="#item6" aria-expanded="false" aria-controls="item6">
                                    <div class="w-100 title-pe">Actividades académicas y artísticas.</div>
                                    <div class="boton-icono"><i class="fas fa-chevron-circle-down"></i></div>
                                </button>
                            </h2>
                            <div id="item6" class="accordion-collapse collapse" aria-labelledby="flush6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="background-color: #f4f5f7;">
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Reconocimiento de fechas importantes para el fortalecimiento de valores morales y cívicos.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Día de la madre / Día del Padre.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Día del Maestro.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario patrio.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Actividades de Responsabilidad Social.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Festival de Expresión Artística.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Debate escolar.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Olimpiadas Académicas.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Aniversario del colegio.</p>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <span class="me-3"><i class="fas fa-circle"></i></span>
                                        <span>
                                            <p>Clausura del año escolar.</p>
                                        </span>
                                    </div>
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
