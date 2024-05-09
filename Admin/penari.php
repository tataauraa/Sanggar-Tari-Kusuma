<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="penari.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penari - Sanggar Tari</title>
</head>

<body>
    <header>
        <h1>Sanggar Tari - Daftar Penari</h1>
        <nav>
            <ul>
                <li><a href="#" class="active">Daftar Penari</a></li>
                <li><a href="jadwal.php">Jadwal</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Daftar Penari</h2>
            <table id="penariList">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Penari</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alesa</td>
                        <td>9 tahun</td>
                        <td>Jl. Pahlawan No. 123</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Budi</td>
                        <td>10 tahun</td>
                        <td>Jl. Merdeka No. 456</td>
                    </tr>
            </table>
            
            <a href="tambah.php"><button>Tambah Penari</button></a>
        </nav>
        </section>
    </main>


    <script src="js/penari.js"></script>
</body>

</html>
