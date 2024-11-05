<?php
function generate_breadcrumb()
{
    // Mendapatkan URL saat ini
    $current_url = basename($_SERVER['REQUEST_URI'], ".php");

    // Breadcrumb dasar
    $breadcrumb = '<ol class="breadcrumb">';
    $breadcrumb .= '<li class="breadcrumb-item"><a href="landing-page.php">Home</a></li>';

    // Tambahkan breadcrumb sesuai dengan URL saat ini
    if ($current_url == 'guru-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Guru</li>';
    } elseif ($current_url == 'dashboard') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Dashboard</li>';
    } elseif ($current_url == 'kriteria-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Kriteria</li>';
    } elseif ($current_url == 'penilaian-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Penilaian</li>';
    } elseif ($current_url == 'perhitungan-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Perhitungan</li>';
    } elseif ($current_url == 'perangkingan-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">Perangkingan</li>';
    } elseif ($current_url == 'user-page') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">User</li>';
    }
    // Tambahkan kondisi lainnya sesuai kebutuhan

    $breadcrumb .= '</ol>';
    return $breadcrumb;
}

function get_page_title()
{
    // Mendapatkan URL saat ini
    $current_url = basename($_SERVER['REQUEST_URI'], ".php");

    // Tentukan judul halaman sesuai dengan URL saat ini
    if ($current_url == 'guru-page') {
        return 'Guru';
    } elseif ($current_url == 'landing-page') {
        return 'Dashboard';
    } elseif ($current_url == 'kriteria-page') {
        return 'Kriteria';
    } elseif ($current_url == 'penilaian-page') {
        return 'Penilaian';
    } elseif ($current_url == 'perhitungan-page') {
        return 'Perhitungan';
    } elseif ($current_url == 'perangkingan-page') {
        return 'Perangkingan';
    } elseif ($current_url == 'user-page') {
        return 'User';
    }
    // Tambahkan kondisi lainnya sesuai kebutuhan

    return 'Home'; // Default title
}
?>


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title"><?php echo get_page_title(); ?></h4>
            <nav aria-label="breadcrumb">
                <?php echo generate_breadcrumb(); ?>
            </nav>
        </div>
        <!-- <div class="col-6">
                     <div class="text-right">
                        <small>Users</small>
                        <h5 class="text-info">3,458</h5>
                     </div>
                  </div> -->
    </div>
</div>