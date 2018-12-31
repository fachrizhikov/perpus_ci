<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box box-header">
					<h3 class="box-title">Edit Buku</h3>
				</div>
			
				<div class="box-body">
					<form action="<?=site_url('buku/update');?>" method="post" accept-charset="UTF-8">
						<div class="box-body">

						<input type="hidden" name="id_buku" value="<?=$show->id_buku;?>">	

							<div class="form-group">
								<label>Judul Buku</label>
								<input type="text" name="judul_buku" class="form-control" value="<?=$show->judul_buku;?>" placeholder="Masukkan judul buku" required="required">
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="id_kategori" size="1" class="form-control">
								<?php	
								foreach ($show_kategori as $key => $data_kategori) {
									echo '<option value="'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
								}
								?>
						<!--			<option value="1">Fiksi</option>
									<option value="2">Ilmiah</option>
									<option value="3">Lainnya</option> -->
								</select>
							</div>
							<div class="form-group">
								<label>Pengarang</label>
								<input type="text" name="pengarang" class="form-control" value="<?=$show->pengarang;?>" placeholder="Masukkan nama pengarang" required="required">
							<div>
							<div class="form-group">
								<label>Tahun Terbit</label>
							<!--	<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="thn_terbit" value=""> -->
								<input type="number" class="form-control" name="thn_terbit" min="0" value="<?=$show->thn_terbit;?>">	
								</div>
							
							</div>
						    <div class="form-group">
								<label for="exampleInputtext1">Penerbit</label>
								<input type="text" name="penerbit" class="form-control" id="exampleInputtext1" placeholder="Penerbit" value="<?=$show->penerbit;?>" required="required">
							</div>
							<div class="form-group">
								<label>ISBN</label>
								<input type="text" name="isbn" class="form-control" id="exampleInputtext1" placeholder="ISBN" value="<?=$show->isbn;?>" required="required">
							</div>
							<div class="form-group">
								<label>Jumlah</label>
								<input type="number" name="jumlah_buku" class="form-control" placeholder="0" value="<?=$show->jumlah_buku;?>" required min="0">
							</div>
							<div class="form-group">
								<label>Rak</label>
								<select name="lokasi" size="1" class="form-control">
									<option value="1">Rak 1</option>
									<option value="2">Rak 2</option>
									<option value="3">Rak 3</option>
									<option value="4">Rak 4</option>
									<option value="5">Rak 5</option>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<button type="button" class="btn btn-default">
								<i class="fa fa-arrow-circle-left"></i>
								Batal
							</button>
							<button type="submit" class="btn btn-primary pull-right">
								<i class="fa fa-send"></i>
								Tambah
							</button> 
						</div>
					</form>
				</div>
			</div>		
		</div>
	</div>
</section>