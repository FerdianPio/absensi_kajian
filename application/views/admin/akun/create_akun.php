<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Daftarkan Akun</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Akun/create')?>" method="post">
			<div class="form-group">
				<label for="level_akses">Level Akses</label>
				<select name="level_akses" id="level_akses" class="form-control">
					<?php
						foreach ($akun->result_array() as $key => $value) {
							if($value['level_akses']>$this->session->userdata('level'))
							{
								echo "<option value=".$value['level_akses'].">".$value['tingkatan']."</option>";
							}
						}
					?>
				</select>
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
