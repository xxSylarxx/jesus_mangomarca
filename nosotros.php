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

        .img_presentacion {
            filter: drop-shadow(5px 5px 5px);
        }
    </style>

    <?php include_once './includes/header.php'; ?>

    <div class="container-fluid bg-plomo pb-5">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-hotel"></i></div>
                <div class="sep_title">Reseña Histórica</div>
            </div>
            <br><br>
            <div class="row d-flex align-items-center justify-content-around">
                <div class="col-lg-5">
                    <img class="img_presentacion" src="./img/web/f_resenia.jpg" width="100%" alt="">
                    <div class="text-center mt-3 pt-5">
                        <h2 style="color:var(--color1);">¡SIEMPRE UN PASO ADELANTE…!</h2>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <p class="text-justify m-0 line">
                        La Asociación Educativa Privada “De Jesús”, es una Institución formada por la Promotora la Lic. Aida Elena Escudero Tarazona, para brindar Educación en los Niveles de Inicial, Primaria y Secundaria. El 21 de enero de 1987, se creó los niveles de Inicial y Primaria del 1er grado hasta el cuarto grado, según R.D.Z. Nº 0119-Lima, así mismo se gestionó la Resolución de Ampliación de 5to y 6to grado del Nivel primaria según R.D. USE 03 Nº1014 con fecha 01-03-88, luego de trascurridos cinco años, según la R.D. USE 03 Nº2219 del 01-03-93, se apertura el Nivel Secundaria de Menores.
                    </p>
                    <p class="text-justify m-0 line">
                        Somos una Institución Educativa que forma alumnos autónomos, intelectualmente capaces, tolerantes e integradores de la diversidad y que son actores destacados del desarrollo y crecimiento de su entorno, con docentes innovadores, actualizados acorde al avance de la ciencia - tecnología y con vocación de servicio, padres comprometidos en la educación de sus hijos; en una infraestructura moderna y saludable, con directivos líderes pedagógicos fomentando la participación democrática.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <br><br><br>

    <section class="container" id="valores">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color:var(--color1);">
                    <div class="card" style="background-color:var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-globe"></i></span>
                            <h4 class="fw-bold">Misión</h4>
                        </div>
                        <div class="back">
                            <span>
                                Es acompañar a nuestros estudiantes en su crecimiento humano, espiritual y saludable, para un desempeño superior en la vida a partir del desarrollo de una ética de trabajo, de la autodisciplina, la solidaridad, el respeto por las diferencias y por todas las formas de vida en nuestra comunidad.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color: var(--color5);">
                    <div class="card" style="background-color: var(--color5);">
                        <div style="border: 2px solid var(--color1);" class="front">
                            <span style="color: var(--color1);" class="fs-1"><i class="fas fa-eye"></i></span>
                            <h4 style="color: var(--color1);" class="fw-bold">Visión</h4>
                        </div>
                        <div style="border: 2px solid var(--color1);" class="back">
                            <span style="color: var(--color1);">
                                Ser comunidad educativa que promueve activamente un entorno inclusivo donde todos los miembros se sientan valorados, donde los estudiantes vivencien la exploración y el intercambio de diversas experiencias de aprendizaje y transformen la sociedad a través de nuestra educación.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
    <!-- <div class="container-fluid bg-plomo pb-5">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-hotel"></i></div>
                <div class="sep_title">Reseña Histíorica</div>
            </div>
            <br><br>
            <div class="row d-flex align-items-center justify-content-around">
                <div class="col-lg-7">
                    <img class="img_presentacion" src="./img/web/foto_nosotros.png" width="100%" alt="">
                </div>
                <div class="col-lg-4 mt-3">
                    <p class="text-justify m-0 line">
                        Somos una Institución Educativa que forma alumnos autónomos, intelectualmente capaces, tolerantes e integradores de la diversidad y que son actores destacados del desarrollo y crecimiento de su entorno, con docentes innovadores, actualizados acorde al avance de la ciencia - tecnología y con vocación de servicio, padres comprometidos en la educación de sus hijos; en una infraestructura moderna y saludable, con directivos líderes pedagógicos fomentando la participación democrática.
                    </p>
                </div>
            </div>
        </section>
    </div> -->
    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>