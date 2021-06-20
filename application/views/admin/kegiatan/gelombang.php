<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Kegiatan</h1>
<a href="<?php echo base_url('admin/Kegiatan/create_gelombang')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Gelombang</a>
</div>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="row">
			<div class=" py-3 col-6 text-center bg-light">
				<a href="<?= base_url('admin/Kegiatan')?>">
					<h6 class="m-0 font-weight-bold text-primary">DataTables Kegiatan</h6>
				</a>
			</div>
			<div class=" py-3 col-6 text-center">
				<h6 class="m-0 font-weight-bold text-primary">DataTables Gelombang</h6>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_kegiatan</th>
							<th>judul_kegiatan</th>
							<th>id_gelombang</th>
							<th>ketua</th>
							<th>sekertaris</th>
							<th>bendahara</th>
							<th>tanggal_kegiatan</th>
							<th>waktu_mulai</th>
							<th>waktu_selesai</th>
							<th>gender</th>
							<th>link</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($kegiatan->result_array() as $key => $header) : ?>
							
							<tr>
							<td><?=$header['id_kegiatan']?></td>
							<td><?=$header['judul_kegiatan']?></td>
							<td><?=$header['id_gelombang']?></td>
							<td><?=$header['ketua']?></td>
							<td><?=$header['sekertaris']?></td>
							<td><?=$header['bendahara']?></td>
							<td><?=$header['tanggal_kegiatan']?></td>
							<td><?=$header['waktu_mulai']?></td>
							<td><?=$header['waktu_selesai']?></td>
							<td><?=$header['gender']?></td>
							<td><?=$header['link']?></td>
							<td><a href="<?=base_url('admin/Kegiatan/update_gelombang')?>? id_gelombang=<?=$header['id_gelombang']?>" class='badge badge-pill badge-warning'><i class="fa fa-pen">Edit</i></a>
							<td><a href="<?=base_url('admin/Kegiatan/delete_gelombang')?>? id_gelombang=<?=$header['id_gelombang']?>" class='badge badge-pill badge-danger'><i class="fa fa-trash">Delete</i></a>
							</tr>

						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
