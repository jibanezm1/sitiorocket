<?php

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->titulo;

?>
<style>
    strong {
    font-family: 'Raleway', sans-serif;
    margin-bottom: 0;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #333;
}
</style>
<div >

<!-- Header
============================================= -->
<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="../images/logo-dark.png"><img
                        src="../images/logo.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="../images/logo-dark@2x.png"><img
                        src="../images/logo@2x.png" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                <li><a href="/">
                            <div>Home</div>
                        </a>

                    </li>
                    <li><a href="/">
                            <div>Nuestros Servicios</div>
                        </a>

                    </li>
                    <li><a href="/">
                            <div>Quienes Somos</div>
                        </a>

                    </li>
                    <li><a href="/">
                            <div>Clientes</div>
                        </a>

                    </li>
                    <li><a href="/">
                            <div>Blog</div>
                        </a>

                    </li>
                    <li><a href="/">
                        <div>Contactanos</div>
                    </a>

                </li>



                </ul>



                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i
                            class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value=""
                            placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark"
    style="padding: 250px 0; background-image: url('../images/about/parallax.jpg'); background-size: cover; background-position: center center;"
    data-stellar-background-ratio="0.4">

    <div class="container clearfix">

        <h1>
        🚀 <?php echo $model->titulo; ?>
        </h1>

    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-post nobottommargin">

                <!-- Single Post
                ============================================= -->
                <div class="entry clearfix">

                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title">
                        <h2><?php echo $model->titulo; ?></h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo $model->fecha; ?></li>
                        <li><a href="#"><i class="icon-user"></i> <?php echo $model->Usuario; ?></a></li>
                        <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Tendencias</a>
                        </li>
                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image bottommargin">
                        <a href="#"><img src="../uploads/<?php echo $model->foto; ?>" alt="Blog Single"></a>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content notopmargin">

                      <?php echo $model->cuerpo; ?>



                        <!-- Tag Cloud
                        ============================================= -->
                        <div class="tagcloud clearfix bottommargin">
                            <a href="#">general</a>
                            <a href="#">Inventario</a>
                            <a href="#">Tendencias/a>
                                <a href="#">Sistema de Control</a>

                        </div><!-- .tagcloud end -->

                        <div class="clear"></div>




                    </div>
                </div><!-- .entry end -->




                <div class="promo promo-dark promo-uppercase bottommargin">
                    <h3>¿Necesitas mas información sobre nuestros servicios?<br> Envianos un Whatsapp al <a href="https://api.whatsapp.com/send?phone=56954143894&text=Hola!%20Me%20gustar%C3%ADa%20mejorar%20la%20gesti%C3%B3n%20de%20mi%20empresa%20con%20sus%20servicios."><span>+569 5414 3894</span></a> o envianos un correo a
                        <a href="mailto:contacto@apolotec.cl"><span>contacto@apolotec.cl</span></a></h3>
                    <span>Nos esforzamos por brindar a nuestros clientes un soporte de primer nivel para hacer que su
                        Experiencia sea la mejor</span><br>
                </div>



                <div class="line"></div>



            </div>

        </div>

    </div>

</section><!-- #content end -->

<!-- Footer
============================================= -->
<footer id="footer" class="dark">



    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Desarrollado por Apolotec SPA.<br>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-instagram">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>





                    <a href="#" class="social-icon si-small si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>

                <div class="clear"></div>

                <i class="icon-envelope2"></i> contacto@apolotec.cl <span class="middot">&middot;</span> <i
                    class="icon-headphones"></i> +569 54143894 <span class="middot">&middot;</span> <i
                    class="icon-phone"></i>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>