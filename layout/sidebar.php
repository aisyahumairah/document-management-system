<html>
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">

            <li>
                <a href="../folder-dashboard/dashboard.php" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>


            <li>
                <a href="../folder-doc/indexDoc.php" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Dokumen Terkawal</span>
                </a>
            </li>

            <?php 
                if($_SESSION['role'] == "Admin" || $_SESSION['role'] == "Super Admin")
                {
            ?>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Konfigurasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="../folder-user/index.php">Pengguna</a></li>
                    <li><a href="../folder-user/register.php">Tambah Pengguna Baru</a></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

</html>