<style>
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


<div class="row justify-content-center">
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-people-carry"></i></span>
                            <h4 class="fw-bold">Unión</h4>
                        </div>
                        <div class="back">
                            <span>El éxito se logra mejor cuando trabajamos en unión</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color:  var(--color5);">
                    <div class="card" style="background-color: var(--color5);">
                        <div class="front"
                         style="border: 2px solid var(--color1);">
                            <span style="color:var(--color1);" class="fs-1"><i class="fas fa-gem"></i></span>
                            <h4 style="color:var(--color1);" class="fw-bold">Paz</h4>
                        </div>
                        <div class="back"
                        style="border: 2px solid var(--color1);">
                            <span style="color:var(--color1);">El camino hacia la paz comienza con pequeños actos de bondad</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-heartbeat"></i></span>
                            <h4 class="fw-bold">Lealtad</h4>
                        </div>
                        <div class="back">
                            <span>La lealtad es el vínculo más fuerte que une a los seres humanos</span>
                        </div>
                    </div>
                </div>
            </div>
           <!--  <div class="col-lg-3 p-0">
                <div class="flip" style="background-color: var(--color5);">
                    <div class="card" style="background-color: var(--color5);">
                        <div class="front"
                        style="border: 2px solid var(--color1);">
                            <span  style="color:var(--color1);" class="fs-1"><i class="fas fa-praying-hands"></i> </span>
                            <h4 style="color:var(--color1);" class="fw-bold">Inclusión</h4>
                        </div>
                        <div class="back"
                        style="border: 2px solid var(--color1);">
                            <span style="color:var(--color1);" >Valorar la diversidad social, que hace parte de nuestro entorno y asumir un compromiso
                                significativo otorgando las mismas oportunidades</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>