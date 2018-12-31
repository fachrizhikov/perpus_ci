<selection class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-tittle">Daftar Anggota</h3>
				</div>

				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>Id Anggota</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No_telpon</th>
									<th>Alamat</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($show as $key => $data) {
								?>
								<tr>
									<td><?=$key+1;?></td>
									<td><?=$data->nama_anggota;?></td>
									<td><?=$data->gender;?></td>
									<td><?=$data->no_telp;?></td>
									<td><?=$data->alamat;?></td>
									<td><?=$data->email;?></td>
									<td>
										<a href="#" class="btn btn-xs btn-primary">detail</a>
										<a href="<?=site_url('anggota/edit/' .$data->id_anggota);?>" class="btn btn-xs btn-warning">Edit</a>
										<a href="<?=site_url('anggota/delete/' .$data->id_anggota);?>" class="btn btn-xs btn-danger" role="button" onclick="return confirm ('Anda yakin akan Menghapus <?=$data->nama_anggota;?> dari Daftar Anggota?');">Hapus</a>
									</td>
								</tr>
								<?php
							}
							?>
							</tbody>
							<tfoot>
								<tr>
									<th>Id Anggota</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No_telpon</th>
									<th>Alamat</th>
									<th>Email</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</selection>