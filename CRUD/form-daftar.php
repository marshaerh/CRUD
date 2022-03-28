<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa | Sekolah Menengah Koding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa</h3>
    </header>

    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Nama Lengkap">
            </p>

            <p>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" placeholder="11A">
            </p>

            <p>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Jln Nganu, NGanu, Nganu">
            </p>
            <p>
                <label for="alamat">No Hp</label>
                <input type="text" name="nohp" placeholder="084565987845">
            </p>
            <p>
                <a href="index.php">Kembali</a>
                <button type="submit" name="daftar">Daftar</button>
            </p>
        </fieldset>
    </form>
</body>

</html>