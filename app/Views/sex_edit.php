<?= $this->extend('/templates/012_1st'); ?>
<?= $this->section('page-content'); ?>


	<form action="/sex/saveedit_one/<?= $sex['sex_id']; ?>" method="post">
		<?= csrf_field(); ?>
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Form Edit Data Tabel Sex</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="sex_desc" class="col-sm-2 col-form-label">Sex Description</label>
					<input type="text" class="form-control <?= ($validation->hasError('sex_desc')) ? 'is-invalid' : ''; ?>" id="sex_desc" name="sex_desc" autofocus value="<?= (old('sex_desc')) ? old('sex_desc') : $sex['sex_desc'] ?>">
				    	<div class="invalid-feedback">
				        	<?= $validation->getError('sex_desc'); ?>
				    	</div>
				</div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
		<button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
	</form>



<?= $this->endSection(); ?>
