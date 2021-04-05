<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Ibu Hamil</div>
                </div>
            </div>
        </div>
        <a href="<?=base_url('admin/puskesmas/ibuHamil')?>" class="btn btn-danger mb-2"><i
                class="fas fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-sm">

                <div class="main-card mb-3 card">



                    <div class="card-body">
                        <h5 class="card-title">Edit Data Ibu Hamil</h5>
                        <form action="<?=base_url('admin/puskesmas/ibuhamil_save_update/') . $ibuhamil->id_reg?>"
                            method="post">
                            <div class="card-body">

                                <input type="hidden" name="id_reg" value="<?=$ibuhamil->id_reg?>">



                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="nama">Nama Pasien*</label>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>"
                                            type="text" name="nama" placeholder="Nama Pasien"
                                            value="<?=$ibuhamil->nama;?>" required />
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
                                        <select class="custom-select" id="inputGroupSelect01" name="pekerjaan" required>
                                            <option selected>Pilih Pekerjaan</option>
                                            <option value="IRT" <?=$ibuhamil->pekerjaan == 'IRT' ? 'selected' : ''?>>
                                                IRT(Ibu Rumah
                                                Tangga)
                                            </option>
                                            <option value="PNS" <?=$ibuhamil->pekerjaan == 'PNS' ? 'selected' : ''?>>PNS
                                            </option>
                                            <option value="Swasta"
                                                <?=$ibuhamil->pekerjaan == 'Swasta' ? 'selected' : ''?>>Swasta
                                            </option>

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
                                        <select class="custom-select" id="inputGroupSelect01" name="gol_dar" required>
                                            <option selected>Pilih Golongan Darah</option>

                                            <option value="A" <?=$ibuhamil->gol_dar == 'A' ? 'selected' : ''?>>A
                                            </option>
                                            <option value="B" <?=$ibuhamil->gol_dar == 'B' ? 'selected' : ''?>>B
                                            </option>
                                            <option value="AB" <?=$ibuhamil->gol_dar == 'AB' ? 'selected' : ''?>>AB
                                            </option>
                                            <option value="O" <?=$ibuhamil->gol_dar == 'O' ? 'selected' : ''?>>O
                                            </option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="nama_suami">Nama Suami *</label>
                                        <input
                                            class="form-control <?php echo form_error('nama_suami') ? 'is-invalid' : '' ?>"
                                            type="text" name="nama_suami" placeholder="Nama Suami"
                                            value="<?=$ibuhamil->nama_suami;?>" required>
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
                                            <label class="input-group-text" for="pekerjaan_suami">Pekerjaan Suami
                                                Pasien</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="pekerjaan_suami"
                                            required>
                                            <option selected>Pilih Pekerjaan</option>
                                            <option value="PNS"
                                                <?=$ibuhamil->pekerjaan_suami == 'PNS' ? 'selected' : ''?>>PNS
                                            </option>
                                            <option value="Swasta"
                                                <?=$ibuhamil->pekerjaan_suami == 'Swasta' ? 'selected' : ''?>>Swasta
                                            </option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur Pasien*</label>
                                        <input class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>"
                                            type="number" name="umur" placeholder="Umur Pasien"
                                            value="<?=$ibuhamil->umur;?>" required>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('umur') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <textarea
                                            class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>"
                                            id="alamat" name="alamat" placeholder="Alamat" rows="3"
                                            required><?=$ibuhamil->alamat;?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="kelurahan">Kelurahan</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="kelurahan" required>
                                            <option selected>Pilih Kelurahan Alamat</option>
                                            <option value="27 Ilir"
                                                <?=$ibuhamil->kelurahan == '27 Ilir' ? 'selected' : ''?>>27 Ilir
                                            </option>
                                            <option value="28 Ilir"
                                                <?=$ibuhamil->kelurahan == '28 Ilir' ? 'selected' : ''?>>28 Ilir
                                            </option>
                                            <option value="29 Ilir"
                                                <?=$ibuhamil->kelurahan == '29 Ilir' ? 'selected' : ''?>>29 Ilir
                                            </option>
                                            <option value="30 Ilir"
                                                <?=$ibuhamil->kelurahan == '30 Ilir' ? 'selected' : ''?>>30 Ilir
                                            </option>
                                            <option value="32 Ilir"
                                                <?=$ibuhamil->kelurahan == '32 Ilir' ? 'selected' : ''?>>32 Ilir
                                            </option>
                                            <option value="35 Ilir"
                                                <?=$ibuhamil->kelurahan == '35 Ilir' ? 'selected' : ''?>>35 Ilir
                                            </option>
                                            <option value="Kemang Manis"
                                                <?=$ibuhamil->kelurahan == 'Kemang Manis' ? 'selected' : ''?>>
                                                Kemang Manis</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="notelp">No Telephone *</label>
                                        <input
                                            class="form-control <?php echo form_error('notelp') ? 'is-invalid' : '' ?>"
                                            type="text" name="notelp" placeholder="Nomor Telephone"
                                            value="<?=$ibuhamil->notelp;?>" required>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('notelp') ?>
                                        </div>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />


                                </div>

                                <div class="card-footer small text-muted">

                                    * required fields

                                </div>
                        </form>



                    </
div>
                </div>