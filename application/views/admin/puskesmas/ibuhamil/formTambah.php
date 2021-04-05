<div class="container-fluid">

    <?php $this->load->view("admin/_partials/breadcrumb.php")?>

    <div class="card mb-3">
        <div class="card-header">

            <a href="<?php echo site_url('puskesmas/ibuhamil/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">

            <form action="<?php echo site_url('puskesmas/ibuhamil/add') ?>" method="post" class="needs-validation"
                novalidate>
                <div class="form-group">
                    <label for="id_reg">ID Pasien *</label>
                    <input class="form-control <?php echo form_error('id_reg') ? 'is-invalid' : '' ?>" type="text"
                        name="id_reg" placeholder="ID Pasien"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_suami') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Pasien*</label>
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text"
                        name="nama" placeholder="Nama Pasien" required />
                    <div class="invalid-feedback">
                        Nama harus di isi
                        <?php echo form_error('nama') ?>
                    </div>
                    <div class="valid-feedback">
                        Looks Good
                    </div>
                </div>

                <!-- <div class="form-group">
								<label for="pekerjaan">Pekerjaan Pasien*</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid' : '' ?>"
								 type="text" name="pekerjaan" placeholder="Pekerjaan Pasien" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
								<div class="valid-feedback">
									Looks Good
								</div>
							</div> -->

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="pekerjaan">Pekerjaan Pasien</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="pekerjaan">
                        <option selected>Pilih Pekerjaan</option>
                        <option value="IRT">IRT(Ibu Rumah Tangga)</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>

                    </select>
                </div>

                <!-- <div class="form-group">
								<label for="gol_dar">Golongan Darah Pasien *</label>
								<input class="form-control <?php echo form_error('gol_dar') ? 'is-invalid' : '' ?>"
								 type="text" name="gol_dar" placeholder="Golongan Darah Pasien"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('gol_dar') ?>
								</div>
							</div> -->



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="gol_dar">Gologan Darah</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="gol_dar">
                        <option selected>Pilih Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="nama_suami">Nama Suami *</label>
                    <input class="form-control <?php echo form_error('nama_suami') ? 'is-invalid' : '' ?>" type="text"
                        name="nama_suami" placeholder="Nama Suami"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_suami') ?>
                    </div>
                </div>

                <!-- <div class="form-group">
								<label for="pekerjaan_suami">Pekerjaan Suami *</label>
								<input class="form-control <?php echo form_error('pekerjaan_suami') ? 'is-invalid' : '' ?>"
								 type="text" name="pekerjaan_suami" placeholder="Pekerjaan Suami"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan_suami') ?>
								</div>
							</div> -->

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="pekerjaan_suami">Pekerjaan Suami Pasien</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="pekerjaan_suami">
                        <option selected>Pilih Pekerjaan</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="umur">Umur Pasien*</label>
                    <input class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>" type="number"
                        name="umur" placeholder="Umur Pasien"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('umur') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat *</label>
                    <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="alamat"
                        name="alamat" placeholder="Alamat" rows="3"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="kelurahan">Kelurahan</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelurahan">
                        <option selected>Pilih Kelurahan Alamat</option>
                        <option value="27 Ilir">27 Ilir</option>
                        <option value="28 Ilir">28 Ilir</option>
                        <option value="29 Ilir">29 Ilir</option>
                        <option value="30 Ilir">30 Ilir</option>
                        <option value="32 Ilir">32 Ilir</option>
                        <option value="35 Ilir">35 Ilir</option>
                        <option value="Kemang Manis">Kemang Manis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="notelp">No Telephone *</label>
                    <input class="form-control <?php echo form_error('notelp') ? 'is-invalid' : '' ?>" type="text"
                        name="notelp" placeholder="Nomor Telephone"></textarea>
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