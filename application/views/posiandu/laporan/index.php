<!-- Begin Page Content -->

<div class="container-fluid">
    <?php $this->load->view('admin/_partials/breadcrumb');?>

    <?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php } else if ($this->session->flashdata('error')) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
    <?php }?>

    <!-- Example single danger button -->
    <div class="btn-group mb-2">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Bulan
        </button>
        <div class="dropdown-menu">
            <?php
$no = 1;
foreach ($bulan as $b): ?>
            <a class="dropdown-item"
                href="<?=base_url('posyandu/Laporan/index/') . date('Y') . '-' . str_pad($no++, 2, "0", STR_PAD_LEFT);?>"><?=$b?></a>
            <?php endforeach;?>

        </div>
    </div>




    <div class="row">

        <?php
$no = 1;
foreach ($graph as $key): ?>

        <div class="col-xl-6 col-lg-6">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?=$key?></h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myBarChart<?=$no++?>"></canvas>
                    </div>

                </div>
            </div>
        </div>

        <?php endforeach;?>

    </div>


    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <a onclick="sentConfirm('<?php echo site_url('posyandu/Laporan/kirim') ?>')" href="#!"
                        class="btn btn-small text-success"><i class="fas fa-file-export"></i> Kirim Laporan</a>
                </div>
                <div class="col-md-4 pull-right">
                    <h4><b>Data Laporan</b></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>No Pasien</th>
                                <th>Nama Anak</th>
                                <th>TTL</th>
                                <th>Nama Ibu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$no = 1;
foreach ($pendaftaran as $data):
?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->no_pasien ?></td>
                                <td><?php echo $data->nama_anak ?></td>
                                <td><?php echo $data->tempat_lahir . ", " . $data->tanggal_lahir ?></td>
                                <td><?php echo $data->nama_ibu ?></td>
                                <td width="250">
                                    <a href="<?php echo site_url('posyandu/Laporan/detail/' . $data->no_pasien) ?>"
                                        class="btn btn-small text-info"><i class="fas fa-eye"></i> Detail
                                        Laporan</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- Logout Delete Confirmation-->
    <div class="modal fade" id="sentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Data yang dikirim tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a id="btn-sent" class="btn btn-info" href="#">Sent</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    function sentConfirm(url) {
        $('#btn-sent').attr('href', url);
        $('#sentModal').modal();

    }
    </script>








    <!-- /.container-fluid
 -->