
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

        .bg-plomo{
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
    </style>

    <?php include_once './includes/header.php'; ?>

    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-hotel"></i></div>
                <div class="sep_title">Presentación</div>
            </div>
            <br><br>
            <div class="row d-flex align-items-center justify-content-around">
                <div class="col-lg-7">
                    <img src="./img/web/nosotros-interna.png" width="100%" alt="">
                </div>
                <div class="col-lg-4 mt-3">
                    <p class="text-justify m-0 line">
                        Somos una Institución Educativa con el propósito de proporcionar las mismas
                        oportunidades de estudio para nuestros estudiantes, realizando nuestras actividades
                        con calidad, eficiencia y equidad, para desarrollar sus capacidades, habilidades
                        cognitivas y emocionales, fomentando la creatividad y resolución de conflictos de
                        nuestros estudiantes.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <br><br><br>

    <section class="container" id="valores">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color: var(--color4);">
                    <div class="card" style="background-color: var(--color4);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-globe"></i></span>
                            <h4 class="fw-bold">Misión</h4>
                        </div>
                        <div class="back">
                            <span>
                                Somos una Institución Educativa reconocida como formador de líderes,
                                con un alto nivel académico con una sólida formación en valores.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color: #46c9e0;">
                    <div class="card" style="background-color: #46c9e0;">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-eye"></i></span>
                            <h4 class="fw-bold">Visión</h4>
                        </div>
                        <div class="back">
                            <span>
                                Ser una Institución Educativa reconocida por estar basada en 
                                la excelencia en el servicio de sus colaboradores.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>
