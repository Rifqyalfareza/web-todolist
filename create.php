<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $masuk = mysqli_query($konek, "INSERT INTO daftar_tugas VALUES(
            '',
            -- '".$_POST['nama']."',
            '".$_POST['matkul']."',
            '".$_POST['deskripsi']."',
            '".$_POST['tenggat']."'
        )");

        if($masuk){
            echo '<script>window.location = "tugas.php"</script>';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="creat.css">
</head>
<body>
    <section>
        <h2>Create a New Task List</h2>
        <form action="" method="post">
            <div>
                <table cellpadding="10" border="0">
                    <!-- <tr>
                        <td style="width: 200px;">Nama</td>
                        <td> : </td>
                        <td>
                            <input type="text" name="nama" id="" placeholder="Masukkan nama" required>
                        </td>
                    </tr> -->
                    <tr>
                        <td>Mata Kuliah</td>
                        <td> : </td>
                        <td>
                            <input type="text" name="matkul" id="" placeholder="Masukkan Matakuliah" required>
                        </td>
                    </tr>
                    <tr class="desk">
                        <td>Deskripsi</td>
                        <td> : </td>
                        <td>
                            <textarea name="deskripsi" id="" cols="" rows="" placeholder="Masukkan deskripsi tugas"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Tenggat</td>
                        <td> : </td>
                        <td>
                            <input type="date" name="tenggat" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <button name="submit">Submit</button>
                                <!-- <input type="submit" name="submit" id="" placeholder="Submit"> -->
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