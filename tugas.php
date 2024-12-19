<?php
    include 'koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="tugas.css">
</head>
<body>
    <section>
        <h2>DAFTAR TUGAS</h2>
        <div class="data-table">
            <table border="1" cellpadding="12">
                <thead>
                    <tr>
                        <!-- <th>No</th> -->
                        <!-- <th style="width: 15%;">Nama</th> -->
                        <th>Mata Kuliah</th>
                        <th style="width: 30%;">Deskripsi Tugas</th>
                        <th>Tenggat</th>
                        <th colspan="2" style="width: 20%;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $daftar_tugas = mysqli_query($konek, "SELECT * FROM daftar_tugas");
                        while ($baris = mysqli_fetch_array($daftar_tugas)) {
                    ?>
                    <tr>
                        <td><?php echo $baris['mata_kuliah'] ?></td>
                        <td><?php echo $baris['deskripsi_tugas'] ?></td>
                        <td><?php echo $baris['tenggat'] ?></td>
                        <td>
                            <a href="ubah.php?nomor=<?php echo $baris['nomor'] ?>"><input type="button" class="btn-update"></a> 
                        </td>
                        <td>
                            <a href="hapusdata.php?nomor=<?php echo $baris['nomor'] ?>" onclick="return confirm('Apakah Tugasnya Selesai?')"><input type="button" class="btn-delete"></a>
                        </td>    
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button><a href="create.php">Tambah Tugas</a></button>
    </section>
    <table class="info" border="0">
        <tr>
            <td class="top"><img src="edit.png" ></td>
            <td style="width: 8%;"></td>
            <td></td>
            <td>:</td>
            <td>Update</td>
        </tr>
        <tr>
            <td class="bottom"><img src="hapus.png"></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>Delete</td>
        </tr>
    </table>
    <!-- <button class="back-menu"><a href="index.php">Back Menu</a></button> -->
    <script>
        var username = localStorage.getItem("username");
        document.getElementById("username").textContent = username;
    </script>
</body>
</html>