<div id="main-wrapper" class="page-wrapper">
    <div class="inner-page-header section-padding style-dark">
        <div class="container">
            <div class="page-title-inner text-center clearfix">
                <div class="heading-wrapper">
                    <h1 class="h1">
                        🚀 <?php

                            use app\models\Post;

                            echo $model->titulo; ?>
                    </h1>
                    <br>
                    <h2><?php echo $model->subtitulo;  ?></h2>
                </div><!-- End Heading -->
                <div class="post-meta">
                    <span class="entry-meta entry-author">
                        Autor -
                        <a href="#"><?php echo $model->Usuario; ?></a>
                    </span>
                </div>
            </div><!-- Page Title Inner -->
        </div>
    </div>
    <!-- Page Header -->
    <div class="section-padding">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8">
                    <article class="post">
                        <div class="post-thumbnail">
                            <img src="../web/uploads/<?php echo $model->foto; ?>" alt="">
                        </div>
                        <div class="post-meta">
                            <span class="entry-meta entry-category">
                                <a href="#"><?php echo $model->Usuario; ?></a>
                            </span>
                            <span class="entry-meta entry-date">
                                <a href="#"><?php echo $model->fecha; ?></a>
                            </span>
                        </div>
                        <div>
                            <?php echo $model->cuerpo; ?>

                        </div>
                        <div class="entry-content-bottom">
                            <div class="entry-tags">
                                <label class="label">Tags:</label>
                                <div class="tagcloud">
                                    <a href="#">General</a><a href="#">Inventario</a><a href="#">Tendencias</a><a href="#">Sistemas</a><a href="#">Control</a><a href="#">ERP</a><a href="#">Mantencion</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div><!-- End Col -->
                <div class="col-lg-4">
                    <div class="sidebar right-side">


                        <div class="widget text">
                            <div class="widget-title">
                                <h3 class="title">Sección de Articulos</h3>
                            </div>
                            <div class="text-widget">
                                <p>En esta Sección te podras poner al dia con las Tendencias tecnologicas.</p>
                            </div>
                        </div>


                        <div class="widget widget_recent_entries">
                            <div class="widget-title">
                                <h3 class="title">Articulos Recientes</h3>
                            </div>
                            <ul class="st-recent-posts">

                                <?php

                                $posts = Post::find()->limit(5)->all();

                                foreach ($posts as $p) {
                                ?>

                                    <li class="rp-item">
                                        <a href="detalle?id=<?php echo $p->id; ?>&t=<?php echo strtr($p->titulo, " ", "-"); ?>">
                                            <div class="article-img">
                                                <img src="web/uploads/<?php echo $p->foto; ?>" alt="">
                                            </div>
                                            <div class="article-details">
                                                <h4 class="entry-title"><?php echo $p->titulo; ?></h4>
                                                <span class="rp-date"><?php echo $p->fecha; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>


                        <div class="widget widget_social">
                            <div class="widget-title">
                                <h3 class="title">Siguenos en nuestras redes</h3>
                            </div>
                            <div class="social-media-links">
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/apolotecsoftware"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/company/apolotec"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/apolo.tec"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End Sidebar -->
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div><!-- About Section -->
</div>
<script>
    setTimeout(() => {

        var estado = <?php echo $model->estado; ?>;
        if (estado == 2) {
            var CustomerKey = 1234; //your customer key value.
            swal.fire({
                imageUrl: 'https://thumbs.gfycat.com/WillingSlightGraysquirrel-max-1mb.gif',
                imageHeight: 200,
                imageAlt: 'A tall image',
                title: "Quieres recibir info para tu negocio todos los Martes y Jueves? Suscríbete!",
                input: "email",
                inputPlaceholder: "Ingrese su Correo",
                showCancelButton: true,
                confirmButtonColor: "#1FAB45",
                confirmButtonText: "Registrarme",
                cancelButtonText: "Cancelar",
                buttonsStyling: true
            }).then(function(correo) {
                    $.ajax({
                        type: "POST",
                        url: "news",
                        data: {
                            'CustomerKey': CustomerKey,
                            'correo': correo
                        },
                        cache: false,
                        success: function(response) {
                            swal(
                                "Sccess!",
                                "Your note has been saved!",
                                "success"
                            )
                        },
                        failure: function(response) {
                            swal(
                                "Internal Error",
                                "Oops, your note was not saved.", // had a missing comma
                                "error"
                            )
                        }
                    });
                },
                function(dismiss) {
                    if (dismiss === "cancel") {
                        swal(
                            "Cancelled",
                            "Canceled Note",
                            "error"
                        )
                    }
                })
        }

    }, 3000);
</script>

<style>
    h2 {
        font-size: 19px;
        font-weight: 100;
    }
</style>