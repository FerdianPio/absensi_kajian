<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Buat Kegiatan</h1>
	</div>

	<!-- Content Row -->

		<form action="<?php echo base_url('admin/Kegiatan/update_kegiatan')?>? id_kegiatan=<?=$_GET['id_kegiatan']?>" method="post">
			<div class="row">
				<div class="form-group col-12"> 
					<label for="judul_kegiatan">Judul Kegiatan</label>
					<input type="text" name="judul_kegiatan" id="judul_kegiatan" class="form-control">
				</div>
				<!-- <div class="form-group col-2">
					<label for="jumlah_gelombang">Jumlah Gelombang</label>
					<input type="number" name="jumlah_gelombang" id="jumlah_gelombang" class="form-control">
				</div> -->
			</div>
			<input type="submit" value="Submit" class="btn btn-primary shadow-sm btn-block">
		</form>


</div>
<!-- /.container-fluid -->
