<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				
				<div class="card mb-3">
					<div class="card-header">
						
						<a href="<?php echo site_url('puskesmas/ibuhamil/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('puskesmas/ibuhamil/edit_save/'.$ibuhamil->id_reg) ?>" method="post">
							<input type="hidden" name="id_reg" value="<?= $ibuhamil->id_reg;?>">

							<!-- <div class="form-group">
								<label for="id_reg">ID Pasien *</label>
								<input class="form-control <?php echo form_error('id_reg') ? 'is-invalid':'' ?>"
								 type="text" name="id_reg" placeholder="ID Pasien" value="<?= $ibuhamil->id_reg; ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('id_reg') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="nama">Nama *</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Lengkap" value="<?= $ibuhamil->nama; ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="pekerjaan">Pekerjaan *</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?= $ibuhamil->pekerjaan; ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div> -->
								<div class="input-group mb-3">
                                	<div class="input-group-prepend">
                                   	 	<label class="input-group-text" for="pekerjaan">Pekerjaan Pasien</label>
                                	</div>
                                	<select class="custom-select" id="pekerjaan" name="pekerjaan">
                                  	  <option selected>Pilih Pekerjaan</option>
                                   	  <option value="IRT" <?= $ibuhamil->pekerjaan=='IRT'?'selected':''?>>IRT(Ibu Rumah Tangga)</option>
                                  	  <option value="PNS" <?= $ibuhamil->pekerjaan=='PNS'?'selected':''?>>PNS</option>
                                      <option value="Swasta" <?= $ibuhamil->pekerjaan=='Swasta'?'selected':''?>>Swasta</option>
                                	</select>
                           	 </div>

							<!-- <div class="form-group">
								<label for="gol_dar">Golongan Darah Pasien *</label>
								<input class="form-control <?php echo form_error('gol_dar') ? 'is-invalid':'' ?>"
								 type="text" name="gol_dar" placeholder="Golongan Darah Pasien" value="<?= $ibuhamil->gol_dar; ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('gol_dar') ?>
								</div>
							</div> -->

							  	<div class="input-group mb-3">
                                	<div class="input-group-prepend">
                                   	 <label class="input-group-text" for="gol_dar">Gologan Darah</label>
                                	</div>
                                	<select class="custom-select" id="gol_dar" name="gol_dar">
                                  	  <option selected>Pilih golongan darah</option>
                                   	  <option value="A" <?= $ibuhamil->gol_dar=='A'?'selected':''?>>A</option>
                                  	  <option value="B" <?= $ibuhamil->gol_dar=='B'?'selected':''?>>B</option>
                                      <option value="AB" <?= $ibuhamil->gol_dar=='AB'?'selected':''?>>AB</option>
                                      <option value="O" <?= $ibuhamil->gol_dar=='O'?'selected':''?>>O</option>
                                	</select>
                            	</div>

							<div class="form-group">
								<label for="nama_suami">Nama Suami *</label>
								<input class="form-control <?php echo form_error('nama_suami') ? 'is-invalid':'' ?>"
								 type="text" name="nama_suami" placeholder="Nama Suami" value="<?= $ibuhamil->nama_suami; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('nama_suami') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="pekerjaan_suami">Pekerjaan Suami *</label>
								<input class="form-control <?php echo form_error('pekerjaan_suami') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan_suami" placeholder="Pekerjaan Suami" value="<?= $ibuhamil->pekerjaan_suami; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan_suami') ?>
								</div>
							</div> -->

							<div class="input-group mb-3">
                                	<div class="input-group-prepend">
                                   	 	<label class="input-group-text" for="pekerjaan_suami">Pekerjaan Suami Pasien</label>
                                	</div>
                                	<select class="custom-select" id="pekerjaan_suami" name="pekerjaan_suami">
                                  	  <option selected>Pilih Pekerjaan</option>
                                  	  <option value="PNS" <?= $ibuhamil->pekerjaan_suami=='PNS'?'selected':''?>>PNS</option>
                                      <option value="Swasta" <?= $ibuhamil->pekerjaan_suami=='Swasta'?'selected':''?>>Swasta</option>
                                	</select>
                           	 </div>

							<div class="form-group">
								<label for="umur">Umur Pasien*</label>
								<input class="form-control <?php echo form_error('umur') ? 'is-invalid':'' ?>"
								 type="number" name="umur" placeholder="Umur Pasien" value="<?= $ibuhamil->umur; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('umur') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat *</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" name="alamat" placeholder="Alamat" rows="3"><?= $ibuhamil->alamat; ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="input-group mb-3">
                                	<div class="input-group-prepend">
                                   	 <label class="input-group-text" for="kelurahan">Kelurahan</label>
                                	</div>
                                	<select class="custom-select" id="kelurahan" name="kelurahan">
                                  	  <option selected>Pilih Kelurahan Alamat</option>
                                   	  <option value="27 Ilir" <?= $ibuhamil->kelurahan=='27 Ilir'?'selected':''?>>27 Ilir</option>
                                  	  <option value="28 Ilir" <?= $ibuhamil->kelurahan=='28 Ilir'?'selected':''?>>28 Ilir</option>
                                      <option value="29 Ilir" <?= $ibuhamil->kelurahan=='29 Ilir'?'selected':''?>>29 Ilir</option>
                                      <option value="30 Ilir" <?= $ibuhamil->kelurahan=='30 Ilir'?'selected':''?>>30 Ilir</option>
									  <option value="32 Ilir" <?= $ibuhamil->kelurahan=='32 Ilir'?'selected':''?>>32 Ilir</option>
                                      <option value="35 Ilir" <?= $ibuhamil->kelurahan=='35 Ilir'?'selected':''?>>35 Ilir</option>
                                      <option value="Kemang Manis" <?= $ibuhamil->kelurahan=='Kemang Manis'?'selected':''?>>Kemang Manis</option>
                                	</select>
                            </div>
							
							<div class="form-group">
								<label for="notelp">No Telepon *</label>
								<input class="form-control <?php echo form_error('notelp') ? 'is-invalid':'' ?>"
								 type="text" name="notelp" placeholder="No Telepon" value="<?= $ibuhamil->notelp; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('notelp') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->