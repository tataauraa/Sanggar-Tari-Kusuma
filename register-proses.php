<?php
include 'koneksi.php';

if (isset($_POST['email'], $_POST['username'], $_POST['password'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Menghindari SQL injection dengan menggunakan prepared statements
    $stmt = $koneksi->prepare("INSERT INTO tb_admin (Email, Password, Username) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $username);

    if ($stmt->execute()) {
        echo "
            <script>
                alert('Registrasi Berhasil! Silahkan login');
                window.location = 'login.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan: ' . $stmt->error);
                window.location = 'registrasi.php';
            </script>
        ";
    }
    
    $stmt->close();
} else {
    echo "
        <script>
            alert('Pastikan Anda Mengisi Semua Data');
            window.location = 'registrasi.php';
        </script>
    ";
}
?>
