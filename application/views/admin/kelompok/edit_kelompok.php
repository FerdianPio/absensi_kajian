<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Kelompok</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Kelompok/update')?>" method="post">
			<div class="form-group">
				<label for="id_kelompok">ID Kelompok</label>
				<input type="text" name="id_kelompok" id="id_kelompok" class="form-control" value="<?=$id_kelompok?>" readonly='readonly'>
			</div>
			<div class="form-group">
				<label for="id_cabang">ID Cabang</label>
				<select name="id_cabang" id="id_cabang" class="form-control">
					<?php
						foreach ($cabang->result_array() as $key => $value) {
							echo "<option value=".$value['id_cabang'].">".$value['nama_cabang']."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_kelompok">Nama Kelompok</label>
				<input type="text" name="nama_kelompok" id="nama_kelompok" class="form-control">
			</div>
			<input type="hidden" name="tingkat" value="kelompok">
			<div class="form-group">
				<label for="ketua_kelompok">Ketua Kelompok</label>
				<input type="text" name="ketua_kelompok" id="ketua_kelompok" class="form-control">
			</div>
			<div class="form-group">
				<label for="sekertaris_kelompok">Sekertaris Kelompok</label>
				<input type="text" name="sekertaris_kelompok" id="sekertaris_kelompok" class="form-control">
			</div>
			<div class="form-group">
				<label for="bendahara_kelompok">Bendahara Kelompok</label>
				<input type="text" name="bendahara_kelompok" id="bendahara_kelompok" class="form-control">
			</div>
			<div class="form-group">
				<label for="cp_kelompok">CP Kelompok</label>
				<input type="text" name="cp_kelompok" id="cp_kelompok" class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat_kelompok">Alamat Kelompok</label>
				<textarea name="alamat_kelompok" id="alamat_kelompok" class="form-control" cols="30" rows="10"></textarea>
			</div>

			<input type="submit" value="Submit" class="btn btn-primary shadow-sm">
		</form>


</div>
<!-- /.container-fluid -->
