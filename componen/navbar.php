<?php
// Periksa apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 hidden-xs">
                <a href="#" class="menu-toggle wave-effect">
                    <i class="feather icon-menu"></i>
                </a>
            </div>
            <div class="col-md-7 text-right">
                <ul>
                    <!-- Profile Menu -->
                    <li class="btn-group user-account">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-content">
                                <div class="user-name">
                                    <?php
                                    if (isset($_SESSION['nama_pengguna'])) {
                                        echo $_SESSION['nama_pengguna'];
                                    }
                                    ?>
                                </div>
                                <div class="user-plan">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="avatar">
                                <?php
                                if (isset($_SESSION['profile'])) {
                                ?>
                                    <img src="./images/guru/<?php echo $_SESSION['profile']; ?>" alt="profile" />
                                <?php
                                }
                                ?>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-toggle="modal" data-target="#modal-logout"><i class="feather icon-log-in"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu-toggle">
                        <a href="#" class="menu-toggle wave-effect">
                            <i class="feather icon-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>