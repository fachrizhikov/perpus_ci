<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-dagger">
				<div class="box box-header">
					<h3 class="box-title">Edit Data Anggota</h3>
				</div>

				<div class="box-body">
					<form action="<?=site_url('anggota/update');?>" method="post" accept="UTF-8">
						<div class="box-body">

						<input type="hidden" name="id_anggota" value="<?=$show->id_anggota;?>">

								<div class="box-body">
									<form action="<?=site_url('anggota/update');?>" method="post" accept="UTF-8">
										<div class="box-body">

							<div class="form-group">
								<label>Nama Anggota</label>
								<input type="text" name="nama_anggota" class="form-control" value="<?=$show->nama_anggota;?>" placeholder="Masukkan Nama Anggota" required="required">
							</div>

							<div class="form-group">
								
								<label>Gender</label>
								<select name="gender" size="1" class="form-control">
								<?php	
									if ($show->gender=="Laki-Laki")
									{
									echo '<option value="Laki-Laki" selected>Laki-Laki</option>
										  <option value="Perempuan">Perempuan</option>';
									}
									else
									{
									echo '<option value="Laki-Laki" >Laki-Laki</option>
										  <option value="Perempuan"selected>Perempuan</option>';	
									}
								?>
								
								</select>
							</div>
							<div class="form-group">
								<label>No Telpon</label>
								<input type="text" name="no_telp" class="form-control" value="<?=$show->no_telp;?>" placeholder="Masukkan Nomor Telpon" required="required">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?=$show->alamat;?>" placeholder="Masukkan Alamat" required="required">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" value="<?=$show->email;?>" placeholder="Masukkan Email" required="required">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" id="pswd" class="form-control" value="<?=$show->password;?>" placeholder="Masukkan Password" required="required">
							</div>
						<div class="box-footer">
							<button type="button" class="btn btn-default">
								<i class="fa fa-arrow-circle-left"></i>
								Batal
							</button>
							<button type="submit" class="btn btn-primary pull-right">
								<i class="fa fa-send"></i>
								Update
							</button> 
						</div>
					</form>
				</div>
			</div>		
		</div>
	</div>
</section>