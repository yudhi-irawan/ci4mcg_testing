<!--
	// Modul Description : Table Education Level
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : edu_index.php
	// Last Edited : 2022-03-15


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


	<h1 class="mt-2">Table Education Level</h1>
	<a href="/edu/create_one" class="btn btn-success mt-3" data-toggle="tooltip" data-placement="bottom" title="add data"><i class="glyphicon glyphicon-plus"></i> Add </a>
	<a href="/edu/generatepdf" class="btn btn-info mt-3" data-toggle="tooltip" data-placement="bottom" title=""> Download PDF </a>
	<?php if (session()->getFlashdata('pesan')) : ?>
	    <div class="alert alert-success" role="alert">
	        <?= session()->getFlashdata('pesan'); ?>
	    </div>
	<?php endif; ?>
	<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Action</th>
				<th scope="col">Edu ID</th>
				<th scope="col">Edu Code</th>
				<th scope="col">Edu Description</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($edu as $k) : ?>
				<tr>
					<th scope="row"><?= $i++; ?></th>
					<td>
						<a href="/edu/edit_one/<?= $k['edu_id']; ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="#" data-href="<?= base_url('edu/delete_one/'.$k['edu_id']) ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="delete"><i class="glyphicon glyphicon-remove"></i></a>
					</td>
					<td><?= $k['edu_id']; ?></td>
					<td><?= $k['edu_code']; ?></td>
					<td><?= $k['edu_desc']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="h2">Are you sure?</h2>
					<p>The data will be deleted and lost forever</p>
				</div>
				<div class="modal-footer">
					<a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		function confirmToDelete(el){
			$("#delete-button").attr("href", el.dataset.href);
			$("#confirm-dialog").modal("show");
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var t = $('#table').DataTable({
					"responsive": true,
					"dom": 'frtlip',
	                "processing": true,
	                //"serverSide": true,
	                "order": [],
	                "pageLength": 10,

					"columnDefs":
					[
						{targets: [0], orderable: false, width: "10px", sClass: "text-center"},
						{targets: [1], orderable: false, width: "100px", sClass: "text-center"},
						{targets: [2], visible: false},
					]
			});
		});

	</script>



<?= $this->endSection(); ?>
