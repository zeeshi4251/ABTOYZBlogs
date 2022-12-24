<?php
include '_dbconnect.php';
// $login = false;

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM admin_penel where userName = '$userName'");

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['admin_password'])) {
                // $login = true;
                // echo "yes";
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $userName;
                echo "<script>window.location='http://localhost/blog/admin.php?login=true'</script>";
            } else {
                // echo "NO";
                echo "<script>window.location='http://localhost/blog/partial/_adminLogin.php?loginFalse=true'</script>";
            }
        }
    } else {
        echo "<script>window.location='http://localhost/blog/partial/_adminLogin.php?loginFalse=true'</script>";
    }
}
