<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Gelombang</h1>
	</div>

	<!-- Content Row -->
		<form action="<?php echo base_url('admin/Kegiatan/update_gelombang')?>" method="POST">
				<div class="form-group">
					<label for="id_gelombang">ID Gelombang</label>
					<input type="text" name="id_gelombang" value="<?=$id_gelombang?>" class="form-control" readonly='readonly'>
				</div>
				<div class="form-group">
					<label for="id_kegiatan">ID Kegiatan</label>
					<?php foreach($id_kegiatan->result_array() as $key=>$value):?>
						<input type="text" name="id_kegiatan" id="id_kegiatan" class="form-control" value="<?=$value['id_kegiatan']?>" readonly='readonly'>
					<?php endforeach;?>
				</div>
				<div class="form-group">
					<label for="ketua">Ketua Gelombang</label>
					<input type="text" name="ketua" id="ketua" class="form-control">
				</div>
				<div class="form-group">
					<label for="sekertaris">Sekertaris Gelombang</label>
					<input type="text" name="sekertaris" id="sekertaris" class="form-control">
				</div>
				<div class="form-group">
					<label for="bendahara">Bendahara Gelombang</label>
					<input type="text" name="bendahara" id="bendahara" class="form-control">
				</div>
				<div class="form-group">
					<label for="tanggal_kegiatan">Tanggal Kegiatan</label>
					<input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control">
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label for="waktu_mulai">Waktu Mulai</label>
						<input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control">
					</div>
					<div class="form-group col-6">
						<label for="waktu_selesai">Waktu Selesai</label>
						<input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="gender">Gender</label>
					<select name="gender" id="gender" class="form-control">
						<?php foreach($gender as $key=>$value) : ?>
							<option value="<?=$value?>"><?=$value?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="link">Link</label>
					<textarea type="text" name="link" id="link" class="form-control"></textarea>
				</div>
			<input type="submit" value="Submit" class="btn btn-primary shadow-sm btn-block">
		</form>

</div>
<!-- /.container-fluid -->
