<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa yang Mendaftar</title>
</head>

<body>
    <header>
        <h3>Siswa yang mendaftar</h3>
    </header>
    <nav>
        <a href="index.php">Kembali</a>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_siswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) :
            ?>
                <tr>
                    <td><?= $siswa['No_Presensi'] ?></td>
                    <td><?= $siswa['Nama'] ?></td>
                    <td><?= $siswa['Kelas'] ?></td>
                    <td><?= $siswa['Alamat'] ?></td>
                    <td><?= $siswa['No_hp'] ?></td>
                    <td>
                        <a href="form-edit.php?No_Presensi=<?= $siswa['No_Presensi'] ?>">Edit</a>
                        <a href="hapus.php?No_Presensi=<?= $siswa['No_Presensi'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            <p>Total Siswa : <?= mysqli_num_rows($query) ?></p>
        </tbody>
    </table>
</body>

</html>