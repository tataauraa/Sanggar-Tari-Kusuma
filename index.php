<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANGGAR TARI KUSUMA</title>
    <link rel="stylesheet" href="index.css">
    <style>
        /* CSS untuk carousel */
        .carousel-container {
            max-width: 700px; /* Atur lebar maksimum sesuai kebutuhan Anda */
            margin: 0 auto; /* Ini akan membuat container berada di tengah */
            overflow: hidden;
            position: relative; /* Tambahkan ini */
        }

        .carousel-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            font-size: 24px;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
            z-index: 2;
        }

        .arrow-left {
            left: 10px; /* Sesuaikan posisi panah kiri */
        }

        .arrow-right {
            right: 10px; /* Sesuaikan posisi panah kanan */
        }
    </style>
</head>

<body>

    <header>
        <h2 class="logo">SANGGAR TARI KUSUMA</h2>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="login.php"><button class="btnlogin-popup">Login</button></a>
        </nav>
    </header>

    <main id="main-content">
        <div class="carousel-container" id="carousel-container">
            <img src="1.jpg" alt="">
            <div class="arrow arrow-left" onclick="prevImage()">&lt;</div>
            <div class="arrow arrow-right" onclick="nextImage()">&gt;</div>
        </div>
    </main>
    <script src="script.js"></script>

</body>

</html>
