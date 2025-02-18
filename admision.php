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

    <?php include_once './includes/header.php'; ?>

    <style>
        .text-color {
            color: #847f7f;
        }
    </style>

    <section class="container-fluid p-0">
        <div class="">
            <img src="./img/web/admision-slider.jpg" class="w-100" alt="...">
        </div>
    </section>

    <br><br><br>

    <div class="container">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-hotel"></i></div>
            <div class="sep_title">Proceso de Admisión 2022</div>
        </div>
        <br>
        <div>
            <p class="text-justify">Bienvenidos al proceso de admisión 2022 del Colegio Pitagoras Sjl.
                Por favor llene el siguiente formulario para recibir información completa,
                con gusto nos contactaremos con usted.
            </p>
        </div>
        <br>
        <div class="row">
            <div>
                <p class="fw-bolder fs-4" style="color: #ff7315; padding: 0; margin: 0;">Datos del estudiante</p>
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">A. Paterno </label>
                <input type="text" class="form-control" placeholder="Apellido paterno" aria-label="First name">
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">A. Materno</label>
                <input type="text" class="form-control" placeholder="Apellido materno" aria-label="Last name">
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombre completo" aria-label="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Sexo</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccion una opción</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                </select>
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Fecha nacimiento</label>
                <input type="date" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div>
                <p class="fw-bolder fs-4" style="color: #ff7315; padding: 0; margin: 0;">Datos del padre, de la madre o del apoderado</p>
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">A. Paterno</label>
                <input type="text" class="form-control" placeholder="Apellido paterno" aria-label="First name">
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">A. Materno</label>
                <input type="text" class="form-control" placeholder="Apellido materno" aria-label="Last name">
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombre completo" aria-label="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Celular</label>
                <input type="text" class="form-control" placeholder="Celular" aria-label="Last name">
            </div>
            <div class="col g-3">
                <label for="exampleFormControlInput1" class="form-label fw-bolder text-color">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col g-3">
                <button class="btn btn-warning text-white fw-bold py-2">Enviar&nbsp; <i class="fas fa-chevron-circle-right"></i></button>
                <div class="form-check form-check-inline ms-3">
                    <input type="checkbox" class="form-check-input" id="checkone" value="si">
                    <label class="form-check-label" for="checkone">
                        Aceptar términos y condiciones
                    </label>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <footer class="container-fluid p-0">
        <div class="bar-inf mt-3">
            <a href="">Colegio Pitagoras <i class="far fa-copyright"></i> 2021</a>
            <a href="#" class="ms-auto">Desarrollado por Sensoft Solutions</a>
        </div>
    </footer>

</body>

</html>
