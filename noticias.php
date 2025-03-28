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
        #noticias .card {
            border-color: #fff;
            background: linear-gradient(rgb(255, 255, 255), rgb(243, 243, 243));
            box-shadow: 0 0 5px rgb(161, 161, 161);
            transition: transform 0.3s;
        }

        #noticias .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 5px rgb(134, 134, 134);
        }

        #noticias img.cover {
            height: 210px;
            object-fit: cover;
        }

        #noticias h5 {
            color: var(--color3);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.93em;
        }

        #noticias .detalle {
            font-size: 0.85em;
            text-align: justify;
        }

        #noticias .card-footer {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: transparent;
            font-size: 0.8em;
            padding-top: 11px;
            padding-bottom: 11px;
        }

        #noticias .card-footer i {
            font-size: 1.2em;
        }
    </style>

    <?php include_once './includes/header.php'; ?>

    <br><br><br>

    <section class="container" id="noticias">
        <div class="separador">
            <div class="sep_box"><i class="far fa-newspaper"></i></div>
            <div class="sep_title">Noticias</div>
        </div>
        <div class="row mt-4 pt-3">
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia1.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=1">
                            <h5>Inicio de clases 2025</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">25-02-2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia2.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=2">
                            <h5>Dile No a la Piratería</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">21-02-2025</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 px-3">
                <div class="card h-100">
                    <img src="./img/galeria/portada_noticia3.jpg" class="cover" width="100%">
                    <div class="card-body pb-2">
                        <a href="./view.php?id=3">
                            <h5>Matrículas Abiertas 2025</h5>
                        </a>
                        <div class="detalle">
                            <!-- text comentario -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="ms-2">17-12-2025</span>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <br><br><br>

    <?php include_once './includes/footer.php'; ?>

</body>

</html>
