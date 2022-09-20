<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NGQ5X5BZP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7NGQ5X5BZP');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5H6WRPM');
    </script>
    <!-- End Google Tag Manager -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SOMOS LA SOLUCIÓN COMPLETA A LOS PROCESOS ADMINISTRATIVOS DE TODO TIPO DE EMPRESAS.">
    <meta property="og:description" content="SOMOS LA SOLUCIÓN COMPLETA A LOS PROCESOS ADMINISTRATIVOS DE TODO TIPO DE EMPRESAS.">
    <meta property="og:title" content="SOLUCIONES TECNOLOGICAS
Haga crecer su negocio con APOLOTEC">
    <meta name="twitter:description" content="SOMOS LA SOLUCIÓN COMPLETA A LOS PROCESOS ADMINISTRATIVOS DE TODO TIPO DE EMPRESAS.">
    <meta name="twitter:title" content="SOLUCIONES TECNOLOGICAS
Haga crecer su negocio con APOLOTEC">
    <meta property="og:url" content="https://apolotec.cl">
    <meta name="twitter:card" content="summary">
    <meta http-equiv="content-language" content="es">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode("Apolotec") ?></title>
    <?php $this->head() ?>
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Slick Slider -->
    <link href="css/slick.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/venom-button.min.css" rel="stylesheet" type="text/css" />



    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Main css File -->
    <script src="js/jquery.min.js"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-default" />
    <link href="css/rtl-style.css" rel="stylesheet" type="text/css" id="rtl-theme-default" disabled="disabled" />
    <link href="css/colors/default-color.css" rel="stylesheet" type="text/css" id="theme-color" />
</head>

<body class="dc-six">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H6WRPM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php $this->beginBody() ?>

    <div class="box-wrapper">
        <div id="preloader">
            <div id="status">
                <div class="d-loader">
                    <img src="images/d-code-logo-dark.png" alt="DCode">
                </div>
            </div>
        </div>
        <header id="master-head" class="navbar menu-absolute menu-center menu-light">
            <div class="container-fluid">
                <div id="main-logo" class="logo-container">
                    <a class="logo" href="/">
                        <img src="images/d-code-logo-dark.png" class="logo-dark" alt="DCode">
                        <img src="images/d-code-logo-light.png" class="logo-light" alt="DCode">
                    </a>
                </div>
                <div class="menu-toggle-btn">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="burger-lines">
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
                <div id="navigation" class="nav navbar-nav navbar-main">
                    <ul id="main-menu" class="menu-primary">
                        <li class="menu-item  active">
                            <a href="/">Inicio</a>

                        </li>
                        <li class="menu-item"><a href="<?php echo Url::to(['/rocketsw']);  ?>">🚀 Rocket Software</a></li>
                        <li class="menu-item"><a href="#">🔭 Discovery Software (Proximamente)</a></li>
                        <li class="menu-item"><a href="<?php echo Url::to(['/precios']);  ?>">Precios</a></li>

                        
                        <li class="menu-item ">
                            <a href="<?php echo Url::to(['/post']);  ?>">Blog & Noticias</a>


                        </li>


                    </ul>
                </div>
                <div class="navbar-right">
                    <div class="menu-button">
                        <a href="<?php echo Url::to(['/landing']);  ?>" target="_blank">
                            <div class="btn btn-outline-primary btn-light">Solicitar Demo</div>
                        </a>
                    </div>

                </div>
            </div>
        </header>

        <div id="main-wrapper" class="page-wrapper">
            <?= Alert::widget() ?>
            <?= $content ?>

        </div>

        <footer class="site-footer footer-theme-three">

            <div class="container">
                <div class="main-footer style-dark">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget">
                                <div class="text-widget">


                                    <div class="about-info">
                                        <div class="image-wrapper">
                                            <img src="images/d-code-logo-light.png" alt="" />
                                        </div>
                                    </div>


                                    <div class="social-media-links">
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/apolotecsoftware"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/company/apolotec"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/apolo.tec"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End Widget -->
                        </div><!-- End Col -->
                    </div><!-- End Row -->
                </div>
                <div class="copyright-bar style-dark">
                    <div class="copyright-text text-center">
                        © Copyright Apolotec 2022. Desarrollado <i class="fas fa-heart"></i> por <a href="https://ingenioso.cl" target="_blank"><strong>Ingenioso SPA.</strong></a>.
                    </div>
                </div>
            </div>
        </footer>


        <div id="myButton" style="    z-index: 999!important;"></div>
    </div>

    <script src="js/jquery-migrate.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/venom-button.min.js"></script>



    <!-- WOW Animation -->
    <script src="js/wow.min.js"></script>
    <!-- Slick Slider -->
    <script src="js/slick.min.js"></script>
    <!-- Main Js -->
    <script src="js/dcode.js"></script>
    <script type="text/javascript">
        $('#myButton').venomButton({
            phone: '+56 9 5414 3894',
            popupMessage: 'Hola! Andas buscando mejorar la eficiencia y productividad de tu negocio?',
            message: "Me gustaría saber sobre el ERP para mejorar el control y organización de mi negocio",
            showPopup: true,
            position: "right",
            linkButton: false,
            showOnIE: false,
            headerTitle: 'Bienvenido!',
            headerColor: '#25d366',
            backgroundColor: '#25d366',
            buttonImage: '<img src="/web/whatsapp.svg" />'
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".venom-button-popup").addClass("active");

        });

        // eventos click de las etiquetas <a>
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>