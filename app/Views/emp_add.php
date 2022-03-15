<?= $this->extend('/templates/012_1st'); ?>
<?= $this->section('page-content'); ?>


	<form action="/emp/savecreate_one" method="post">
		<?= csrf_field(); ?>
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Form Add Data Employee</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="emp_name" class="col-sm-2 col-form-label">Emp Name</label>
					<input type="text" class="form-control" id="emp_name" name="emp_name" placeholder="Enter Emp Name" autofocus value="<?= old('emp_name'); ?>">
				</div>

				<div class="form-group">
					<label for="emp_bday" class="col-sm-2 col-form-label">Birth Day</label>
					<div class="input-group date" id="dt_emp_bday" data-target-input="nearest">
						<input type="text" class="form-control datetimepicker-input" data-target="#dt_emp_bday" id="emp_bday" name="emp_bday" placeholder="Enter Birth Day" value="<?= old('emp_bday'); ?>">
						<div class="input-group-append" data-target="#dt_emp_bday" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="sex_id" class="col-sm-2 col-form-label">Sex ID</label>
					<select name="sex_id" class="form-control sex_id">
						<option value="">-Select-</option>
						<?php foreach($sex as $row):?>
						<option value="<?= $row['sex_id'];?>"><?= $row['sex_desc'];?></option>
						<?php endforeach;?>
					</select>
				</div>

				<div class="form-group">
					<label for="edu_code" class="col-sm-2 col-form-label">Edu Code</label>
					<select name="edu_code" class="form-control edu_code">
						<option value="">-Select-</option>
						<?php foreach($edu as $row):?>
						<option value="<?= $row['edu_code'];?>"><?= $row['edu_desc'];?></option>
						<?php endforeach;?>
					</select>
				</div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
		<button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
	</form>
	<script>
		$('#dt_emp_bday').datetimepicker({
		    format: 'YYYY-MM-DD'
		});
	</script>



<?= $this->endSection(); ?>
