<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $ubah = mysqli_query($konek, "UPDATE daftar_tugas SET 
        mata_kuliah = '".$_POST['matkul']."',
        deskripsi_tugas = '".$_POST['deskripsi']."',
        tenggat = '".$_POST['tenggat']."'
        WHERE nomor = '".$_GET['nomor']."'
        ");
        echo '<script>window.location="tugas.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ubah.css">
</head>
<body>
    <section>
        <h2>Ubah Tugas</h2>
        <form action="" method="post">
            <div>
                <table border="0">
                    <tr>
                        <td style="width: 200px;">Mata Kuliah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="matkul" id="" placeholder="Masukkan Mata Kuliah" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>
                            <textarea name="deskripsi" id="" cols="" rows="3" placeholder="Masukkan deskripsi tugas"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Tenggat</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tenggat" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <button name="submit">Submit</button>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
</body>
</html>