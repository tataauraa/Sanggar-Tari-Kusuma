<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="tambah.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penari - Sanggar Tari</title>
</head>

<body>
    <div class="container">
        <h2>Tambah Penari</h2>
        <form id="tambahPenariForm">
            <div class="input-box">
                <label for="tanggal">Tanggal Join</label>
                <input type="text" id="tanggal" required>
            </div>
            <div class="input-box">
                <label for="namaPenari">Nama Penari</label>
                <input type="text" id="namaPenari" required>
            </div>
            <div class="input-box">
                <label for="umurPenari">Umur Penari</label>
                <input type="text" id="umurPenari" required>
            </div>
            <div class="input-box">
                <label for="alamatPenari">Alamat Penari</label>
                <input type="text" id="alamatPenari" required>
            </div>
            <button type="submit" id="simpanButton">Simpan</button>
        </form>
    </div>

    <script>
        document.getElementById('tambahPenariForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            alert('Data penari berhasil ditambahkan!');
        });

        var inputFields = document.querySelectorAll('.input-box input');
        inputFields.forEach(function(inputField) {
            inputField.addEventListener('input', function(event) {        
                console.log('Nilai input berubah:', event.target.value);
            });
        });

        document.getElementById('namaPenari').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); 
                var namaPenariValue = event.target.value;
                var dataElement = document.getElementById('data');
                dataElement.textContent = 'Nama Penari: ' + namaPenariValue;
            }
        });

        document.getElementById('simpanButton').addEventListener('click', function() {
            document.body.style.backgroundColor = 'lightblue';
        });
    </script>
</body>

</html>
