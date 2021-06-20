<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Akun</h1>
<a href="<?php echo base_url('admin/Akun/create')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-plus fa-sm text-white-50"></i> Daftarkan Akun</a>
</div>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Akun</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_akun</th>
							<th>level_akses</th>
							<th>username</th>
							<th>password</th>
							<th colspan='2'>action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($akun->result_array() as $key => $header) : ?>
							<tr>
							<td><?=$header['id_akun']?></td>
							<td><?=$header['tingkatan']?></td>
							<td><?=$header['username']?></td>
							<td><?=$header['password']?></td>
							<td><a href="<?=base_url('admin/Akun/update')?>? id_akun=<?=$header['id_akun']?>" class='fa fa-pen text-warning'></a>
							<td><a href="<?=site_url('admin/Akun/delete')?>? id_akun=<?=$header['id_akun']?>" class='fa fa-trash text-danger'></a>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
