<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>Colegio Los Robles</title>
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
            color: #28a745;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .bg-plomo {
            background-color: #f4f5f7;
        }

        .icon {
            font-size: 1.1rem;
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
            height: 250px;
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
            background-size: cover;
            background-position: center;
        }

        #valores .col-lg-3:nth-child(1) .back {
            background:
                linear-gradient(rgba(234, 119, 12, 0.2), rgba(234, 119, 12, 0.2)),
                url('./img/web/amor.jpg');
            background-repeat: no-repeat;
            background-position: bottom 60% center;
            background-size: cover;
        }

        #valores .col-lg-3:nth-child(2) .back {
            background: linear-gradient(rgba(0, 113, 0, 0.2), rgba(0, 113, 0, 0.2)),
                url('./img/web/disciplina.jpg');
            background-repeat: no-repeat;
            background-position: bottom 60% center;
            background-size: cover;
        }

        #valores .col-lg-3:nth-child(3) .back {
            background:
                linear-gradient(rgba(234, 119, 12, 0.2), rgba(234, 119, 12, 0.2)),
                url('./img/web/trabajo.jpg');
            background-repeat: no-repeat;
            background-position: bottom 60% center;
            background-size: cover;
        }


        #port-interna img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            object-position: center 15%;
        }

        .card {
            transition: ease-in-out .8s;
        }

        .card:hover {
            transform: scale(1.1);
        }
    </style>

    <?php include_once './includes/header.php'; ?>

    <section id="port-interna" class="container-fluid p-0">
        <div>
            <img src="./img/web/pi-inicial.jpg" alt="portada inicial">
        </div>
    </section>


    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-graduation-cap"></i></div>
                <div class="sep_title">Bienvenidos al Nivel Inicial</div>
            </div>
            <br>
            <div class="row justify-content-around d-flex align-items-center">
                <div class="col-lg-6">
                    <img src="./img/web/b-inicial.jpg" width="90%">
                    <!-- style="border-radius: 350px 80px 350px;" -->
                </div>
                <div class="col-lg-6 mt-lg-0 pt-5">
                    <p class="text-justify">En este nivel, se brindan las primeras oportunidades del desarrollo escolar, convencidos que la formación en los primeros años de vida permite el desarrollo de las habilidades socio emocionales, cognitivas y físicas facilitando el logro de competencias y el desarrollo integral del niño.
                    </p>
                    <p class="text-justify">
                        Brindamos ambientes y espacios de trabajo motivadores, donde los niños puedan descubrir y crear con libertad. Promovemos actividades acordes a los intereses de los pequeños, donde la curiosidad y exploración son protagonistas de nuestra acción pedagógica.
                    </p>
                    <p class="text-justify"> Nuestros niños serán capaces de relacionarse, comunicarse, descubrir y responder a situaciones retadoras.</p>

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
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Psicomotriz
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Matemática
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Talleres
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
    </div>


    <section class="container-fluid" id="valores">
        <div class="row justify-content-center">
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color3);">
                    <div class="card" style="background-color: var(--color3);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-heart"></i></span>
                            <h4 class="fw-bold">Amor</h4>
                        </div>
                        <div class="back">
                            <!--  <span class="fs-1"><i class="fas fa-medal"></i></span>
                            <h4 class="fw-bold">Honestidad</h4> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-gem"></i></span>
                            <h4 class="fw-bold">Disciplina</h4>
                        </div>
                        <div class="back">
                            <!-- <span class="fs-1"><i class="fas fa-people-carry"></i></span>
                            <h4 class="fw-bold">Solidaridad</h4> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color3);">
                    <div class="card" style="background-color: var(--color3);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-child"></i></span>
                            <h4 class="fw-bold">Trabajo</h4>
                        </div>
                        <div class="back">
                            <!-- <span class="fs-1"><i class="fas fa-user-friends"></i></span>
                            <h4 class="fw-bold">Unión</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="container" id="servicios">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-star"></i></div>
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
                                    <h4>Arte</h4>
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
                    <div class="card bg-1 text-white h-100" style="background-color: var(--color4);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./img/icons/computadora.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Computación</h4>
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
                                    <img src="./img/icons/manualidades.png" class="mr-3 w-100">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Psicomotricidad</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <?php include_once './includes/complementarios.php'; ?>

    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>