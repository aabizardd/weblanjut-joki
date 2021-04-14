<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Laporan Puskesmas</div>
                </div>
            </div>


        </div>

        <div class="mb-2 mr-2 btn-group">
            <button class="btn btn-primary btn-lg">Bulan</button>
            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                class="dropdown-toggle-split dropdown-toggle btn btn-primary btn-lg"><span class="sr-only">Toggle
                    Dropdown</span>
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                <?php
$no = 1;
foreach ($bulan as $item): ?>
                <a href="<?=base_url('admin/puskesmas/laporanPuskesmas/') . date('Y') . '-' . str_pad($no++, 2, "0", STR_PAD_LEFT);?>"
                    tabindex="0" class="dropdown-item"><?=$item?></a>
                <?php endforeach;?>

            </div>
        </div>


        <div class="row">

            <?php
$no = 1;
foreach ($graph as $item): ?>
            <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            <?=$item?>
                        </div>
                        <ul class="nav">
                            <!-- <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last</a></li> -->
                            <li class="nav-item">

                            </li>
                        </ul>



                    </div>

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-80">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <canvas id="myChart<?=$no++;?>"></canvas>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach;?>
            <!-- grafik -->

            <div class="col-sm">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table class="display" id="example">
                            <thead>
                                <tr>
                                    <th>ID Pasien</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Suami</th>
                                    <th>Pekerjaan Suami</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Kelurahan</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
foreach ($ibuhamils as $data) {
    $no++;?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->nama ?></td>
                                    <td><?php echo $data->pekerjaan ?></td>
                                    <td><?php echo $data->nama_suami ?></td>
                                    <td><?php echo $data->pekerjaan_suami ?></td>
                                    <td><?php echo $data->umur ?></td>
                                    <td><?php echo $data->alamat ?></td>
                                    <td><?php echo $data->kelurahan ?></td>
                                    <td><?php echo $data->notelp ?></td>
                                    <td><a href="<?php echo site_url('admin/puskesmas/laporanDetail/' . $data->id_reg) ?>"
                                            class="btn btn-small text-info"><i class="fas fa-eye"></i> Detail</a></td>
                                </tr>

                                <?php }?>
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