<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = Yii::t('app', 'Actualizar Post: {name}', [
    'name' => $model->titulo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="inner-page-header section-padding style-dark">
	<div class="container">
		<div class="page-title-inner text-center clearfix">
			<div class="heading-wrapper">
				<h1 class="h1">Blog & Noticias</h1>
				<div class="lead-text">
					<p>Haga crecer su negocio con 🚀APOLOTEC</p>
				</div>
			</div><!-- End Heading -->
			<ul class="st-breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="post">Blog</a></li>
			</ul><!-- End Breadcrumb -->
		</div><!-- Page Title Inner -->
	</div>
</div>
<br><br>
<div  class="container post-update ">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
