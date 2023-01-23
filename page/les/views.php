<?php
include_once("../controller/Les.php");

$halaman = 5;
$hasil = count(Index("SELECT * FROM alternatif"));
$total = ceil($hasil / $halaman);
$aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($halaman * $aktif) - $halaman;

$data = Index("SELECT * FROM alternatif LIMIT $awal,$halaman");
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="columns is-centered">
                <div class="column is-10">
                    <div class="card animate__animated animate__zoomIn">
                        <div class="card-header">
                            <p class="card-header-title">Table Alternatif</p>
                            <div class="buttons card-header-icon">
                                <a class="button is-dark" href="index.php?halaman=tambahdatales">
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-container">
                                <table class="table is-fullwidth">
                                    <thead class="has-background-dark">
                                        <tr>
                                            <th class="has-text-white">No</th>
                                            <th class="has-text-white">Kode Alternatif</th>
                                            <th class="has-text-white">Nama Sekolah</th>
                                            <th class="has-text-white">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 + $awal ?>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td><?= $row["kode_alternatif"] ?></td>
                                                <td><?= $row["nm_les"] ?></td>
                                                <td>
                                                    <div class="buttons">
                                                        <a class="button is-secondary" href="index.php?halaman=editdatales&id=<?= $row['id_les']; ?>">Edit
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
                            <?php require '../controller/PaginationAlternative.php'; ?>
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
                window.location.href = "index.php?halaman=hapusdatales&id=<?= $row['id_les']; ?>";
            }
        })
    }
</script>