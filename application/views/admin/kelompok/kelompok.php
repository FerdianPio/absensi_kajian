<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Kelompok</h1>
<a href="<?php echo base_url('admin/Kelompok/create')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-plus fa-sm text-white-50"></i> Tambah Kelompok</a>
</div>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Kelompok</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_kelompok</th>
							<th>id_cabang</th>
							<th>nama_kelompok</th>
							<th>ketua</th>
							<th>sekertaris</th>
							<th>bendahara</th>
							<th>alamat_kelompok</th>
							<th>cp_kelompok</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($kelompok->result_array() as $key => $header) : ?>
							<tr>
							<td><?=$header['id_kelompok']?></td>
							<td><?=$header['id_cabang']?></td>
							<td><?=$header['nama_kelompok']?></td>
							<td><?=$header['ketua_kelompok']?></td>
							<td><?=$header['sekertaris_kelompok']?></td>
							<td><?=$header['bendahara_kelompok']?></td>
							<td><?=$header['alamat_kelompok']?></td>
							<td><?=$header['cp_kelompok']?></td>
							<td><a href="<?=base_url('admin/Kelompok/update')?>? id_kelompok=<?=$header['id_kelompok']?>" class='badge badge-pill badge-warning'><i class="fa fa-pen">Edit</i></a>
							<td><a href="<?=site_url('admin/Kelompok/delete')?>? id_kelompok=<?=$header['id_kelompok']?>" class='badge badge-pill badge-danger'><i class="fa fa-trash">Delete</i></a>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
