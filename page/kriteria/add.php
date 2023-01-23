<?php
require("../controller/Kriteria.php");

if (isset($_POST["add"])) {
    if (Add("kriteria", $_POST) > 0) {
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
        })
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
                            <p class="card-header-title">Tambah Kriteria</p>
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
                                    <input class="input" type="text" name="kode_kriteria">
                                </div>
                                <div class="field">
                                    <label class="label">Nama Kriteria</label>
                                    <input class="input" type="text" name="nm_kriteria">
                                </div>
                                <div class="field">
                                    <label class="label">Bobot</label>
                                    <input class="input" type="text" name="bobot">
                                </div>
                                <div class="field">
                                    <label class="label">Status</label>
                                    <div class="control has-icons-left">
                                        <div class="select">
                                            <select name="status">
                                                <option selected disabled>Pilih Status</option>
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