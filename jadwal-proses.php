<?php
include 'koneksi.php';

// Tambah jadwal
if (isset($_POST['tambah'])) {
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO tb_jadwal (Hari, Jam, Kelas) VALUES ('$hari', '$jam', '$kelas')";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Jadwal berhasil ditambahkan');
                window.location = 'jadwal.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "');
                window.location = 'jadwal.php';
              </script>";
    }
}

// Hapus jadwal
if (isset($_POST['hapus'])) {
    $id = intval($_POST['id']); // memastikan id adalah integer

    $sql = "DELETE FROM tb_jadwal WHERE ID_Jadwal = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Jadwal berhasil dihapus');
                window.location = 'jadwal.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "');
                window.location = 'jadwal.php';
              </script>";
    }
}

// Update jadwal
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $kelas = $_POST['kelas'];

    $sql = "UPDATE tb_jadwal SET Hari = '$hari', Jam = '$jam', Kelas = '$kelas' WHERE ID_Jadwal = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Jadwal berhasil diperbarui');
                window.location = 'jadwal.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "');
                window.location = 'jadwal.php';
              </script>";
    }
}
?>
