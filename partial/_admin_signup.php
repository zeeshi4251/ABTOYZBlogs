<?php
include '_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $admin_userName = $_POST['admin_userName'];
    $admin_password = $_POST['admin_password'];
    $hash =  password_hash($admin_password, PASSWORD_DEFAULT);
    $result = $conn->query("INSERT INTO admin_penel (userName, Admin_password) VALUES ('$admin_userName','$hash')");

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}
