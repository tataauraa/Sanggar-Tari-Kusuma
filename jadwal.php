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
            <h2>Tambah Jadwal Kelas</h2>
            <form action="jadwal-proses.php" method="post">
                <label for="hari">Hari:</label>
                <input type="text" id="hari" name="hari" required>
                <label for="jam">Jam:</label>
                <input type="text" id="jam" name="jam" required>
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
                <button type="submit" name="tambah">Tambah</button>
            </form>
        </section>

        <section>
            <h2>Jadwal Kelas</h2>
            <table id="jadwalTable">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data jadwal akan dimuat dari database -->
                    <?php
                    include 'koneksi.php';
                    $result = mysqli_query($koneksi, "SELECT * FROM tb_jadwal");
                    if ($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = htmlspecialchars($row['ID_Jadwal'] ?? '');
                            $hari = htmlspecialchars($row['Hari'] ?? '');
                            $jam = htmlspecialchars($row['Jam'] ?? '');
                            $kelas = htmlspecialchars($row['Kelas'] ?? '');

                            echo "<tr>";
                            echo "<td>" . $hari . "</td>";
                            echo "<td>" . $jam . "</td>";
                            echo "<td>" . $kelas . "</td>";
                            echo "<td>
                                <form action='jadwal-edit.php' method='post' style='display:inline-block;'>
                                    <input type='hidden' name='id' value='" . $id . "'>
                                    <button type='submit' name='edit'>Edit</button>
                                </form>
                                <form action='jadwal-proses.php' method='post' style='display:inline-block;'>
                                    <input type='hidden' name='id' value='" . $id . "'>
                                    <button type='submit' name='hapus'>Hapus</button>
                                </form>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <script src="js/jadwal.js"></script>
</body>

</html>
