<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Daftar Pasien Rujukan</div>
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
                                    <th>ID Petugas</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($daftarpetugas as $value) {
                                    $no++; ?>
                                    <tr>
                                    <?php if($value->status != 'posyandu'){ ?>
                                        <td><?php echo $value->id_petugas; ?></td>
                                        <td><?php echo $value->username; ?></td>
                                        <td><?php echo $value->nama; ?></td>
                                        <td><img src="<?= base_url('upload/petugas_posyandu/') . $value->foto; ?>" alt="" style="width: 150px; height: 150px;"></td>
                                        <td><?php echo $value->password; ?></td>
                                        <td><?php echo $value->status; ?></td>
                                    </tr>

                                <?php } } ?>
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