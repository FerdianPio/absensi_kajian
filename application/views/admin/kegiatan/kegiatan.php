<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Kegiatan</h1>
<a href="<?php echo base_url('admin/Kegiatan/create_kegiatan')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-plus fa-sm text-white-50"></i> Buat Kegiatan</a>
</div>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="row">
			<div class=" py-3 col-6 text-center">
				<h6 class="m-0 font-weight-bold text-primary">DataTables Kegiatan</h6>
			</div>
			<div class=" py-3 col-6 text-center bg-light">
				<a href="<?= base_url('admin/Kegiatan/gelombang')?>">
					<h6 class="m-0 font-weight-bold text-primary">DataTables Gelombang</h6>
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_kegiatan</th>
							<th>judul_kegiatan</th>
							<th>penyelenggara</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($kegiatan->result_array() as $key => $header) : ?>
							
							<tr>
							<td><?=$header['id_kegiatan']?></td>
							<td><?=$header['judul_kegiatan']?></td>
							<td></td>
							<td><a href="<?=base_url('admin/Kegiatan/update_kegiatan')?>? id_kegiatan=<?=$header['id_kegiatan']?>" class='badge badge-pill badge-warning'><i class="fa fa-pen">Edit</i></a>
							<td><a href="<?=base_url('admin/Kegiatan/delete_kegiatan')?>? id_kegiatan=<?=$header['id_kegiatan']?>" class='badge badge-pill badge-danger'><i class="fa fa-trash">Delete</i></a>
							</tr>

						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
