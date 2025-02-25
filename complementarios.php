<style>
    /* Estilo de Lista */
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: var(--color2);
        display: inline-block;
        position: absolute;
        left: 30px;
        width: 2px;
        height: 95%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 14px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 4px solid var(--color3);
        left: 15px;
        width: 32px;
        height: 32px;
        z-index: 400;
    }

    @media screen and (max-width:800px) {
        ul.timeline:before {
            height: 94%;
        }
    }
</style>

<section class="container py-5" id="servicios">
    <div class="separador">
        <div class="sep_box"><i class="fas fa-star"></i></div>
        <div class="sep_title">Servicios Complementarios</div>
    </div>
    <br>
    <div class="container px-5">
        <div class="row">
            <div class="col-md-12">

                <ul class="timeline">
                    <li>
                        <div class="ml-3 pb-1 aos-init aos-animate" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                            <p>Recuperación Académica.</p>
                        </div>
                    </li>
                    <li>
                        <div class="ml-3 pb-1 aos-init aos-animate" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                            <p>Departamento Psicologia.</p>
                        </div>
                    </li>
                    <li>
                        <div class="ml-3 pb-1 aos-init aos-animate" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                            <p>Monitoreo académico.</p>
                        </div>
                    </li>
                    <?php


                    // Obtener el protocolo (http o https)
                    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

                    // Obtener el nombre del host (dominio)
                    $host = $_SERVER['HTTP_HOST'];

                    // Obtener la ruta de la URL
                    $uri = $_SERVER['REQUEST_URI'];

                    // Construir la URL completa
                    $url = $protocol . "://" . $host . $uri;

                    $palabra = 'secundaria';


                    if (strpos($url, $palabra)) {
                        echo "<li>
                        <div class='ml-3 pb-1 aos-init aos-animate' data-aos='fade-right' data-aos-anchor-placement='top-bottom' data-aos-duration='2000'>
                            <p>Talleres Artisticos</p>
                        </div>
                    </li>";
                    } ?>




                </ul>
                <br><br>
            </div>
        </div>
    </div>
</section>