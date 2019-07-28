<?php
/**
 * _portfolio.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\helpers\Html;
?>
<section class="no-padding" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter popup-gallery">
			<div class="col-lg-4 col-sm-6">
				<a href="<?= Yii::$app->request->baseUrl ?>/img/my_sekyu.jpg" class="portfolio-box">
					<img src="<?= Yii::$app->request->baseUrl ?>/img/my_sekyu.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								My.Sekyu
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="<?= $assetDir ?>/img/portfolio/fullsize/2.jpg" class="portfolio-box">
					<img src="<?= $assetDir ?>/img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								My.Clinic
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="<?= Yii::$app->request->baseUrl ?>/img/kursonada.jpg" class="portfolio-box">
					<img src="<?= Yii::$app->request->baseUrl ?>/img/kursonada.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								Kursonada
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="<?= Yii::$app->request->baseUrl ?>/img/hq.jpg" class="portfolio-box">
					<img src="<?= Yii::$app->request->baseUrl ?>/img/hq.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								HistoQuiz
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="<?= Yii::$app->request->baseUrl ?>/img/ergastirio.jpg" class="portfolio-box">
					<img src="<?= Yii::$app->request->baseUrl ?>/img/ergastirio.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								Ergastírio
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="<?= Yii::$app->request->baseUrl ?>/img/pfs.jpg" class="portfolio-box">
					<img src="<?= Yii::$app->request->baseUrl ?>/img/pfs.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<!-- <div class="project-category text-faded">
								Category
							</div> -->
							<div class="project-name">
								Page Fault Simulation
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


