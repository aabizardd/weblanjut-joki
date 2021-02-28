<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Laporan</div>
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
                <a href="<?=base_url('admin/posyandu/laporan/') . date('Y') . '-' . str_pad($no++, 2, "0", STR_PAD_LEFT);?>"
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
                                            <canvas id="chartPosy<?=$no++;?>"></canvas>
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
        </div>

        <div class="row">



            <div class="col-sm">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table class="display" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pasien</th>
                                    <th>Nama Anak</th>
                                    <th>TTL</th>
                                    <th>Nama Ibu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
foreach ($pendaftaran as $data) {
    $no++;?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->no_pasien ?></td>
                                    <td><?php echo $data->nama_anak ?></td>
                                    <td><?php echo $data->tempat_lahir . ", " . $data->tanggal_lahir ?></td>
                                    <td><?php echo $data->nama_ibu ?></td>
                                    <td><a href="<?php echo site_url('admin/posyandu/laporanDetail/' . $data->no_pasien) ?>" class="btn btn-small text-info"><i class="fas fa-eye"></i> Detail Laporan</a></td>
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
