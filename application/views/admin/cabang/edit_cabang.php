<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Tambah Cabang</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Cabang/update')?>" method="post">
			<div class="form-group">
				<label for="id_cabang">ID Cabang</label>
				<input type="text" name="id_cabang" id="id_cabang" class="form-control" value="<?=$id_cabang?>" readonly='readonly'>
			</div>
			<div class="form-group">
				<label for="id_perwakilan">ID Perwakilan</label>
				<select name="id_perwakilan" id="id_perwakilan" class="form-control">
					<?php
						foreach ($perwakilan->result_array() as $key => $value) {
							echo "<option value=".$value['id_perwakilan'].">".$value['nama_perwakilan']."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_cabang">Nama Cabang</label>
				<input type="text" name="nama_cabang" id="nama_cabang" class="form-control">
			</div>
			<input type="hidden" name="tingkat" value="cabang">
			<div class="form-group">
				<label for="ketua_cabang">Ketua Cabang</label>
				<input type="text" name="ketua_cabang" id="ketua_cabang" class="form-control">
			</div>
			<div class="form-group">
				<label for="sekertaris_cabang">Sekertaris Cabang</label>
				<input type="text" name="sekertaris_cabang" id="sekertaris_cabang" class="form-control">
			</div>
			<div class="form-group">
				<label for="bendahara_cabang">Bendahara Cabang</label>
				<input type="text" name="bendahara_cabang" id="bendahara_cabang" class="form-control">
			</div>
			<div class="form-group">
				<label for="cp_cabang">CP Cabang</label>
				<input type="text" name="cp_cabang" id="cp_cabang" class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat_cabang">Alamat Cabang</label>
				<textarea name="alamat_cabang" id="alamat_cabang" class="form-control" cols="30" rows="10"></textarea>
			</div>

			<input type="submit" value="Submit" class="btn btn-primary shadow-sm">
		</form>


</div>
<!-- /.container-fluid -->
