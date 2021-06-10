<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Cabang</h1>
<a href="<?php echo base_url('admin/Cabang/create')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-plus fa-sm text-white-50"></i> Tambah Cabang</a>
</div>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Cabang</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_cabang</th>
							<th>id_perwakilan</th>
							<th>nama_cabang</th>
							<th>ketua</th>
							<th>sekertaris</th>
							<th>bendahara</th>
							<th>alamat_cabang</th>
							<th>cp_cabang</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($cabang->result_array() as $key => $header) : ?>
							<tr>
							<td><?=$header['id_cabang']?></td>
							<td><?=$header['id_perwakilan']?></td>
							<td><?=$header['nama_cabang']?></td>
							<td><?=$header['ketua_cabang']?></td>
							<td><?=$header['sekertaris_cabang']?></td>
							<td><?=$header['bendahara_cabang']?></td>
							<td><?=$header['alamat_cabang']?></td>
							<td><?=$header['cp_cabang']?></td>
							<td><a href="<?=base_url('admin/Cabang/update')?>? id_cabang=<?=$header['id_cabang']?>" class='fa fa-pen text-warning'></a>
							<td><a href="<?=site_url('admin/Cabang/delete')?>? id_cabang=<?=$header['id_cabang']?>" class='fa fa-trash text-danger'></a>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
