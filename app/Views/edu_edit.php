<?= $this->extend('/templates/012_1st'); ?>
<?= $this->section('page-content'); ?>


	<form action="/edu/saveedit_one/<?= $edu['edu_id']; ?>" method="post">
		<?= csrf_field(); ?>
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Form Edit Data Table Education Level</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="edu_code" class="col-sm-2 col-form-label">Edu Code</label>
					<input type="text" class="form-control <?= ($validation->hasError('edu_code')) ? 'is-invalid' : ''; ?>" id="edu_code" name="edu_code" autofocus value="<?= (old('edu_code')) ? old('edu_code') : $edu['edu_code'] ?>">
				    	<div class="invalid-feedback">
				        	<?= $validation->getError('edu_code'); ?>
				    	</div>
				</div>

				<div class="form-group">
					<label for="edu_desc" class="col-sm-2 col-form-label">Edu Description</label>
					<input type="text" class="form-control <?= ($validation->hasError('edu_desc')) ? 'is-invalid' : ''; ?>" id="edu_desc" name="edu_desc" value="<?= (old('edu_desc')) ? old('edu_desc') : $edu['edu_desc'] ?>">
				    	<div class="invalid-feedback">
				        	<?= $validation->getError('edu_desc'); ?>
				    	</div>
				</div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
		<button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
	</form>



<?= $this->endSection(); ?>
