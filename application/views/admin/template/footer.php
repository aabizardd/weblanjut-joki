</div>
<script type="text/javascript" src="<?=base_url('assets/admin/scripts/main.js')?>"></script>

</body>




</html>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.jqueryui.min.js">
</script>

<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
</script>
<script type="text/javascript" charset="utf8"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js">
</script>


<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'collection',
            text: 'Export',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }]
    });
});

$(document).on('click', '#editJenisBayar', function() {
    const id = $(this).attr('data-id');
    const url = "<?=base_url('admin/puskesmas/getKategori/jenisBayar/');?>";
    const urlEdit = "<?=base_url('admin/puskesmas/editkategori/jenisBayar/');?>";
    $.ajax({
        url: url + id,
        type: "get",
        dataType: "json",
        success: (data) => {
            const {
                pembayaran
            } = data;
            $('#ModaleditJenisbayar form').attr("action", urlEdit + id);
            $('#ModaleditJenisbayar #ModalBody #input-jenisPembayaran').val(pembayaran);
        }
    });
});

$(document).on('click', '#editKondisiHb', function() {
    const id = $(this).attr('data-id');
    const url = "<?=base_url('admin/puskesmas/getKategori/kondisiHb/');?>";
    const urlEdit = "<?=base_url('admin/puskesmas/editkategori/kondisiHb/');?>";
    $.ajax({
        url: url + id,
        type: "get",
        dataType: "json",
        success: (data) => {
            const {
                kondisiHb
            } = data;
            $('#ModalEditKondisiHb form').attr("action", urlEdit + id);
            $('#ModalEditKondisiHb #ModalBody #input-kondisiHB').val(kondisiHb);
        }
    });
});

$(document).on('click', '#editLetakBayi', function() {
    const id = $(this).attr('data-id');
    const url = "<?=base_url('admin/puskesmas/getKategori/letakBayi/');?>";
    const urlEdit = "<?=base_url('admin/puskesmas/editkategori/letakBayi/');?>";
    $.ajax({
        url: url + id,
        type: "get",
        dataType: "json",
        success: (data) => {
            const {
                letakBayi
            } = data;
            $('#ModalEditLetakBayi form').attr("action", urlEdit + id);
            $('#ModalEditLetakBayi #ModalBody #input-letakBayi').val(letakBayi);
        }
    });
});

