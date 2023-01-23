<?php
require("../controller/Kriteria.php");

$halaman = 5;
$hasil = count(Index("SELECT * FROM kriteria"));
$total = ceil($hasil / $halaman);
$aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($halaman * $aktif) - $halaman;

$data = Index("SELECT * FROM kriteria LIMIT $awal,$halaman");
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="columns is-centered">
                <div class="column is-10">
                    <div class="card animate__animated animate__zoomIn">
                        <div class="card-header">
                            <p class="card-header-title">Tabel Kriteria</p>
                                <a class="button is-dark" href="index.php?halaman=tambahdatakriteria">
                                    Tambah Kriteria
                                </a>
                        </div>
                        <div class="card-content">
                            <div class="table-container">
                                <table class="table is-fullwidth">
                                    <thead class="has-background-dark">
                                        <tr>
                                            <th class="has-text-white">No</th>
                                            <th class="has-text-white">Kode Kriteria</th>
                                            <th class="has-text-white">Nama Kriteria</th>
                                            <th class="has-text-white">Bobot</th>
                                            <th class="has-text-white">Status</th>
                                            <th class="has-text-white">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 + $awal ?>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td><?= $row["kode_kriteria"] ?></td>
                                                <td><?= $row["nm_kriteria"] ?></td>
                                                <td><?= $row["bobot"] ?></td>
                                                <th><?= $row["status"] ?></th>
                                                <td>
                                                    <div class="buttons">
                                                        <a class="button is-secondary" href="index.php?halaman=editdatakriteria&id=<?= $row['id_kriteria']; ?>">
                                                         Edit
                                                        </a>
                                                        <button class="button is-secondary" onclick="DeleteData()">
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
                            <?php require '../controller/PaginationKriteria.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function DeleteData() {
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
                window.location.href = "index.php?halaman=hapusdatakriteria&id=<?= $row['id_kriteria']; ?>";
            }
        })
    }
</script>