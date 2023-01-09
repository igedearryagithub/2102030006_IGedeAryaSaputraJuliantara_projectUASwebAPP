<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/jadwals/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/jadwals/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="kode">Kode Matakuliah*</label>
								<input class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>"
								 type="text" name="kode" min="0" placeholder="Jadwal kode" />
								<div class="invalid-feedback">
									<?php echo form_error('kode') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Matakuliah*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Jadwal name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruangan">Ruangan*</label>
								<input class="form-control <?php echo form_error('ruangan') ? 'is-invalid':'' ?>"
								 type="text" name="ruangan" min="0" placeholder="Jadwal ruangan" />
								<div class="invalid-feedback">
									<?php echo form_error('ruangan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="waktu">Waktu*</label>
								<input class="form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
								 type="text" name="waktu" min="0" placeholder="Jadwal waktu" />
								<div class="invalid-feedback">
									<?php echo form_error('waktu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="dosen">Dosen*</label>
								<textarea class="form-control <?php echo form_error('dosen') ? 'is-invalid':'' ?>"
								 name="dosen" placeholder="Jadwal dosen"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('dosen') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
