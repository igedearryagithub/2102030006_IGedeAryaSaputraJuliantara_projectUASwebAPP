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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/mahasiswas/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/mahasiswas/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $mahasiswa->id?>" />

							<div class="form-group">
								<label for="nim">Nim*</label>
								<input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>"
								 type="text" name="nim" placeholder="Mahasiswa nim" value="<?php echo $mahasiswa->nim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nim') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Product name" value="<?php echo $mahasiswa->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('tgl') ? 'is-invalid':'' ?>"
								 type="date" name="tgl" min="0" placeholder="Mahasiswa tanggal" value="<?php echo $mahasiswa->tgl ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="jurusan">Jurusan*</label>
								<textarea class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 name="jurusan" placeholder="Mahasiswa jurusan"><?php echo $mahasiswa->jurusan ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
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
