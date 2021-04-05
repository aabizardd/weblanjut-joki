        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-info icon-gradient bg-mean-fruit">
                                </i>
                            </div>
                            <div>Data Pemeriksaan Ibu Hamil</div>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="formPemeriksaan" style="background-color:#2980b9; color: white">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-info" role="alert">
                                    Silahkan masukan data pemeriksaan
                                </div>
                            </div>
                        </div>

                        <form action="">
                            <div class="row">
                                <hr>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Id
                                                    Pemeriksaan</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" name="id_pemeriksaan"
                                                        value="<?=$pemeriksaan_ibuhamil['id_pemeriksaan']?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Nama
                                                    Pasien</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nama"
                                                        value="<?=$pemeriksaan_ibuhamil['nama']?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <div class="col">
                                    <!-- <input type="hidden" name="id_pasien" value="<?=$pemeriksaan->id_pasien?>"> -->
                                    <!-- <div class="form-group row">
                                <label for="id_pasien" class="col-sm-6 col-form-label">ID Pasien</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="id_pasien" name="id_pasien" >
                                </div>
                            </div> -->

                                    <!-- <div class="form-group row">
                                <label for="id_reg" class="col-sm-6 col-form-label">ID Reg</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="id_reg" name="id_reg">
                                </div>
                            </div> -->

                                    <div class="form-group row">
                                        <label for="id_petugas" class="col-sm-6 col-form-label">ID Petugas</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="id_petugas" name="id_petugas"
                                                value="<?=$pemeriksaan_ibuhamil['id_petugas']?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tgl_periksa" class="col-sm-6 col-form-label">Tanggal Periksa</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label for="gpa" class="col-sm-5 col-form-label">GPA (Gravida Partes
                                            Abortus)</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="gravida" name="gravida"
                                                placeholder="G" autofocus>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="partes" name="partes"
                                                placeholder="P">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="abortus" name="abortus"
                                                placeholder="A">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jarak_kehamilan" class="col-sm-4 col-form-label">Jarak
                                            Kehamilan</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="jarak_kehamilan"
                                                name="jarak_kehamilan" placeholder="Jarak Kehamilan">
                                        </div>
                                        <label class="col-form-label">Bulan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="usia_kehamilan" class="col-sm-4 col-form-label">Usia
                                            Kehamilan</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="usia_kehamilan"
                                                name="usia_kehamilan" placeholder="Usia Kehamilan">
                                        </div>
                                        <label class="col-form-label">Bulan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="tinggi_badan"
                                                name="tinggi_badan" placeholder="Tinggi Badan">
                                        </div>
                                        <label class="col-form-label">CM</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lila" class="col-sm-4 col-form-label">LILA</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="lila" name="lila"
                                                placeholder="Lingkar Lengan Atas">
                                        </div>
                                        <label class="col-form-label">CM</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tekanan_darah" class="col-sm-4 col-form-label">Tekanan Darah</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="sistol" name="sistol"
                                                placeholder="Sistol">
                                        </div>
                                        <label class="col-form-label">/</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="diastol" name="diastol"
                                                placeholder="Diastol">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tetanus_toksoid" class="col-sm-4 col-form-label">TT</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="tetanus_toksoid"
                                                name="tetanus_toksoid" placeholder="Tetanus Toksoid">
                                        </div>
                                    </div>


                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="fe" class="col-sm-4 col-form-label">Fe</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="fe" name="fe"
                                                placeholder="Zat Besi (Fe)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tfu" class="col-sm-2 col-form-label">TFU</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="tfu" name="tfu"
                                                placeholder="Tinggi Fundus Uteri">
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

                                            <option value="<?=$item->letakBayi?>"><?=$item->letakBayi?></option>

                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="detak_jantung" class="col-sm-6 col-form-label">Detak Jantung</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="detak_jantung"
                                                name="detak_jantung">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hpht" class="col-sm-6 col-form-label">HPHT (Hari Pertama Haid
                                            Terakhir)</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="hpht" name="hpht">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tp" class="col-sm-6 col-form-label">TP (Taksiran Persalinan)</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="tp" name="tp">
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="hb">HB (Hemoglobin)</label>
                                        </div>
                                        <select class="custom-select" id="hb" name="hb">
                                            <option selected>Pilih kondisi hb</option>

                                            <?php foreach ($hb as $item): ?>

                                            <option value="<?=$item->kondisiHb?>"><?=$item->kondisiHb?></option>

                                            <?php endforeach;?>

                                        </select>
                                    </div>
                                    <!-- <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="gol_dar">Gologan Darah</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="gol_dar">
                                    <option selected>Pilih golongan darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div> -->

                                    <div class="form-group row">
                                        <label for="namaobat" class="col-sm-6 col-form-label">Nama Obat</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaobat" name="namaobat">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tindakanmedis" class="col-sm-6 col-form-label">Tindakan
                                            Medis</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tindakanmedis"
                                                name="tindakanmedis">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success" data-toggle="modal" id="btn-diagnosa"
                                        data-target="#diagnosaModal">Next</button>
                                </div>
                            </div>

                    </div>
                </div>


            </div>
        </div>





        <!-- end modal diagnosa -->







        </div>
        </div>

        <!-- Modal -->
        <!-- modal diagnosa -->
        <!-- Modal -->
        <div class="modal fade" id="diagnosaModal" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDetailTitle">Hasil Diagnosa</h5>
                    </div>
                    <div class="modal-body" style="background-color:#2980b9;">
                        <div class="container-fluid">
                            <!-- DataTables -->
                            <div class="card mb-3">
                                <div class="card-body" style="color: black">
                                    <div class="container">
                                        <div class="row">
                                            <hr>
                                            <div class="col">
                                                <div class="form-group row">
                                                    <label for="jarak_kehamilan" class="col-sm-3 col-form-label">Id
                                                        Pemeriksaan</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="id-pemeriksaan">
                                                    </div>
                                                    <label for="jarak_kehamilan" class="col-sm-2 col-form-label">Nama
                                                        Pasien</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="nama-pasien">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <hr>
                                            <div class="col-lg-4">
                                                <input type="hidden" name="id_pasien">
                                                <input type="hidden" name="id_pemeriksaan" value="">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="hbsag">HBSAG</label>
                                                    </div>
                                                    <select class="custom-select" id="hbsag" name="hbsag" autofocus>
                                                        <option value="Negatif">Negatif</option>
                                                        <option value="Positif">Positif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="hiv">HIV</label>
                                                    </div>
                                                    <select class="custom-select" id="hiv" name="hiv">
                                                        <option value="Negatif">Negatif</option>
                                                        <option value="Positif">Positif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="sypilis">Sypilis</label>
                                                    </div>
                                                    <select class="custom-select" id="sypilis" name="sypilis">
                                                        <option value="Negatif">Negatif</option>
                                                        <option value="Positif">Positif</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" id="btn-bayar"
                            data-target="#bayarModal">Bayar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOdal Pembayaran -->
        <!-- Modal -->
        <div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bayarModalLabel">Pembayaran</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="jenis_pembayaran">Jenis
                                                Pembayaran</label>
                                        </div>
                                        <select class="custom-select" id="pembayaran" name="pembayaran" autofocus>
                                            <?php foreach ($pembayaran as $item): ?>
                                            <option value="<?=strtoupper($item->pembayaran)?>"><?=$item->pembayaran;?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <small>* Silahkan pilih jenis pembayaran</small>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-cancel-me"
                            data-dismiss="modal">Kembali</button>
                        <input type="submit" class="btn btn-primary" value="Oke">
                    </div>
                </div>
            </div>
        </div>

        <!-- end modal Pembayaran -->


        </form>


        <!-- Logout Delete Confirmation-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a id="btP" class="btn btn-danger" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
        <script>
		
$(document).ready(function() {

    $('#btn-diagnosa').click(function() {
        $('#diagnosaModal').modal();
    });
    $("#btn-cancel-me").click(function() {
        location.reload(true);
    });
    $('#btn-bayar').click(function() {
        $('#diagnosaModal').modal("toggle");
        $('#bayarModal').modal();
        alert('a;dasd')
    });
});
        </script>

        </div>
