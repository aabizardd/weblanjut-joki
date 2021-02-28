<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Pencatatan Medis</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    <a href="<?= base_url('admin/posyandu/kelolaKategori') ?>" class="mb-2 mr-2 btn btn-primary">Kelola Kategori</a>
                        <table class="display" id="example">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Id Pencatatan</th>
                                    <th>Nama Anak</th>
                                    <th>Nama Bidan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pencatatan as $data) { ?>
                                    <tr>
                                        <td><?php echo $data->tgl_pencatatan ?></td>
                                        <td><?php echo $data->id_pencatatan ?></td>
                                        <td><?php echo $data->nama_anak ?></td>
                                        <td><?php echo $data->nama_bidan ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>
        </div>
    </div>
</div>