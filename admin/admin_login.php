<?php
include ("../config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // username dan password dari form login
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT id FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // Jika result username dan password benar, row pasti hanya 1 baris
    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location:admin_artikel.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VSP - LOGIN</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="../assets/js/popper.min.js" charset="utf-8"></script>
    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
<div class="container">
    <div class="row pt-5">
        <div class="col-4 mx-auto">
            <div class="text-center">
                <img src="../assets/img/logo.png" alt="logo" width="350">
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="card-title text-center">Login</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="username" required="required"/>
                            <label class="control-label" for="input">Username</label><i class="bar"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" required="required"/>
                            <label class="control-label" for="input">Password</label><i class="bar"></i>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-vsp btn-lg btn-block" type="submit" style="font-size:15px"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>