<?php
// error_reporting(0);
session_start();
include("./config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    <?php include("./komponen/head.html") ?>
</head>

<body class="sb-nav-fixed">
    <?php
    if (!empty($_SESSION['username'])) {
        include("./admin.php");
    } else {
        include("./konten/login.php");
    }
    ?>

    <!-- js -->
    <?php include("./komponen/js.html"); ?>
</body>

</html>