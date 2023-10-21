<?php
if ($_GET['menu'] == 'dashboard') {
    include("./konten/dashboard.php");
} elseif ($_GET['menu'] == 'data-kendaraan') {
    include("./konten/data-kendaraan.php");
} elseif ($_GET['menu'] == 'tambah-data-kendaraan') {
    include("./konten/tambah-data-kendaraan.php");
} elseif ($_GET['menu'] == 'servis-kendaraan') {
    include("./konten/servis-kendaraan.php");
} elseif ($_GET['menu'] == 'tambah-servis-kendaraan') {
    include("./konten/tambah-servis-kendaraan.php");
} elseif ($_GET['menu'] == 'login') {
    include("./konten/login.php");
} elseif ($_GET['menu'] == 'logout') {
    session_start();
    session_destroy();
    header('Location: ?menu=login');
} elseif ($_GET['menu'] == 'laporan') {
    include("./konten/Laporan.php");
}