$(function() {
    $('.addKategoriUsia').on('click', function() {
        const url = "<?=base_url('admin/posyandu/addKategori/kategoriUsia');?>";
        $('.formKategoriModal form').attr("action", url);
        $('#ModalTitle').html('Tambah Kategori Usia');
        $('.formModalLabel').html('Kategori Usia');
        $('#input-Modal').attr("name", 'kategoriUsia');
        $('#submitButton').html('Tambah');
    });

    $('.editKategoriUsia').on('click', function() {
        console.log('ok');
        const id = $(this).attr('data-id');
        const url = "<?=base_url('admin/posyandu/getKategori/kategoriUsia/');?>";
        const urlEdit = "<?=base_url('admin/posyandu/editkategori/kategoriUsia/');?>";
        $.ajax({
            url: url + id,
            type: "get",
            dataType: "json",
            success: (data) => {
                const {
                    usia
                } = data;
                $('.formKategoriModal form').attr("action", urlEdit + id);
                $('#ModalTitle').html('Edit Kategori Usia');
                $('.formModalLabel').html('Kategori Usia');
                $('#input-Modal').attr("name", 'kategoriUsia').val(usia);
                $('#submitButton').html('Simpan');
            }
        });
    });

    $('.addImunisasi').on('click', function() {
        const url = "<?=base_url('admin/posyandu/addKategori/imunisasi');?>";
        $('.formKategoriModal form').attr("action", url);
        $('#ModalTitle').html('Tambah Jenis Imunisasi');
        $('.formModalLabel').html('Jenis Imunisasi');
        $('#input-Modal').attr("name", 'jenisImunisasi');
        $('#submitButton').html('Tambah');
    });

    $('.editImunisasi').on('click', function() {
        console.log('ok');
        const id = $(this).attr('data-id');
        const url = "<?=base_url('admin/posyandu/getKategori/imunisasi/');?>";
        const urlEdit = "<?=base_url('admin/posyandu/editkategori/imunisasi/');?>";
        $.ajax({
            url: url + id,
            type: "get",
            dataType: "json",
            success: (data) => {
                const {
                    imunisasi
                } = data;
                $('.formKategoriModal form').attr("action", urlEdit + id);
                $('#ModalTitle').html('Edit Jenis Imunisasi');
                $('.formModalLabel').html('Jenis Imunisasi');
                $('#input-Modal').attr("name", 'jenisImunisasi').val(imunisasi);
                $('#submitButton').html('Simpan');
            }
        });
    });

    $('.addVitamin').on('click', function() {
        const url = "<?=base_url('admin/posyandu/addKategori/vitamin');?>";
        $('.formKategoriModal form').attr("action", url);
        $('#ModalTitle').html('Tambah Vitamin');
        $('.formModalLabel').html('Vitamin');
        $('#input-Modal').attr("name", 'vitamin');
        $('#submitButton').html('Tambah');
    });

    $('.editVitamin').on('click', function() {
        console.log('ok');
        const id = $(this).attr('data-id');
        const url = "<?=base_url('admin/posyandu/getKategori/vitamin/');?>";
        const urlEdit = "<?=base_url('admin/posyandu/editkategori/vitamin/');?>";
        $.ajax({
            url: url + id,
            type: "get",
            dataType: "json",
            success: (data) => {
                const {
                    vitamin
                } = data;
                $('.formKategoriModal form').attr("action", urlEdit + id);
                $('#ModalTitle').html('Edit Vitamin');
                $('.formModalLabel').html('Vitamin');
                $('#input-Modal').attr("name", 'vitamin').val(vitamin);
                $('#submitButton').html('Simpan');
            }
        });
    });

    $('.addObat').on('click', function() {
        const url = "<?=base_url('admin/posyandu/addKategori/obatCacing');?>";
        $('.formKategoriModal form').attr("action", url);
        $('#ModalTitle').html('Tambah Obat Cacing');
        $('.formModalLabel').html('Obat Cacing');
        $('#input-Modal').attr("name", 'obatCacing');
        $('#submitButton').html('Tambah');
    });

    $('.editObat').on('click', function() {
        console.log('ok');
        const id = $(this).attr('data-id');
        const url = "<?=base_url('admin/posyandu/getKategori/obatCacing/');?>";
        const urlEdit = "<?=base_url('admin/posyandu/editkategori/obatCacing/');?>";
        $.ajax({
            url: url + id,
            type: "get",
            dataType: "json",
            success: (data) => {
                const {
                    obatCacing
                } = data;
                $('.formKategoriModal form').attr("action", urlEdit + id);
                $('#ModalTitle').html('Edit Obat Cacing');
                $('.formModalLabel').html('Obat Cacing');
                $('#input-Modal').attr("name", 'obatCacing').val(obatCacing);
                $('#submitButton').html('Simpan');
            }
        });
    });

});
</script>

<script type="text/javascript" charset="utf8" src="<?=base_url('assets/admin/scripts/chart.js')?>">
</script>

<?php
// $showGraph = "";
if ($showGraph == "puskesmas"): ?>

<script>
<?php
$no = 1;
foreach ($graph as $item): ?>

var ctx = document.getElementById('myChart<?=$no++?>').getContext('2d');

var data = [];

<?php if ($item == "Jumlah Pasien"): ?>

datas = [<?php foreach ($graph1 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php elseif ($item == "Buku KIA"): ?>

datas = [<?php foreach ($graph2 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php else: ?>
datas = [<?php foreach ($graph3 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php endif;?>

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($wilayah as $w): ?> '<?=$w->kelurahan?>',
            <?php endforeach;?>
        ],
        datasets: [{
            label: '# of Votes',
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

<?php endforeach;?>
</script>

<?php elseif ($showGraph == "posyandu"): ?>

<script>
<?php
$nop = 1;
foreach ($graph as $item): ?>

var ctx = document.getElementById('chartPosy<?=$nop++?>').getContext('2d');

var data = [];

<?php if ($item == "Jumlah Pasien"): ?>

datas = [<?php foreach ($graph1 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php elseif ($item == "Buku Posyandu"): ?>

datas = [<?php foreach ($graph2 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php else: ?>
datas = [<?php foreach ($graph3 as $g): ?> <?=$g->jml?>, <?php endforeach;?>];

<?php endif;?>

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($wilayah->result() as $w): ?> '<?=$w->nama_wilayah?>',
            <?php endforeach;?>
        ],
        datasets: [{
            label: '# of Votes',
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

<?php endforeach;?>
</script>


<?php endif;?>

<?php if (is_null($showGraph)) {

}?>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->



<!--
https://code.jquery.com/jquery-3.5.1.js
https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.10.23/js/dataTables.jqueryui.min.js -->