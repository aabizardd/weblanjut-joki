<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Edit Data Pemeriksaan Pasien <b><?=strtoupper($pemeriksaan->nama)?></b> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-info" role="alert">
                                        Silahkan masukan data pemeriksaan
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Id
                                                    Pemeriksaan</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control"
                                                        value="<?=$pemeriksaan->id_pemeriksaan?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Nama
                                                    Pasien</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"
                                                        value="<?=$pemeriksaan->nama?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form
                                action="<?=site_url('puskesmas/ibuhamil/pemeriksaan/edit_save/' . $pemeriksaan->id_pemeriksaan)?>"
                                method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <hr>
                                    <div class="col">

                                        <input type="hidden" name="id_pemeriksaan"
                                            value="<?=$pemeriksaan->id_pemeriksaan?>">
                                        <input type="hidden" name="id_pasien" value="<?=$pemeriksaan->id_pasien?>">

                                        <div class="form-group row">
                                            <label for="id_pasien" class="col-sm-6 col-form-label">ID Pasien</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="id_pasien"
                                                    name="id_pasien" value="<?=$pemeriksaan->id_pasien?>" readonly>
                                            </div>
                                        </div>


                                        <!-- <div class="form-group row">
                                <label for="id_reg" class="col-sm-6 col-form-label">ID Reg</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="id_reg" name="id_reg" value="<?=$pemeriksaan->id_reg?>">
                                </div>
                            </div> -->

                                        <div class="form-group row">
                                            <label for="id_petugas" class="col-sm-6 col-form-label">ID Petugas</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="id_petugas"
                                                    name="id_petugas" value="<?=$pemeriksaan->id_petugas?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tgl_periksa" class="col-sm-6 col-form-label">Tanggal
                                                Periksa</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="tgl_periksa"
                                                    name="tgl_periksa" value="<?=$pemeriksaan->tgl_periksa?>">
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label for="gpa" class="col-sm-5 col-form-label">GPA (Gravida Partes
                                                Abortus)</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="gravida" name="gravida"
                                                    placeholder="Gravida" value="<?=$pemeriksaan->gravida?>" autofocus>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="partes" name="partes"
                                                    placeholder="Partes" value="<?=$pemeriksaan->partes?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="abortus" name="abortus"
                                                    placeholder="Abortus" value="<?=$pemeriksaan->abortus?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Jarak
                                                Kehamilan</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="jarak_kehamilan"
                                                    name="jarak_kehamilan" placeholder="Jarak Kehamilan"
                                                    value="<?=$pemeriksaan->jarak_kehamilan?>">
                                            </div>
                                            <label class="col-form-label">Bulan</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="usia_kehamilan" class="col-sm-4 col-form-label">Usia
                                                Kehamilan</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="usia_kehamilan"
                                                    name="usia_kehamilan" placeholder="Usia Kehamilan"
                                                    value="<?=$pemeriksaan->usia_kehamilan?>">
                                            </div>
                                            <label class="col-form-label">Bulan</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi
                                                Badan</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="tinggi_badan"
                                                    name="tinggi_badan" placeholder="Tinggi Badan"
                                                    value="<?=$pemeriksaan->tinggi_badan?>">
                                            </div>
                                            <label class="col-form-label">CM</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lila" class="col-sm-4 col-form-label">LILA</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="lila" name="lila"
                                                    placeholder="Lingkar Lengan Atas" value="<?=$pemeriksaan->lila?>">
                                            </div>
                                            <label class="col-form-label">CM</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tekanan_darah" class="col-sm-4 col-form-label">Tekanan
                                                Darah</label>
                                            <div class="col-sm-3">
                                                <input type="number" class="form-control" id="sistol" name="sistol"
                                                    placeholder="Sistol" value="<?=$pemeriksaan->sistol?>">
                                            </div>
                                            <label class="col-form-label">/</label>
                                            <div class="col-sm-3">
                                                <input type="number" class="form-control" id="diastol" name="diastol"
                                                    placeholder="Diastol" value="<?=$pemeriksaan->diastol?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tetanus_toksoid" class="col-sm-4 col-form-label">TT</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="tetanus_toksoid"
                                                    name="tetanus_toksoid" placeholder="Tetanus Toksoid"
                                                    value="<?=$pemeriksaan->tetanus_toksoid?>">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="fe" class="col-sm-2 col-form-label">Fe</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="fe" name="fe"
                                                    placeholder="Zat Besi (Fe)" value="<?=$pemeriksaan->fe?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tfu" class="col-sm-2 col-form-label">TFU</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="tfu" name="tfu"
                                                    placeholder="Tinggi Fundus Uteri" value="<?=$pemeriksaan->tfu?>">
                                            </div>
                                            <label class="col-form-label">CM</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="letak_bayi">Letak Bayi</label>
                                            </div>
                                            <select class="custom-select" id="letak-bayi" name="letak_bayi">
                                                <option selected>Pilih letak bayi</option>

                                                <?php foreach ($letakBayi as $item): ?>

                                                <option value="<?=$item->letakBayi?>"
                                                    <?=$pemeriksaan->letak_bayi == $item->letakBayi ? 'selected' : ''?>>
                                                    <?=$item->letakBayi?>
                                                </option>

                                                <?php endforeach;?>


                                                <!-- <option value="Letak Bokong"
                                        <?=$pemeriksaan->letak_bayi == 'Letak Bokong' ? 'selected' : ''?>>LETBO (Letak
                                        Bokong)</option>
                                    <option value="Letak Lintang"
                                        <?=$pemeriksaan->letak_bayi == 'Letak Lintang' ? 'selected' : ''?>>LETLI (Letak
                                        Lintang)</option> --> -->



                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detak_jantung" class="col-sm-6 col-form-label">Detak
                                                Jantung</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="detak_jantung"
                                                    name="detak_jantung" value="<?=$pemeriksaan->detak_jantung?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hpht" class="col-sm-6 col-form-label">HPHT (Hari Pertama Haid
                                                Terakhir)</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="hpht" name="hpht"
                                                    value="<?=$pemeriksaan->hpht?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tp" class="col-sm-6 col-form-label">TP (Taksiran
                                                Persalinan)</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="tp" name="tp"
                                                    value="<?=$pemeriksaan->tp?>">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="hb">HB (Hemoglobin)</label>
                                            </div>
                                            <select class="custom-select" id="hb" name="hb">
                                                <option selected>Pilih kondisi hb</option>
                                                <?php foreach ($hb as $item): ?>

                                                <option value="<?=$item->kondisiHb?>"
                                                    <?=$pemeriksaan->hb == "$item->kondisiHb" ? 'selected' : ''?>>
                                                    <?=$item->kondisiHb?></option>

                                                <?php endforeach;?>


                                                <!-- <option value="Normal" <?=$pemeriksaan->hb == 'Normal' ? 'selected' : ''?>>Normal (
                                        &gt; 11 gram &percnt; )</option> -->
                                            </select>
                                        </div>
                                        <!-- <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="gol_dar">Gologan Darah</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="gol_dar">
                                    <option selected>Pilih golongan darah</option>
                                    <option value="A" <?=$pemeriksaan->gol_dar == 'A' ? 'selected' : ''?>>A</option>
                                    <option value="B" <?=$pemeriksaan->gol_dar == 'B' ? 'selected' : ''?>>B</option>
                                    <option value="AB" <?=$pemeriksaan->gol_dar == 'AB' ? 'selected' : ''?>>AB</option>
                                    <option value="O" <?=$pemeriksaan->gol_dar == 'O' ? 'selected' : ''?>>O</option>
                                </select>
                            </div> -->

                                        <div class="form-group row">
                                            <label for="namaobat" class="col-sm-6 col-form-label">Nama Obat</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="namaobat" name="namaobat"
                                                    value="<?=$pemeriksaan->namaobat?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tindakanmedis" class="col-sm-6 col-form-label">Tindakan
                                                Medis</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="tindakanmedis"
                                                    name="tindakanmedis" value="<?=$pemeriksaan->tindakanmedis?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10"></div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            id="btn-diagnosa" data-target="#diagnosaModal">Diagnosa</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
</div>

<div class="modal fade formKategoriModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?=form_open_multipart('admin/puskesmas/addkategori/kategoriUsia', ['class' => 'modal-form', 'context' => 'formKategoriModal']);?>
            <div class="modal-body">
                <div class="form-group form-input">
                    <div class="row">
                        <div class="col-md-2 text-sm-left">
                            <label for="input-Modal" class="col-form-label text-dark formModalLabel"></label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="" class="form-control" id="input-Modal">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="submitButton"></button>
            </div>
            <?=form_close();?>
        </div>
    </div>
</div>
