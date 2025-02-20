
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

    <?php include_once './includes/header.php'; ?>

    <style>
        .bg-plomo {
            background-color: #f4f5f7;
        }

        .tableover {
            max-height: 400px;
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
    </style>

    <section class="container-fluid p-0">
        <div>
            <img src="./img/web/portada_prim.png" width="100%" alt="">
        </div>
    </section>

    <div class="container-fluid bg-plomo">
        <br><br><br>
        <section class="container">
            <div class="separador">
                <div class="sep_box"><i class="fas fa-graduation-cap"></i></div>
                <div class="sep_title">Bienvenidos al Nivel Primaria</div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-lg-5 d-flex">
                    <img src="./img/web/propuesta_prim.jpg" width="100%">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div>
                        <p class="text-justify line" style="font-size: 19.5px;">
                        La educación primaria es una etapa clave para el desarrollo del pensamiento crítico, la autonomía y los valores. Se busca formar estudiantes activos, creativos y con habilidades para enfrentar los desafíos del mundo.
                        </p>
                    </div>
                    <div class="mt-5 tableover">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Áreas</th>
                                    <th>Cursos</th>
                                    <th>Horas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th rowspan="5">Matemáticas</th>
                                </tr>
                                <tr>
                                    <td>Aritmética</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Álgebra</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Geometría</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Razonamiento Matemático</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Comunicación</th>
                                </tr>
                                <tr>
                                    <td>Comunicación</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Aptitud Verbal</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Plan Lector</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th>Ciencias</th>
                                    <td>Ciencias y Ambiente</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <th>Sociales</th>
                                    <td>Sociales</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Cursos</th>
                                </tr>
                                <tr>
                                    <td>Inglés</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Francés</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Talleres</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th colspan="2">TOTAL DE HORAS</th>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
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
