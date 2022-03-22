<!--

	// File name   : home_index.php
	// Last Edited : 2022-03-22


	// MCG - Massive CRUD Generator for CI4-AdminLT3-MySQL ver. Mar 2022-Free Version

	// Private message at Telegram        : @yudhi_irawan
	// Private activity feeds at Instagram: @iam.yudhi_irawan

	// Download Massive CRUD Generator on telegram and github link
	// MCG Application: https://t.me/MCGFreeVersion
	// Documentation  : https://yudhi-irawan.github.io/mcg-documentation
	// Testing        : https://github.com/yudhi-irawan/ci4mcg_testing
	// Template       : https://github.com/yudhi-irawan/mcg-templates-ci4-lt3

	// Donation and Support link
	// Ko-fi   : https://ko-fi.com/MassiveCrudGenerator
	// Trakteer: https://trakteer.id/MassiveCrudGenerator

	// Please follow us for information about new releases

-->

<?= $this->extend('/templates/012_1st'); ?>
<?= $this->section('page-content'); ?>

<h1 class="mt-2"><?= $title; ?></h1>
<div class="row">
	<div class="col-lg-3 col-6">
		<div class="small-box bg-info">
			<div class="inner">
				<h3><?= $count_sex; ?></h3>
				<p><h4>Tabel Sex</h4></p>
	 		</div>
	 		<div class="icon">
	 			<i class="ion ion-person-add"></i>
	 		</div>
	 		<a href="/sex" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-success">
			<div class="inner">
				<h3><?= $count_edu; ?></h3>
				<p><h4>Table Education Level</h4></p>
	 		</div>
	 		<div class="icon">
	 			<i class="ion ion-person-add"></i>
	 		</div>
	 		<a href="/edu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-warning">
			<div class="inner">
				<h3><?= $count_emp; ?></h3>
				<p><h4>Employee</h4></p>
	 		</div>
	 		<div class="icon">
	 			<i class="ion ion-person-add"></i>
	 		</div>
	 		<a href="/emp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
