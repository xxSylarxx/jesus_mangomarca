
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>COLEGIO PITAGORAS SJL</title>
</head>

<body>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <style>
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
            <img src="./img/web/portada_inicial.jpg" width="100%" alt="">
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
                    <img src="./img/web/inicial-interna.png" width="90%">
                    <!-- style="border-radius: 350px 80px 350px;" -->
                </div>
                <div class="col-lg-6 mt-lg-0 pt-5">
                    <div>
                        <p class="text-justify line" style="font-size: 19.5px;">
                            El nivel inicial tiene como objetivo desarrollar las capacidades motrices,
                            sociales, afectivas e intelectuales del niño a partir de su historia personal
                            y de su vida en familia.
                        </p>
                    </div>
                    <br>
                    <div class="mt-lg-5">
                        <div class="d-flex justify-content-around">
                            <div class="text-center icon hvr-grow">
                                <div>
                                    <i class="fas fa-vial fa-5x"></i>
                                </div>
                                <p class="mt-2 fw-bolder">Ciencia y Tecnología</p>
                            </div>
                            <div class="text-center icon hvr-grow">
                                <div>
                                    <i class="fas fa-book fa-5x"></i>
                                </div>
                                <p class="mt-2 fw-bolder">Comunicación</p>
                            </div>
                            <div class="text-center icon hvr-grow">
                                <div>
                                    <i class="fas fa-handshake fa-5x"></i>
                                </div>
                                <p class="mt-2 fw-bolder">Personal Social</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around mt-lg-5">
                            <div class="text-center icon hvr-grow">
                                <div>
                                    <i class="fas fa-running fa-5x"></i>
                                </div>
                                <p class="mt-2 fw-bolder">Psicomotricidad</p>
                            </div>
                            <div class="text-center icon hvr-grow">
                                <div>
                                    <i class="fas fa-calculator fa-5x"></i>
                                </div>
                                <p class="mt-2 fw-bolder">Matemática</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <br><br><br>

    <section class="container-fluid" id="valores">
        <div class="row justify-content-center">
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color4);">
                    <div class="card" style="background-color: var(--color4);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-people-carry"></i></span>
                            <h4 class="fw-bold">Trabajo en equipo</h4>
                        </div>
                        <div class="back">
                            <span>Fomenta un sentido de lealtad, seguridad y autoestima que satisface las necesidades
                                individuales de los integrantes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: #46c9e0;">
                    <div class="card" style="background-color: #46c9e0;">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-gem"></i></span>
                            <h4 class="fw-bold">Respeto</h4>
                        </div>
                        <div class="back">
                            <span>Reconocer el valor de cada persona y su propiedad, permitiendo que la sociedad viva en
                                paz y en sana convivencia</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color4);">
                    <div class="card" style="background-color: var(--color4);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-heartbeat"></i></span>
                            <h4 class="fw-bold">Honestidad</h4>
                        </div>
                        <div class="back">
                            <span>Desarrollar acciones humanas con rectitud, transparencia y sentido de pertenencia. La
                                honestidad en nuestras acciones</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: #46c9e0;">
                    <div class="card" style="background-color: #46c9e0;">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-praying-hands"></i> </span>
                            <h4 class="fw-bold">Inclusión</h4>
                        </div>
                        <div class="back">
                            <span>Valorar la diversidad social, que hace parte de nuestro entorno y asumir un compromiso
                                significativo otorgando las mismas oportunidades</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="container" id="servicios">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-laptop"></i></div>
            <div class="sep_title">Servicios tecnológicos</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-2">
                <img src="https://gestion.pe/resizer/LOnv9z2WGZfpAtpXcBa2gJYl8aY=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/SNAX3ENF5BBS3IFCYFAOU4JDZU.jpg" class="rounded shadow" width="100%" height="290">
            </div>
            <div class="col-lg-5 my-2">
                <video src="./img/video/VIDEO_CUBICOL.mp4" class="shadow rounded" width="100%" autoplay muted loop></video>
            </div>
        </div>
    </section>

    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>
