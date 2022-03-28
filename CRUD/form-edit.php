<?php
include("config.php");

if (!isset($_GET['No_Presensi'])) {
    header("Location: list-siswa.php");
}

$No_Presensi = $_GET['No_Presensi'];

$sql = "SELECT * FROM tb_siswa WHERE No_Presensi = $No_Presensi";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_object($query);
$nomorDepan = substr($siswa->No_hp, 0, 4);
$nomorTengah = substr($siswa->No_hp, 5, 4);
$nomorAkhir = substr($siswa->No_hp, 10, 4);
$nomorHp = $nomorDepan . '' . $nomorTengah . '' . $nomorAkhir;

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>

<body>
    <header>
        <h3>Form Edit Data Siswa</h3>
    </header>
    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="hidden" name="No_Presensi" value="<?= $siswa->No_Presensi ?>">
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?= $siswa->Nama ?>">
            </p>

            <p>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" placeholder="11A" value="<?= $siswa->Kelas ?>">
            </p>

            <p>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Jln Nganu, NGanu, Nganu" value="<?= $siswa->Alamat ?>">
            </p>
            <p>
                <label for="alamat">No Hp</label>
                <input type="text" name="nohp" placeholder="084565987845" value="<?= $nomorHp ?>">
            </p>
            <p>
                <a href="index.php">Kembali</a>
                <button type="submit" name="simpan">Simpan</button>
            </p>
        </fieldset>
    </form>
</body>

</html>