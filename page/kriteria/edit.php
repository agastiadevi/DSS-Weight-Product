<?php
require("../controller/Kriteria.php");

$id = $_GET["id"];

$query = Index("SELECT * FROM kriteria WHERE id_kriteria = $id");
foreach ($query as $row) {
    $row["kode_kriteria"];
    $row["nm_kriteria"];
    $row["bobot"];
    $row["status"];
}

if (isset($_POST["add"])) {
    if (Edit("kriteria", $_POST) > 0) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datakriteria';
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datakriteria';
        });
        </script>";
    }
}
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="columns is-centered">
                <div class="column is-7">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Edit Kriteria</p>
                            <div class="buttons card-header-icon">
                                <a class="button is-dark" href="index.php?halaman=datakriteria">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-content">
                            <form action="" method="post">
                                <div class="field">
                                    <label class="label">Kode Kriteria</label>
                                        <input type="hidden" name="id_kriteria" value="<?= $row["id_kriteria"] ?>">
                                        <input class="input" type="text" placeholder="Nama Tempat Les" name="kode_kriteria" value="<?= $row["kode_kriteria"] ?>">
                                </div>
                                <div class="field">
                                    <label class="label">Nama Kriteria</label>
                                        <input class="input" type="text" placeholder="Nama Tempat Les" name="nm_kriteria" value="<?= $row["nm_kriteria"]; ?>">
                                </div>
                                <div class="field">
                                    <label class="label">Bobot</label>
                                        <input class="input" type="text" placeholder="Nama Tempat Les" name="bobot" value="<?= $row["bobot"]; ?>">
                                </div>
                                <div class="field">
                                    <label class="label">Status</label>
                                    <div>
                                        <div class="select">
                                            <select name="status">
                                                <option selected disabled><?= $row["status"]; ?></option>
                                                <option value="COST">COST</option>
                                                <option value="BENEFIT">BENEFIT</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="button is-dark" type="submit" name="add">
                                        Simpan
                                    </button>
                                    <button class="button is-dark" type="reset">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>