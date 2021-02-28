<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Daftar Pasien</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table class="display" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>Pekerjaan</th>
                                    <th>Gol Darah</th>
                                    <th>Nama Suami</th>
                                    <th>Pekerjaan Suami</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>kelurahan</th>
                                    <th>No Telp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach ($ibuhamil as $value) {  $no++;?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?php echo $value->id_reg; ?></td>
                                        <td><?php echo $value->nama; ?></td>
                                        <td><?php echo $value->pekerjaan ?></td>
                                        <td><?php echo $value->gol_dar; ?></td>
                                        <td><?php echo $value->nama_suami; ?></td>
                                        <td><?php echo $value->pekerjaan_suami; ?></td>
                                        <td><?php echo $value->umur; ?></td>
                                        <td><?php echo $value->alamat; ?></td>
                                        <td><?php echo $value->kelurahan; ?></td>
                                        <td><?php echo $value->notelp; ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
            </script>
        </div>
    </div>
</div>