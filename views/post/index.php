<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Blog');
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
<!-- Page Header -->
<div class="section-padding">
	<div class="container">
		<div class="row clearfix">
			<div class="news-grid column-3">
				<?php

				$posts = $dataProvider->getModels();

				foreach ($posts as $p) {
				?>
					<div class="article-block category-software">
						<div class="inner-box">
							<div class="article-img">
								<a href="detalle?id=<?php echo $p->id; ?>&t=<?php echo strtr($p->titulo, " ", "-"); ?>">
									<img src="web/uploads/<?php echo $p->foto; ?>" alt="">
								</a>
							</div>
							<div class="article-details">
								<div class="post-meta">
									<span class="entry-meta entry-category">
										<a href="#"><?php echo $p->Usuario; ?></a>
									</span>
									<span class="entry-meta entry-date">
										<a href="#"><?php echo $p->fecha; ?></a>
									</span>
								</div>
								<h2 class="entry-title"><a href="detalle?id=<?php echo $p->id; ?>&t=<?php echo strtr($p->titulo, " ", "-"); ?>"><?php echo $p->titulo; ?></a></h2>
							</div>
						</div>
					</div><!-- End Article -->
				<?php
				} ?>

			</div><!-- End News grid -->


		</div><!-- End Row -->
	</div>
</div><!-- About Section -->

