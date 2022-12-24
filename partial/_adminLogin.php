<?php
include '_dbconnect.php';
$loginAlert = false;
if (isset($_GET['loginFalse'])) {
    $loginAlert = true;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABTOYZ_info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="./img/ABTOYZ.png" type="image/x-icon">
    <!-- Foont Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include '_navbar.php'; ?>
    <?php
    if ($loginAlert) {
    ?>
        <div class="container mt-1">
            <div class="alert alert-success alert-dismissible border border-warning bg-dark text-white border-5">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong><i class="fa-solid fa-circle-xmark"></i> Sorry Your Admin_Penel User_Name or Password Invelid</strong>
            </div>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center">
        <div>
            <div class="wrapper">
                <div class="logo">
                    <img src="../img/ABTOYZ.png" alt="">
                </div>
                <div class="text-center mt-4 name">
                    ABTOYZ
                </div>
                <form class="p-3 mt-3" method="post" action="_adminForm.php">
                    <div class="form-field d-flex align-items-center">
                        <span class="far fa-user"></span>
                        <input type="text" name="userName" id="userName" required placeholder="Admin_Username">
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <span class="fas fa-key"></span>
                        <input type="password" name="password" id="pwd" required placeholder="Admin_Password">
                    </div>
                    <button class="btn mt-3 rmbut" type="submit">Admin Login</button>
                </form>
                <div class="text-center fs-6">
                    <!-- <a href="#">Forget password?</a> or <a href="#">Sign up</a> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>