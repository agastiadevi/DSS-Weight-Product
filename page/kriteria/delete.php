<?php
require("../controller/Kriteria.php");

$id = $_GET['id'];

if (Delete("kriteria", "id_kriteria", $id) > 0) {
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
            title: 'Gagal',,
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
