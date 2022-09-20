
<div class="page-header section-padding full-height dc-six right-col-full">
    
    <div class="container">
        <div class="row align-items-center">
            
            
            <div class="col-lg-6">

                <div class="heading-wrapper wow fadeInLeft" data-wow-delay="0.2s">

                    <span style="    color: #ffffff;" class="sub-title">Soluciones Tecnologicas</span>
                    <h1 style="    color: #ffffff;">¿Preparado para llevar tu negocio al siguiente nivel? </h1>
                </div>
                <div class="text-wrapper wow fadeInLeft" data-wow-delay="0.4s">
                    <p style="    color: #ffffff;">Tome las riendas de tu empresa.</p>
                    <p style="    color: #ffffff;">Resúmenes de venta, Inventarios, metodología SCRUM y alertas en tu celular.</p>


                </div>
                <div class="btn-wrapper wow fadeInLeft" data-wow-delay="0.5s">
                    <a class="btn btn-primary btn-light" href="#correo">Contactanos</a>
                    <a class="btn btn-outline-primary btn-light" href="#correo"><i class="fas fa-play-circle"></i>Como Funciona</a>
                </div>
            </div><!-- End Col -->
            <div class="col-lg-6">
                <div class="enquiry-form-box">
                    <div class="form-wrapper">
                        <div class="form-header">
                            <h4>Tienes Alguna Consulta? <span>Hablemos.</span></h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Su Nombre" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" id="correos" placeholder="Correo" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-full" value="Enviar Consulta">
                            </div>
                        </form>


                    </div>
                </div>

            </div><!-- End Col -->
            <div class="jc-con">
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-stars">
                </div>
                <div class="jc-rocket-container">
                    <div class="jc-rocket">
                        <div class="jc-rocket-head">
                        </div>
                        <div class="jc-rocket-window">
                        </div>
                        <div class="jc-booster">
                        </div>
                        <div class="jc-booster-flames">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row -->
    </div>
</div>
<style>
    .jc-con {
        z-index: -2;
        overflow: hidden;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .jc-rocket-container {
        z-index: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
    }

    .jc-rocket {
        background-color: #fff;
        height: 150px;
        width: 50px;
        animation: rocketfly 5s ease-in-out infinite;
    }

    .jc-rocket:before {
        content: '';
        position: absolute;
        top: 50%;
        right: 100%;
        border-bottom: 100px solid red;
        border-left: 30px solid transparent;
    }

    .jc-rocket:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 100%;
        border-bottom: 100px solid red;
        border-right: 30px solid transparent;
    }

    .jc-rocket-head {
        position: relative;
        top: -35%;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-bottom: 50px solid red;
    }

    .jc-rocket-window {
        position: relative;
        top: 0;
        left: 15%;
        background-color: skyblue;
        border: 5px solid gray;
        border-radius: 50%;
        height: 25px;
        width: 25px;
    }

    .jc-booster {
        height: 20px;
        width: 50px;
        position: absolute;
        top: 100%;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 20px solid gray;
        box-sizing: border-box;
    }

    .jc-booster-flames {
        background-color: yellow;
        position: absolute;
        top: 120%;
        left: 0%;
        height: 50px;
        width: 50px;
        border-radius: 0 50% 50% 50%;
        transform: rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        animation: flames 2s linear infinite;
        box-sizing: border-box;
    }

    .jc-stars {
        z-index: -1;
        background-color: #fff;
        position: absolute;
        top: -10%;
        height: 10px;
        width: 10px;
        animation: stars 3s linear infinite;
    }

    .jc-stars:nth-child(2) {
        left: 25%;
        animation-delay: 1s;
    }

    .jc-stars:nth-child(3) {
        height: 15px;
        width: 15px;
        left: 42%;
        animation-delay: 1.7s;
    }

    .jc-stars:nth-child(4) {
        left: 66%;
        animation-delay: 6.5s;
    }

    .jc-stars:nth-child(5) {
        left: 59%;
        animation-delay: 2.6s;
    }

    .jc-stars:nth-child(6) {
        left: 74%;
        animation-delay: 4.9s;
    }

    .jc-stars:nth-child(7) {
        height: 15px;
        width: 15px;
        left: 105%;
        animation-delay: 4s;
    }

    .jc-stars:nth-child(8) {
        left: 125%;
        animation-delay: 2.8s;
    }

    .jc-stars:nth-child(9) {
        left: 131%;
        animation-delay: 1.9s;
    }

    .jc-stars:nth-child(10) {
        left: 145%;
        animation-delay: 5.8s;
    }

    @keyframes stars {
        0% {
            transform: translate(200px, -200px) rotate(0deg);
        }

        100% {
            transform: translate(-700px, 700px) rotate(270deg);
        }
    }


    @keyframes flames {
        0% {
            transform: scale(0.8) rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        }

        20% {
            transform: scale(1) rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        }

        50% {
            transform: scale(0.6) rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        }

        70% {
            transform: scale(1) rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        }

        100% {
            transform: scale(0.8) rotate(45deg) skew(8deg, 8deg) rotate(180deg);
        }
    }

    @keyframes rocketfly {

        0%,
        100% {
            transform: translateX(-10px);
        }

        20%,
        25% {
            transform: translateX(10px);
        }

        40%,
        45% {
            transform: translate(5px);
        }

        60%,
        65% {
            transform: translate(15px);
        }

        80%,
        85% {
            transform: translate(10px);
        }
    }
</style>

<script>
    jQuery(document).ready(function() {
        jQuery("form").submit(function(event) {






            var formData = {
                nombre: $("#nombre").val(),
                correo: $("#correos").val(),
                telefono: $("#telefono").val(),
                asunto: $("#asunto").val(),
                mensaje: $("#mensaje").val(),

            };
            console.log(formData);
            var settings = {
                "url": "https://rocket.apolotec.cl/contacto/crear",
                "method": "get",
                "mimeType": "multipart/form-data",
                "data": formData
            };

            $.ajax(settings).done(function(response) {
                if (response == 1) {
                    Swal.fire({
                        title: 'Alerta',
                        text: "Mensaje ha Sido enviado",
                        icon: 'success'
                    }).then((result) => {
                        window.location.reload();

                    });
                } else {
                    Swal.fire({
                        title: 'Alerta',
                        text: "No se ha podido enviar el mensaje",
                        icon: 'warning'
                    }).then((result) => {
                        window.location.reload();

                    });

                }
            });



            event.preventDefault();
        });
    });
</script>