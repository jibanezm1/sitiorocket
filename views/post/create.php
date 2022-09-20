<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = Yii::t('app', 'Crear Post');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="content">

    <div class="inner-page-header section-padding style-dark">
        <div class="container">
            <div class="page-title-inner text-center clearfix">
                <div class="heading-wrapper">
                    <h1 class="h1">Blog & Noticias</h1>
                    <div class="lead-text">
                        <p>Crear post</p>
                    </div>
                </div><!-- End Heading -->
                <ul class="st-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="post">Blog</a></li>
                </ul><!-- End Breadcrumb -->
            </div><!-- Page Title Inner -->
        </div>
    </div>
    <div class="content-wrap container">

        <div class="container clearfix">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
    </div>