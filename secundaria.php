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
                        <img src="./img/web/Propuesta_sec.png" width="85%">
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div>
                            <p class="text-justify line" style="font-size: 19.5px;">
                                Nuestra propuesta educativa para la Asociación Educativa es de fomentar un ambiente de aprendizaje dinámico y participativo que desarrolle habilidades críticas, creativas y colaborativas en los estudiantes de secundaria.
                            </p>
                        </div>
                        <div class="my-2">
                            <div class="row">
                                <div class="col-md-6">
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
                                    </ul>
                                </div>
                                <div class="col-md-6">
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
                                    </ul>
                                </div>
                                <div class="col-mod-6">
                                    <ul class="course-list">
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
                                <div class="cold-mod-6">
                                    <ul class="course-list">
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