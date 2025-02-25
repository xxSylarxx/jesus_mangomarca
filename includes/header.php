
<div id="header-top"></div>
<header class="fixed-top" id="header">
    <div class="bar-sup">
        <div class="ms-auto">
            <a href="https://api.whatsapp.com/send?phone=983330558" target="_blank"><i class="fab fa-whatsapp"></i> 983 330 558</a>
            <a href="mailto:djacademico2020@gmail.com" class="mx-3"><i class="far fa-envelope"></i> djacademico2020@gmail.com</a>
            <a href="https://asociaciondejesus.cubicol.pe/principal/login" target="_blank" class="ms-3"><i class="fas fa-globe-americas"></i> Intranet</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="./">
            <img src="./img/icons/escudo.png" height="122" id="escudo">
            <div id="logotipo">
                <h4 class="text-uppercase" style="text-align: center;color: var(--color1);">Asociación Educativa<br>"De Jesús"</h4>
            </div>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="./">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">Niveles</span><i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="inicial.php">Inicial</a>
                        <a class="dropdown-item" href="primaria.php">Primaria</a>
                        <a class="dropdown-item" href="secundaria.php">Secundaria</a>
                        <!-- <a class="dropdown-item" href="academia.php">Academia</a> -->
                    </div>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="propuesta.php">Propuesta Pedagógica</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                </li>
                <li class="btn-header nav-item fw-bold">
                    <a class="nav-link" href="admision.php"  >Admisión</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.height = height + "px";
</script>
