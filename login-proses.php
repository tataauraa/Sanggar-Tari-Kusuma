<?php
session_start();
include 'koneksi.php';

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE Email = '$email'";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['Password'])) {
            $_SESSION['username'] = $user['Username'];
            echo "
                <script>
                    alert('Selamat datang, " . $user['Username'] . "!');
                    window.location = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Password salah');
                    window.location = 'login.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Email tidak terdaftar');
                window.location = 'login.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Pastikan Anda Mengisi Semua Data');
            window.location = 'login.php';
        </script>
    ";
}
?>
