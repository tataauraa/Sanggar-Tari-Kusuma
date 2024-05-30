<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = intval($_POST['id']);
    $result = mysqli_query($koneksi, "SELECT * FROM tb_jadwal WHERE ID_Jadwal = $id");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="icon" href="assets/icon.png">
            <link rel="stylesheet" href="jadwal.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Jadwal - Sanggar Tari</title>
        </head>
        <body>
            <header>
                <h1>Sanggar Tari - Edit Jadwal</h1>
                <nav>
                    <ul>
                        <li><a href="penari.php">Daftar Penari</a></li>
                        <li><a href="jadwal.php" class="active">Jadwal</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <section>
                    <h2>Edit Jadwal Kelas</h2>
                    <form action="jadwal-proses.php" method="post">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['ID_Jadwal']); ?>">
                        <label for="hari">Hari:</label>
                        <input type="text" id="hari" name="hari" value="<?php echo htmlspecialchars($row['Hari']); ?>" required>
                        <label for="jam">Jam:</label>
                        <input type="text" id="jam" name="jam" value="<?php echo htmlspecialchars($row['Jam']); ?>" required>
                        <label for="kelas">Kelas:</label>
                        <input type="text" id="kelas" name="kelas" value="<?php echo htmlspecialchars($row['Kelas']); ?>" required>
                        <button type="submit" name="update">Update</button>
                    </form>
                </section>
            </main>

            <script src="js/jadwal.js"></script>
        </body>
        </html>
        <?php
    } else {
        echo "<script>
                alert('Data tidak ditemukan');
                window.location = 'jadwal.php';
              </script>";
    }
}
?>
