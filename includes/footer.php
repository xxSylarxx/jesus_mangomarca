
<footer class="container-fluid p-0 pt-4">
    <div class="container py-3">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <h3 class="text-white fw-bold">Realiza tu consulta</h3>
                <form id="formContacto" class="form-group pt-2" onsubmit="enviarCorreo(event)">
                    <input type="text" name="nombre" class="form-control mb-3 fw-bold" placeholder="Ingrese nombre y apellidos" required>
                    <input type="text" name="correo" class="form-control mb-3 fw-bold" placeholder="Ingrese su correo" required>
                    <textarea class="form-control mb-4 fw-bold" name="consulta" rows="4" placeholder="Escribe tu consulta" required></textarea>
                    <button class="btn btn-warning text-white fw-bold py-2" type="submit">
                        Enviar &nbsp; <i class="fas fa-chevron-circle-right"></i>
                    </button>
                    <div class="form-check form-check-inline text-white ms-3">
                        <input type="checkbox" class="form-check-input" id="checkone" value="si">
                        <label class="form-check-label" for="checkone">
                            Aceptar términos y condiciones
                        </label>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 pt-3 d-flex justify-content-center">
                <img src="./img/icons/escudo.png" width="90%" class="rounded-circle">
            </div>
            <div class="col-lg-3 my-auto text-white text-center">
                <p><b>Informes:</b><br>923 496 395<br>937 715 907</p>
                <p><b>Dirección:</b><br>Ampliación Mz. I-4 Lt. 35-36<br>José Carlos Mariategui - SJL, Lima.</p>
                <br>
                <a href="#" class="text-white">
                    <img src="./img/icons/book_reclamo.png" height="50" class="mb-2">
                    <p><b>Libro de reclamaciones</b></p>
                </a>
            </div>
        </div>
    </div>
    <div class="bar-inf mt-3">
        <a href="">Colegio Pitagoras <i class="far fa-copyright"></i> 2021</a>
        <a href="#" class="ms-auto">Desarrollado por Sensoft Solutions</a>
    </div>
</footer>

<script>
    const enviarCorreo = (e) => {
        e.preventDefault();
        let form = new FormData(document.getElementById("formContacto"));
        fetch("./libs/correo.php", {
            method: "POST",
            body: form
        }).then(function(res) {
            return res.text();
        }).then(function(res) {
            alert(res);
            e.target.reset();
        });
    }
</script>
