<?php
require("../controller/Bobot.php");

$halaman = 5;
$hasil = count(Index("SELECT * FROM pembobotan"));
$total = ceil($hasil / $halaman);
$aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($halaman * $aktif) - $halaman;

$data = Index("SELECT * FROM pembobotan LIMIT $awal,$halaman");
$banding1 = Index("SELECT * FROM alternatif");
$banding2 = Index("SELECT * FROM kriteria");
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="columns is-centered">
                <div class="column is-10">
                    <div class="card animate__animated animate__zoomIn">
                        <div class="card-header">
                            <p class="card-header-title">Tabel Pembobotan</p>
                                <a class="button is-dark" href="index.php?halaman=tambahdatabobot">
                                    Tambah Data
                                </a>
                        </div>
                        <div class="card-content">
                            <div class="table-container">
                                <table class="table is-fullwidth">
                                    <thead class="has-background-dark">
                                        <tr>
                                            <th class="has-text-white">No</th>
                                            <th class="has-text-white">Kriteria</th>
                                            <th class="has-text-white">Nama Sekolah</th>
                                            <th class="has-text-white">Nilai</th>
                                            <th class="has-text-white">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 + $awal ?>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td>
                                                    <?php foreach ($banding2 as $hasil) : ?>
                                                        <?php if ($row["id_kriteria"] == $hasil["id_kriteria"]) : ?>
                                                            <?= $hasil["nm_kriteria"] ?>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($banding1 as $result) : ?>
                                                        <?php if ($row["id_les"] == $result["id_les"]) : ?>
                                                            <?= $result["nm_les"] ?>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </td>
                                                <td>
                                                    <?php if ($row["nilai"] > 1000000) : ?>
                                                        <?= "Rp " . number_format($row["nilai"], 2, ',', '.'); ?></td>
                                            <?php else : ?>
                                                <?= $row["nilai"] ?>
                                            <?php endif ?>
                                            <td>
                                                <div class="buttons">
                                                    <a class="button is-secondary" href="index.php?halaman=editdatabobot&id=<?= $row['id_nilai']; ?>"> Edit
                                                    </a>
                                                    <button class="button is-secondary" onclick="archiveFunction()">
                                                         Hapus
                                                    </button>
                                                </div>
                                            </td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php require '../controller/PaginationBobot.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function archiveFunction() {
        // event.preventDefault(); // prevent form submit
        Swal.fire({
            title: 'Hapus Data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#276CDA',
            cancelButtonColor: '#F03A5F',
            confirmButtonText: 'Hapus',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "index.php?halaman=hapusdatabobot&id=<?= $row['id_nilai']; ?>";
            }
        })
    }
</script>