<?php
// Periksa apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="sidebar">
    <div class="logo">
        <a href="landing-page.php">
            <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png" alt="BA" /></span>
            <span class="logo-full">SPK</span>
        </a>
    </div>
    <ul id="sidebarCookie">
        <li class="spacer"></li>
        <li class="profile">
            <?php
            if (isset($_SESSION['nama_pengguna'])) {
                // Lakukan query untuk mendapatkan profile berdasarkan nama_pengguna dari sesi
                $nama_pengguna = $_SESSION['nama_pengguna'];
                $query = "SELECT profile FROM pengguna WHERE nama_pengguna='$nama_pengguna'";
                $result = mysqli_query($connect, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $data = mysqli_fetch_assoc($result);
                    $profile_image = $data['profile'];
                } else {
                    // Jika tidak ditemukan profil, gunakan gambar default
                    $profile_image = 'image.png';
                }
            } else {
                // Jika sesi nama_pengguna tidak ditemukan, gunakan gambar default
                $profile_image = 'image.png';
            }
            ?>
            <span class="profile-image">
                <img src="./images/guru/<?php echo htmlspecialchars($profile_image); ?>" alt="profile" />
            </span>
            <span class="profile-name">
                <?php
                if (isset($_SESSION['nama_pengguna'])) {
                    echo htmlspecialchars($_SESSION['nama_pengguna']);
                }
                ?>
            </span>
            <span class="profile-info">
                <?php
                if (isset($_SESSION['username'])) {
                    echo htmlspecialchars($_SESSION['username']);
                }
                ?>
            </span>
        </li>
        <li class="spacer"></li>
        <li class="nav-item">
            <a href="landing-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-monitor"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="guru-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-user"></i>
                <span class="menu-title">Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="kriteria-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-clipboard"></i>
                <span class="menu-title">Kriteria</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="penilaian-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-plus"></i>
                <span class="menu-title">Input Data</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="perhitungan-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-bar-chart"></i>
                <span class="menu-title">Hasil Perhitungan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="perangkingan-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-bar-chart-2"></i>
                <span class="menu-title">Hasil Perangkingan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="user-page.php" class="nav-link wave-effect nav-single">
                <i class="feather icon-users"></i>
                <span class="menu-title">User</span>
            </a>
        </li>
    </ul>
</div>