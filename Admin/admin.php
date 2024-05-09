<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggar Tari - Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            
            <span class="logo_name">Sanggar Tari Kusuma</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="penari.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Daftar Penari</span>
                </a>
            </li>
            <li>
                <a href="jadwal.php">
                    <i class="bx bx-calendar"></i>
                    <span class="links_name">Jadwal</span>
                </a>
            </li>
            <li>
                <a href="#" id="logout">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
        </div>
    </div>

    <section class="home-section">
        <nav>
            <div class="profile-details">
                <span class="admin_name">Admin Sanggar Tari Kusuma</span>
            </div>
        </nav>
        <div class="home-content">
            <h1>Hi Admin!</h1>
        </div>
    </section>

    <script>
        document.getElementById("logout").addEventListener("click", function() {
            var confirmation = confirm("Apakah Anda yakin ingin logout?");
            if (confirmation) {
                // Di sini kamu bisa tambahkan logika logout
                alert("Anda telah logout!");
            }
        });
    </script>
    
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>
