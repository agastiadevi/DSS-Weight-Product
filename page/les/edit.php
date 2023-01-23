<?php
require("../controller/Les.php");

$id = $_GET["id"];

$query = Index("SELECT * FROM alternatif WHERE id_les = $id");
foreach ($query as $row) {
    $row["kode_alternatif"];
    $row["nm_les"];
}

if (isset($_POST["add"])) {
    if (Edit("alternatif", $_POST) > 0) {
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
            window.location.href = 'index.php?halaman=datales';
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
            window.location.href = 'index.php?halaman=datales';
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
                            <p class="card-header-title">Edit Data Alternatif</p>
                            <div class="buttons card-header-icon">
                                <a class="button is-dark" href="index.php?halaman=datales">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-content">
                            <form action="" method="post">
                                <div class="field">
                                    <label class="label">Kode Alternatif</label>
                                        <input type="hidden" value="<?= $row["id_les"]; ?>" name="id_les">
                                        <input class="input" type="text" placeholder="Nama Tempat Les" name="kode_alternatif" value="<?= $row["kode_alternatif"] ?>">
                                </div>
                                <div class="field">
                                    <label class="label">Nama Alternatif</label>
                                        <input class="input" type="text" placeholder="Nama Tempat Les" name="nm_les" value="<?= $row["nm_les"]; ?>">
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