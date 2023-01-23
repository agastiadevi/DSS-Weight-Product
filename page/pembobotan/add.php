<?php
require("../controller/Bobot.php");

$alternatif = Index("SELECT * FROM alternatif");
$kriteria = Index("SELECT * FROM kriteria");

if (isset($_POST["add"])) {
    if (Add("pembobotan", $_POST) > 0) {
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
            window.location.href = 'index.php?halaman=databobot';
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
            window.location.href = 'index.php?halaman=databobot';
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
                            <p class="card-header-title">Tambah pembobotan</p>
                            <div class="buttons card-header-icon">
                                <a class="button is-dark" href="index.php?halaman=databobot">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-content">
                            <form action="" method="post">
                                <div class="field">
                                    <label class="label">Data Alternatif</label>
                                    <div>
                                        <div class="select">
                                            <select name="id_les">
                                                <option selected disabled>Pilih Alternatif</option>
                                                <?php foreach ($alternatif as $row) : ?>
                                                    <option value="<?= $row["id_les"] ?>"><?= $row["nm_les"] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Data Kriteria</label>
                                    <div >
                                        <div class="select">
                                            <select name="id_kriteria">
                                                <option selected disabled>Pilih Kriteria</option>
                                                <?php foreach ($kriteria as $row) : ?>
                                                    <option value="<?= $row["id_kriteria"] ?>"><?= $row["nm_kriteria"] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nilai</label>
                                    <div>
                                        <input class="input" type="text" placeholder="Nilai untuk setiap alternatif" name="nilai">
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