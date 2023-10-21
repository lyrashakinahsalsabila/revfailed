<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($con, "SELECT * FROM login where username ='$username' and password=sha1('$password')");
    $ada = mysqli_num_rows($cek);

    if ($ada > 0) {
        $sesi = mysqli_fetch_assoc($cek);
        $user = $sesi['username'];
        header('Location: dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="./bs.min.css">
    <link rel="stylesheet" href="custom.bs.css">
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 ">
                <div class="card login">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-light" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>