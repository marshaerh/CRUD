<?php
include('config.php');

if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // Ambil data presensi sebelumnya
    $no_presensi = mysqli_query($db, "SELECT No_Presensi FROM `tb_siswa` ORDER BY No_Presensi DESC LIMIT 1")->fetch_object()->No_Presensi;
    $nomorHpDepan = substr($_POST['nohp'], 0, 4);
    $nomorHpTengah = substr($_POST['nohp'], 4, 4);
    $nomorHpAkhir = substr($_POST['nohp'], 8);
    $nomorHp = $nomorHpDepan . '-' . $nomorHpTengah . '-' . $nomorHpAkhir;

    // query tambah data
    $no_presensi++;
    $sql = "INSERT INTO `tb_siswa` (`No_Presensi`, `Nama`, `Kelas`, `Alamat`, `No_hp`) VALUES ('$no_presensi', '$nama', '$kelas', '$alamat', '$nomorHp')";
    $query = mysqli_query($db, $sql);

    // apakah berhasil disimpan
    if ($query) {
        header('Location: index.php?status=suskses');
    } else {
        var_dump($query);
        die();

        header("Location: index.php?status=gagal");
    }
} else {
    die("Akses dilarang ..");
}
