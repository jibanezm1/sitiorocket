<?php

use app\models\Post;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
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
<div class="container clearfix">
    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a(Yii::t('app', 'Crear un nuevo Post'), ['../crear'], ['class' => 'btn btn-success'])?>
    </p>

    <?php Pjax::begin();?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'titulo',
        'subtitulo',
        'fecha',
        //'estado',
        'Usuario:ntext',
        //'foto:ntext',
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Post $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ],
    ],
]);?>

    <?php Pjax::end();?>
    </div>
</div>
</div>
