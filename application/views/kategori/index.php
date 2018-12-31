<selection class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-tittle">Daftar Kategori</h3>
				</div>

				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($show as $key => $data) {
									?>
									<tr>
										<td><?=$key+1;?></td>
										<td><?=$data->nama_kategori;?></td>
										<td>
											<a herf="#" class="btn btn-xs btn-primary">detail</a>
											<a href="<?=site_url('kategori/edit/' .$data->id_kategori);?>" class="btn btn-xs btn-warning">Edit</a>
											<a href="<?=site_url('kategori/delete/' .$data->id_kategori);?>" class="btn btn-xs btn-danger" role="button" onclick="return confirm ('Rek di hapus Moal KEHED?');">Hapus</a>
										</td>
									</tr>
									<?php
								}
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kategori</th>
									<th>Aksi</th>
								</tr>
							</tfoot>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</selection>