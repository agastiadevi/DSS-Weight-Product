<?php
require("../controller/Login.php");

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabilitasi Sekolah</title>
    <link rel="stylesheet" href="../asset/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php?halaman=home">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="NavbarUtama">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="NavbarUtama" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item" href="index.php?halaman=home">Home</a>
                    <a class="navbar-item" href="index.php?halaman=datales">Alternatif</a>
                    <a class="navbar-item" href="index.php?halaman=datakriteria">Kriteria</a>
                    <a class="navbar-item" href="index.php?halaman=databobot">Pembobotan</a>
                    <a class="navbar-item" href="index.php?halaman=datapenilaian">Perhitungan</a>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-dark" href="../logout.php">
                                <strong>Logout</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php require '../controller/Menu.php' ?>

    <!-- JAVASCRIPT -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>