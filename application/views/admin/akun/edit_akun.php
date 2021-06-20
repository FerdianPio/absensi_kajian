<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Akun</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Akun/update')?>" method="post">
			<div class="form-group">
				<label for="id_akun">ID Akun</label>
				<input type="text" name="id_akun" id="id_akun" class="form-control" value="<?=$id_akun?>" readonly='readonly'>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" id="password" class="form-control">
			</div>
			<input type="submit" value="Submit" class="btn btn-primary shadow-sm">
		</form>


</div>
<!-- /.container-fluid -->
