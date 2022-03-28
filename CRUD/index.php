<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa baru</h3>
        <h1>Sekolah Menengah Koding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php if ($_GET['status'] == "suskses") : ?>
                <b>Pendaftaran Berhasil</b>
            <?php else : ?>
                <b>Pendaftaran Gagal</b>
            <?php endif; ?>
        </p>
    <?php endif; ?>
</body>

</html>