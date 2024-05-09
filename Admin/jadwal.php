<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="jadwal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kelas - Sanggar Tari</title>
</head>

<body>
    <header>
        <h1>Sanggar Tari - Jadwal Kelas</h1>
        <nav>
            <ul>
                <li><a href="penari.php">Daftar Penari</a></li>
                <li><a href="jadwal.php" class="active">Jadwal</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Jadwal Kelas</h2>
            <!-- Tabel untuk menampilkan jadwal kelas -->
            <table id="jadwalTable">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                        <th>Penari</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <td>09.00 - 11.00</td>
                        <td>Kelas Pemula</td>
                        <td>Alesha</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
            </table>
        </section>
    </main>

    <script src="js/jadwal.js"></script>
</body>

</html>