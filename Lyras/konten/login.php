<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($con, "SELECT * FROM login where username ='$username' and password=sha1('$password')");
    $ada = mysqli_num_rows($cek);

    if ($ada > 0) {
        $sesi = mysqli_fetch_assoc($cek);
        $_SESSION['username'] = $sesi['username'];
        header('Location: ?menu=dashboard');
    }
}
?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form accept="" method="POST">
                                    <div class="form-floating mb-3">
                                        <input name="username" class="form-control" id="inputEmail" type="text" placeholder="username" />
                                        <label for="inputEmail">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-light" name="login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">

                </div>
        </footer>
    </div>
</div>