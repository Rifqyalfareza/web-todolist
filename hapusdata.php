<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        $hapus = mysqli_query($konek, "DELETE FROM daftar_tugas WHERE nomor = '".$_GET['nomor']."'");
        echo '<script>window.location="tugas.php"</script>';
    }

?>