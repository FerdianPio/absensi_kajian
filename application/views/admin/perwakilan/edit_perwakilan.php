<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Perwakilan</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Perwakilan/update')?>" method="post">
			<div class="form-group">
				<label for="id_perwakilan">ID Perwakilan</label>
				<input type="text" name="id_perwakilan" id="id_perwakilan" class="form-control" value="<?=$id_perwakilan?>" readonly='readonly'>
			</div>
			<div class="form-group">
				<label for="nama_perwakilan">Nama Perwakilan</label>
				<input type="text" name="nama_perwakilan" id="nama_perwakilan" class="form-control">
			</div>
			<input type="hidden" name="tingkat" value="perwakilan">
			<div class="form-group">
				<label for="ketua_perwakilan">Ketua Perwakilan</label>
				<input type="text" name="ketua_perwakilan" id="ketua_perwakilan" class="form-control">
			</div>
			<div class="form-group">
				<label for="sekertaris_perwakilan">Sekertaris Perwakilan</label>
				<input type="text" name="sekertaris_perwakilan" id="sekertaris_perwakilan" class="form-control">
			</div>
			<div class="form-group">
				<label for="bendahara_perwakilan">Bendahara Perwakilan</label>
				<input type="text" name="bendahara_perwakilan" id="bendahara_perwakilan" class="form-control">
			</div>
			<div class="form-group">
				<label for="cp_perwakilan">CP Perwakilan</label>
				<input type="text" name="cp_perwakilan" id="cp_perwakilan" class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat_perwakilan">Alamat Perwakilan</label>
				<textarea name="alamat_perwakilan" id="alamat_perwakilan" class="form-control" cols="30" rows="10"></textarea>
			</div>

			<input type="submit" value="Submit" class="btn btn-primary shadow-sm">
		</form>


</div>
<!-- /.container-fluid -->
